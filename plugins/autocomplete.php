<?php

/**
 * Autocomplete for keywords, tables and columns.
 * @author David Grudl
 * @license BSD
 */
class AdminerAutocomplete
{
	function head()
	{
		if (!isset($_GET['sql'])) {
			return;
		}

		$suggests = array();
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
