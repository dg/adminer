<?php

/**
 * A tool for generating SQL queries from natural language prompts.
 * @author David Grudl
 */
class AdminerSqlWizard
{
	public function __construct(
		private string $apiKey,
		private string $model = 'gpt-4o',
	) {
	}


	public function csp()
	{
		$csp = Adminer\csp();
		unset($csp[0]['connect-src']);
		return $csp;
	}


	public function head()
	{
		if (!isset($_GET['sql'])) {
			return;
		}

		$prompt = $_POST['prompt'] ?? '';

		$struct = 'Engine: ' . Adminer\get_driver(Adminer\DRIVER) . "\n\n";

		foreach (array_keys(Adminer\tables_list()) as $table) {
			$struct .= "Table `$table`\n";
			$struct .= "-----\n";
			if ($comment = Adminer\table_status($table)['Comment'] ?? null) {
				$struct .= "comment: $comment\n";
			}
			$struct .= "columns:\n";
			foreach (Adminer\fields($table) as $field) {
				$struct .= "- `$field[field]` ($field[full_type]) $field[comment]\n";
			}
			$struct .= "\n";

			if ($foreign_keys = Adminer\foreign_keys($table)) {
				$struct .= "foreign_keys:\n";
				foreach ($foreign_keys as $key) {
					$struct .= '- source (' . implode(', ', array_map(fn($col) => "`$table.$col`", $key['source'])) . ')'
						. ' target (' . implode(', ', array_map(fn($col) => "`$key[table].$col`", $key['target'])) . ")\n";
				}
				$struct .= "\n";
			}
		} ?>

<script<?= Adminer\nonce() ?>>

const model = {
	apiKey: <?= json_encode($this->apiKey)?>,
	model: <?= json_encode($this->model)?>,
	apiUrl: 'https://api.openai.com/v1/chat/completions',
	structure: <?= json_encode($struct)?>,

	buildSystemPrompt: function () {
		return `
You are a helpful AI assistant that translates a user's natural language request into a valid SQL query.
Before providing the final answer, you must think through the requirements step by step, and only then provide a single final SQL query enclosed in <sql>...</sql> tags.

Follow these steps:
1. Consider the user's request carefully and understand what data they want.
2. Consider the provided database structure. You can only use tables and columns that are listed in the "Database structure" section.
3. Think step-by-step about how to form a correct SQL query that fulfills the user's request. Be very careful that the query doesn't contain any errors.
4. Once you have reasoned to a correct query, output it in the following format:
5. Generate understandable aliases for the displayed columns, as they will be shown to the user.
6. For better understanding, add SQL comments to the query.

<sql>
SELECT ... FROM ... WHERE ...
</sql>

Only include the final SQL inside these tags. Do not include your reasoning or any other text outside of the <sql>...</sql> block.
If it's not possible to solve the task, the assignment is unclear, or you need more information, return a comment with message in this block.

Database schema
===============
${this.structure}
		`.trim();
	},

	sendRequest: async function (systemPrompt, userPrompt) {
		let payload = {
			model: this.model,
			stream: true,
			messages: [
				{ role: 'system', content: systemPrompt },
				{ role: 'user', content: userPrompt },
			],
		};

		let response = await fetch(this.apiUrl, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
				'Authorization': `Bearer ${this.apiKey}`,
			},
			body: JSON.stringify(payload),
		});

		if (!response.ok) {
			throw new Error(`HTTP error: ${response.status}`);
		}

		return response.body;
	},

	extractSQL: function (text) {
		let match = text.match(/<sql>([\s\S]*?)(<\/sql>|$)/);
		return match ? match[1].trim() : null;
	},

	processStream: async function (stream, onProgress, onComplete) {
		let reader = stream.getReader();
		let decoder = new TextDecoder('utf-8');
		let fullResponse = '';

		while (true) {
			let { value, done } = await reader.read();
			if (done) {
				break;
			}

			let jsonChunks = decoder.decode(value);
			let jsonObjects = jsonChunks.trim().split('\n').filter((line) => line.startsWith('data: ')).map((line) => line.substring(6));

			for (let jsonObj of jsonObjects) {
				if (jsonObj === '[DONE]') {
					continue;
				}

				try {
					let parsedChunk = JSON.parse(jsonObj);
					let content = parsedChunk.choices[0]?.delta?.content || '';
					fullResponse += content;
					onProgress(fullResponse);
				} catch (error) {
					console.error('JSON parsing error:', error, jsonObj);
				}
			}
		}

		console.log('Full LLM response:', fullResponse);
		onComplete();
		return this.extractSQL(fullResponse);
	},
};


const ui = {
	promptTextarea: null,
	sqlTextarea: null,
	sendBtn: null,
	animationInterval: null,
	loading: false,

	init: function () {
		this.promptTextarea = document.getElementById('promptTextarea');
		this.sqlTextarea = document.querySelector('.sqlarea');
		this.sendBtn = document.getElementById('sendBtn');
		this.sendBtn.addEventListener('click', this.onSendClick.bind(this));
	},

	onSendClick: async function () {
		let userRequest = this.promptTextarea.value.trim();
		if (!userRequest) {
			alert('Enter a verbal request.');
			return;
		}

		this.setLoading(true);

		try {
			let systemPrompt = model.buildSystemPrompt();
			let userPrompt = `User request: ${userRequest}`;
			let stream = await model.sendRequest(systemPrompt, userPrompt);

			let sqlQuery = await model.processStream(stream,
				(fullResponse) => {
					let partialSqlQuery = model.extractSQL(fullResponse);
					if (partialSqlQuery) {
						if (this.loading) {
							this.setLoading(false);
						}
						this.sqlTextarea.value = partialSqlQuery;
					}
				},
				() => { // onComplete
					this.setLoading(false);
				},
			);

			this.sqlTextarea.value = sqlQuery;

		} catch (err) {
			console.error('Error:', err);
			alert('An error occurred when querying the OpenAI API.');
			this.setLoading(false);
		}
	},

	/**
	 * Shows/hides the loading animation.
	 */
	setLoading: function (loading) {
		this.loading = loading;
		this.sendBtn.disabled = loading;

		if (loading) {
			this.sqlTextarea.value = '';
			let loadingChars = ['|', '/', '-', '\\'];
			let i = 0;
			this.animationInterval = setInterval(() => {
				this.sqlTextarea.value = loadingChars[i % loadingChars.length];
				i++;
			}, 200);
		} else {
			clearInterval(this.animationInterval);
			this.sqlTextarea.value = '';
		}
	},
};


document.addEventListener('DOMContentLoaded', () => {
	let mainDiv = document.createElement('div');
	mainDiv.style.clear = 'both';

	mainDiv.innerHTML = `
		<textarea id="promptTextarea" name="prompt" placeholder="E.g. 'List all orders for the last 30 days'" style="height: 100px"></textarea>

		<input id="sendBtn" type="button" value="Generate SQL"><br>
	`;

	let sqlArea = document.querySelector('.sqlarea');
	if (!sqlArea) {
		console.error('Element .sqlarea not found.');
		return;
	}

	sqlArea.parentNode.insertBefore(mainDiv, sqlArea.nextSibling);
	document.getElementById('promptTextarea').value = <?= json_encode($prompt) ?>;

	ui.init();
});

</script>
<?php
	}
}
