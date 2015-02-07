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

		$suggests = $tables = array_keys(tables_list());
		foreach ($tables as $table) {
			foreach (fields($table) as $field => $foo) {
				$suggests[] = "$table.$field";
			}
		}
		?>
<script type="text/javascript" src="static/jquery.min.js"></script>
<script type="text/javascript" src="static/tabcomplete/tabcomplete.js"></script>
<style>.hint { color: #bdc3c7; }</style>
<script type="text/javascript">
$(function(){
	$('.sqlarea').tabcomplete(['<?php echo implode("', '", str_replace("'\\", '', $suggests)) ?>']);
});
</script>
<?php
	}

}
