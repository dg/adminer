<?php

/**
 * Autocomplete for keywords, tables and columns.
 * @author David Grudl
 * @license BSD
 */
class AdminerAutocomplete
{
	var $keywords = array(
		'DELETE FROM', 'DISTINCT', 'EXPLAIN', 'FROM', 'GROUP BY', 'HAVING', 'INSERT INTO', 'INNER JOIN', 'IGNORE',
		'LIMIT', 'LEFT JOIN', 'NULL', 'ORDER BY', 'ON DUPLICATE KEY UPDATE', 'SELECT', 'UPDATE', 'WHERE',
	);

	function head()
	{
		if (!isset($_GET['sql'])) {
			return;
		}

		$suggests = array();
		foreach ($this->keywords as $keyword) {
				$suggests[] = "$keyword ";
		}
		foreach (array_keys(tables_list()) as $table) {
			$suggests[] = $table;
			foreach (fields($table) as $field => $foo) {
				$suggests[] = "$table.$field ";
			}
		}
		?>
<script type="text/javascript" src="static/jquery.min.js"></script>
<script type="text/javascript" src="static/tabcomplete/tabcomplete.js"></script>
<style>.hint { color: #bdc3c7; }</style>
<script type="text/javascript">
$(function(){
	$('.sqlarea').tabcomplete(<?php echo json_encode($suggests) ?>);
});
</script>
<?php
	}

}
