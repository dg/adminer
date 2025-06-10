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
		$csp[0]['connect-src'] .= ' https://api.openai.com';
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
You are an AI assistant specialized in converting natural language requests into valid SQL queries.
Your task is ONLY to generate SQL queries.

REQUIRED OUTPUT FORMAT:
1. First, provide problem analysis (outside SQL blocks)
2. Then provide final SQL query(ies) EXCLUSIVELY within a SINGLE <sql>...</sql> element
3. Use exactly ONE SQL block containing one or more SQL statements as needed

PROCESS:
1. Carefully study the user's request and understand what data they want to retrieve
2. Review the available database structure - use ONLY tables and columns listed in the "Database structure" section
3. Perform step-by-step analysis of how to construct the correct SQL query
4. Create understandable aliases for displayed columns
5. Add SQL comments for better understanding
6. Generate final query(ies) in the required format

SQL BLOCK RULES:
- Use exactly ONE <sql>...</sql> element in your response
- This single block can contain multiple SQL statements separated by semicolons
- NEVER include SQL code outside the <sql>...</sql> block
- If the task is unsolvable or unclear, return a comment within the SQL block

IMPORTANT - TABLE QUOTING:
- Quote table names that could be considered keywords according to the specific database requirements
- Use the appropriate quoting style for the database type specified in the "Database structure" section

OUTPUT FORMAT EXAMPLE:
Analysis: [your problem analysis]

<sql>
-- First query comment
SELECT
  column1 AS meaningful_alias1,
  column2 AS meaningful_alias2
FROM \`order\` t1  -- quoted if needed for the database type
WHERE condition;

-- Second query comment (if needed)
SELECT
  column3 AS meaningful_alias3
FROM \`table2\` t2
WHERE other_condition;
</sql>

Database structure
==================
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
		let match = text.match(/(<sql>|```sql)([\s\S]*?)(<\/sql>|```|$)/);
		return match ? match[2].trim() : null;
	},

	processStream: async function (stream, onProgress) {
		let reader = stream.getReader();
		let decoder = new TextDecoder('utf-8');
		let response = '';

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

				let parsedChunk = JSON.parse(jsonObj);
				let content = parsedChunk.choices[0]?.delta?.content || '';
				response += content;
				onProgress(this.extractSQL(response));
			}
		}

		console.log('LLM response:', response);

		let sql = this.extractSQL(response);
		if (!sql) {
			throw new Error(`Unable extract SQL`);
		}

		return sql;
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
		this.promptTextarea.addEventListener('keydown', (event) => {
			if (event.ctrlKey && event.key === 'Enter') {
				event.preventDefault();
				event.stopPropagation();
				this.onSendClick();
			}
		});
	},

	onSendClick: async function () {
		if (this.loading) {
			return;
		}

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

			let sql = await model.processStream(stream,
				(partialSql) => {
					if (partialSql !== null) {
						this.setLoading(false);
						this.sqlTextarea.value = partialSql;
					}
				},
			);

			this.setLoading(false);
			this.sqlTextarea.value = sql;
			this.sqlTextarea.focus();

		} catch (err) {
			this.setLoading(false);
			console.error('Error:', err);
			alert('An error occurred when querying the OpenAI API (see console).');
		}
	},

	/**
	 * Shows/hides the loading animation.
	 */
	setLoading: function (loading) {
		if (this.loading === loading) {
			return;
		}

		this.loading = loading;
		this.sendBtn.disabled = loading;
		this.promptTextarea.disabled = loading;
		let loadingChars = ['|', '/', '-', '\\'];

		if (this.animationInterval) {
			clearInterval(this.animationInterval);
			this.animationInterval = null;
		}

		if (loading) {
			this.sqlTextarea.value = '';
			let i = 0;
			this.animationInterval = setInterval(() => {
				this.sqlTextarea.value = loadingChars[i % loadingChars.length];
				i++;
			}, 200);

		} else if (loadingChars.includes(this.sqlTextarea.value)) {
			 this.sqlTextarea.value = '';
		}
	},
};


document.addEventListener('DOMContentLoaded', () => {
	let mainDiv = document.createElement('div');

	mainDiv.innerHTML = `
		<textarea id="promptTextarea" name="prompt" placeholder="E.g. 'List all orders for the last 30 days'" style="height: 100px"></textarea>

		<input id="sendBtn" type="button" value="Generate SQL"><br>
	`;

	let form = document.querySelector('.sqlarea').form;
	form.prepend(mainDiv);
	document.getElementById('promptTextarea').value = <?= json_encode($prompt) ?>;

	ui.init();
});

</script>
<?php
	}
}
