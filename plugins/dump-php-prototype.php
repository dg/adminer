<?php

/**
 * PHP prototype export
 * @author David Grudl
 * @license BSD
 */
class AdminerDumpPhpPrototype {
	var $output = array();
	var $shutdown_callback = false;
	var $typePatterns = array(
		'^_' => 'string', // PostgreSQL arrays
		'(TINY|SMALL|SHORT|MEDIUM|BIG|LONG)(INT)?|INT(EGER|\d+| IDENTITY)?|(SMALL|BIG|)SERIAL\d*|COUNTER|YEAR|BYTE|LONGLONG|UNSIGNED BIG INT' => 'int',
		'(NEW)?DEC(IMAL)?(\(.*)?|NUMERIC|REAL|DOUBLE( PRECISION)?|FLOAT\d*|(SMALL)?MONEY|CURRENCY|NUMBER' => 'float',
		'BOOL(EAN)?' => 'bool',
		'TIME' => 'time',
		'DATE' => 'date',
		'(SMALL)?DATETIME(OFFSET)?\d*|TIME(STAMP.*)?' => 'datetime',
		'BYTEA|(TINY|MEDIUM|LONG|)BLOB|(LONG )?(VAR)?BINARY|IMAGE' => 'binary',
	);

	function dumpFormat() {
		return array('code-insert' => 'Nette Database', 'code-form' => 'Nette Form');
	}

	function dumpHeaders() {
		if ($_POST['format'] == 'code-insert' || $_POST['format'] == 'code-form') {
			header('Content-Type: text/plain; charset=utf-8');
			return $_POST['format'];
		}
	}

	function dumpTable($table) {
		if ($_POST['format'] == 'code-insert') {
			echo "\$db->query('INSERT INTO " . table($table) . "', [\n";
			foreach (fields($table) as $field => $foo) {
				echo "\t'$field' => \$$field,\n";
			}
			echo "]);\n\n";
			return true;

		} elseif ($_POST['format'] == 'code-form') {
			foreach (fields($table) as $field => $info) {
				if (!empty($info['auto_increment'])) {
					continue;
				}

				$label = ucfirst(str_replace('_', ' ', $field));
				$args = var_export($field, true) . ', ' . var_export($label . ':', true);
				$length = (int) $info['length'];
				$lenghtArgs = $info['length'] ? ', null, ' . $length : '';
				$type = $this->detectType($info['type']);

				if ($type === 'bool' || $info['type'] === 'tinyint') {
					echo '$form->addCheckbox(', var_export($field, true), ', ', var_export($label, true), ')';
					$info['null'] = true;
				} elseif ($type === 'int' && strpos($field, '_id')) {
					echo "\$form->addSelect($args)";
				} elseif ($type === 'int') {
					echo "\$form->addInteger($args)";
				} elseif ($type === 'datetime') {
					echo "\$form->addText($args)\n\t->setType('datetime-local')";
				} elseif ($type === 'date') {
					echo "\$form->addText($args)\n\t->setType('date')";
				} elseif ($type === 'time') {
					echo "\$form->addText($args)\n\t->setType('time')";
				} elseif ($type === 'float') {
					echo "\$form->addText($args)\n\t->addRule(\$form::FLOAT)";
				} elseif ($type === 'string' && strpos($info['type'], 'text') === false) {
					if (strpos($field, 'email') === false) {
						echo "\$form->addText($args$lenghtArgs)";
					} else {
						echo "\$form->addEmail($args)";
						if ($length) {
							echo "\n\t->addRule(\$form::MAX_LENGTH, null, $length)";
						}
					}
				} elseif ($type === 'string') {
					echo "\$form->addTextArea($args)";
				} else {
					echo "\$form->addText($args$lenghtArgs)";
				}

				if (!$info['null']) {
					echo "\n\t->setRequired()";
				}

				echo ";\n";
			}
			echo "\$form->addSubmit('send');\n";
			echo "\$form->onSuccess[] = [\$this, 'formSucceeded'];\n";
			echo "\n\n";
			return true;
		}
	}

	function dumpData($table, $style, $query) {
		if ($_POST['format'] == 'code-insert' || $_POST['format'] == 'code-form') {
			return true;
		}
	}

	function detectType($type)
	{
		static $cache;
		if (!isset($cache[$type])) {
			$cache[$type] = 'string';
			foreach ($this->typePatterns as $s => $val) {
				if (preg_match("#^($s)$#i", $type)) {
					return $cache[$type] = $val;
				}
			}
		}
		return $cache[$type];
	}
}
