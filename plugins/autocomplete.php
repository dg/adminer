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
<script type="text/javascript" src="static/jquery.a-tools.js"></script>
<script type="text/javascript" src="static/jquery.asuggest.js"></script>
<script type="text/javascript">
$(function(){
	if (navigator.appName == 'Microsoft Internet Explorer') {
		return;
	}

    $('.sqlarea').asuggest(['<?php echo implode("', '", str_replace("'\\", '', $suggests)) ?>'], {
        stopSuggestionKeys: [$.asuggestKeys.RETURN, 190 /* PERIOD */],
        ignoreCase: true
    });
});
</script>
<?php
	}

}
