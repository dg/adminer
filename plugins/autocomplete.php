<?php

/**
 * Autocomplete for keywords, tables and columns.
 * @author David Grudl
 * @license BSD
 */
class AdminerAutocomplete
{
	private array $keywords = [
		'DELETE FROM', 'DISTINCT', 'EXPLAIN', 'FROM', 'GROUP BY', 'HAVING', 'INSERT INTO', 'INNER JOIN', 'IGNORE',
		'LIMIT', 'LEFT JOIN', 'NULL', 'ORDER BY', 'ON DUPLICATE KEY UPDATE', 'SELECT', 'UPDATE', 'WHERE',
	];


	public function head()
	{
		if (!isset($_GET['sql'])) {
			return;
		}

		$suggests = [];
		foreach (array_keys(tables_list()) as $table) {
			$suggests[] = $table;
			foreach (fields($table) as $field => $foo) {
				$suggests[] = "$table.$field";
			}
		} ?>
<style<?= nonce() ?>>
.ace_editor {
	width: 100%;
	height: 500px;
	resize: both;
	border: 1px solid black;
}
</style>
<script<?= nonce() ?> src="static/ace/ace.js"></script>
<script<?= nonce() ?> src="static/ace/ext-language_tools.js"></script>
<script<?= nonce() ?>>
document.addEventListener('DOMContentLoaded', () => {

	let keywords = <?= json_encode($this->keywords) ?>;
	let suggests = <?= json_encode($suggests) ?>;
	let textarea = document.querySelector('.sqlarea');
	let form = textarea.form;
	let editor;

	ace.config.set('basePath', 'static/ace');
	editor = ace.edit(textarea);
	editor.setTheme('ace/theme/tomorrow');
	editor.session.setMode('ace/mode/sql');
	editor.setOptions({
		fontSize: 14,
		enableBasicAutocompletion: [{
			identifierRegexps: [/[a-zA-Z_0-9\.\-\u00A2-\uFFFF]/], // added dot
			getCompletions: (editor, session, pos, prefix, callback) => {
				// note, won't fire if caret is at a word that does not have these letters
				callback(null, [
					...keywords.map((word) => ({ value: word + ' ', score: 1, meta: 'keyword' })),
					...suggests.map((word) => ({ value: word + ' ', score: 2, meta: 'name' })),
				]);
			},
		}],
		// to make popup appear automatically, without explicit ctrl+space
		enableLiveAutocompletion: true,
	});

	textarea.hidden = true;
	form.appendChild(textarea);

	// synchronize changes in textarea.value and ACE editor
	const originalDescriptor = Object.getOwnPropertyDescriptor(HTMLTextAreaElement.prototype, 'value');
	Object.defineProperty(textarea, 'value', {
		get: function () {
			return editor.getSession().getValue();
		},
		set: function (val) {
			originalDescriptor.set.call(this, val);
			editor.setValue(val, 1); // 1: cursor to end
		},
	});
});
</script>
<?php
	}
}
