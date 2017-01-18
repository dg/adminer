<?php

/**
 * PHP prototype export
 * @author David Grudl
 * @license BSD
 */
class AdminerDumpPhpPrototype {
	var $output = array();
	var $shutdown_callback = false;

	function dumpFormat() {
		return array('code' => 'Code');
	}

	function dumpHeaders() {
		if ($_POST['format'] == 'code') {
			header('Content-Type: text/plain; charset=utf-8');
			return 'code';
		}
	}

	function dumpTable($table) {
		if ($_POST['format'] == 'code') {
			echo "\$db->query('INSERT INTO $table', [\n";
			foreach (fields($table) as $field => $foo) {
				echo "\t'$field' => \$$field,\n";
			}
			echo "]);\n\n";
			return true;
		}
	}

	function dumpData($table, $style, $query) {
		if ($_POST['format'] == 'code') {
			return true;
		}
	}

}
