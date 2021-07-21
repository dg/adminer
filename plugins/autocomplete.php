<?php

/**
 * Autocomplete for keywords, tables and columns.
 * @author David Grudl
 * @license BSD
 */
class AdminerAutocomplete
{
	public $keywords = [
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
<style<?php echo nonce();?>>
.ace_editor {
	width: 100%;
    height: 500px;
	resize: both;
	border: 1px solid black;
}
</style>
<script<?php echo nonce();?> src="static/ace/ace.js"></script>
<script<?php echo nonce();?> src="static/ace/ext-language_tools.js"></script>
<script<?php echo nonce();?>>
document.addEventListener('DOMContentLoaded', () => {

	var keywords = <?php echo json_encode($this->keywords) ?>;
	var suggests = <?php echo json_encode($suggests) ?>;
	var textarea = document.querySelector('.sqlarea');
	var form = textarea.form;
	var editor;

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
					...keywords.map((word) => ({value: word + ' ', score: 1, meta: 'keyword'})),
					...suggests.map((word) => ({value: word + ' ', score: 2, meta: 'name'}))
				]);
			},
		}],
		// to make popup appear automatically, without explicit ctrl+space
		enableLiveAutocompletion: true,
	});

	textarea.hidden = true;
	form.appendChild(textarea);
	editor.getSession().on('change', () => {
		textarea.value = editor.getSession().getValue();
	});
});
</script>
<?php
	}
}
