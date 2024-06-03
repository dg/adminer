<?php

/**
 * PHP prototype export
 * @author David Grudl
 * @license BSD
 */
class AdminerDumpPhpPrototype
{
	public $output = [];
	public $shutdown_callback = false;
	public $typePatterns = [
		'^_' => 'string', // PostgreSQL arrays
		'(SMALL|SHORT|MEDIUM|BIG|LONG)(INT)?|INT(EGER|\d+| IDENTITY)?|(SMALL|BIG|)SERIAL\d*|COUNTER|YEAR|BYTE|LONGLONG|UNSIGNED BIG INT' => 'int',
		'(NEW)?DEC(IMAL)?(\(.*)?|NUMERIC|REAL|DOUBLE( PRECISION)?|FLOAT\d*|(SMALL)?MONEY|CURRENCY|NUMBER' => 'float',
		'BOOL(EAN)?|TINYINT' => 'bool',
		'TIME' => 'time',
		'DATE' => 'date',
		'(SMALL)?DATETIME(OFFSET)?\d*|TIME(STAMP.*)?' => 'datetime',
		'BYTEA|(TINY|MEDIUM|LONG|)BLOB|(LONG )?(VAR)?BINARY|IMAGE' => 'binary',
	];
	public $phpTypes = [
		'date' => '\DateTimeImmutable',
		'datetime' => '\DateTimeImmutable',
		'binary' => 'string',
	];
	private $formats = [
		'code-insert' => 'Nette Database',
		'code-form' => 'Nette Forms',
		'code-class' => 'Form Class',
	];


	public function dumpFormat()
	{
		return $this->formats;
	}


	public function dumpHeaders()
	{
		if (isset($this->formats[$_POST['format']])) {
			echo '<script' . nonce() . ' type="text/javascript" src="static/prism.js"></script>';
			echo '<link rel="stylesheet" href="static/prism.css">';
			return $_POST['format'];
		}
	}


	public function dumpTable($table)
	{
		if ($_POST['format'] == 'code-insert') {
			ob_start();
			$this->exportAsInsertQuery($table);
			$this->printCode(ob_get_clean());

		} elseif ($_POST['format'] == 'code-form') {
			ob_start();
			$this->exportAsForm($table);
			$this->printCode(ob_get_clean());

		} elseif ($_POST['format'] == 'code-class') {
			ob_start();
			$this->exportAsDataClass($table, false);
			$this->printCode(ob_get_clean());

			ob_start();
			$this->exportAsDataClass($table, true);
			$this->printCode(ob_get_clean());

		} else {
			return;
		}

		return true;
	}


	private function printCode($code)
	{
		echo '<pre style="user-select:all"><code class="language-php">',
			htmlspecialchars($code),
			'</cody></pre>';
	}


	private function exportAsInsertQuery($table)
	{
		echo '// $db->table(' . var_export($table, true) . ")->insert([\n";
		echo "\$db->query('INSERT INTO " . table($table) . "', [\n";
		foreach (fields($table) as $field => $foo) {
			echo "\t'$field' => \$data->$field,\n";
		}
		echo "]);\n\n";
	}


	private function exportAsForm($table)
	{
		foreach (fields($table) as $field => $info) {
			if (!empty($info['auto_increment'])) {
				continue;
			}

			$label = ucfirst(str_replace('_', ' ', $field));
			$args = var_export($field, true) . ', ' . var_export($label . ':', true);
			$type = $this->detectType($info['type']);
			$rules = '';

			if ($type === 'bool') {
				echo '$form->addCheckbox(', var_export($field, true), ', ', var_export($label, true), ')';
				$info['null'] = true;
			} elseif ($type === 'int' && strpos($field, '_id')) {
				echo "\$form->addSelect($args)";
			} elseif ($type === 'int') {
				echo "\$form->addInteger($args)";
				if ($range = $this->detectRange($info)) {
					if ($range[1] === null) {
						$rules .= "\n\t->addRule(\$form::Min, null, {$range[0]})";
					} else {
						$rules .= "\n\t->addRule(\$form::Range, null, [{$range[0]}, {$range[1]}])";
					}
				}
			} elseif ($info['type'] === 'enum') {
				echo "\$form->addSelect($args, []) /*" . $info['length'] . '*/';
			} elseif ($info['type'] === 'set') {
				echo "\$form->addMultiSelect($args, []) /*" . $info['length'] . '*/';
			} elseif ($type === 'datetime') {
				echo "\$form->addDateTime($args)";
			} elseif ($type === 'date') {
				echo "\$form->addDate($args)";
			} elseif ($type === 'time') {
				echo "\$form->addTime($args)";
			} elseif ($type === 'float') {
				echo "\$form->addFloat($args)";
			} elseif ($type === 'string') {
				$length = $this->detectLength($info);
				if (str_contains($info['type'], 'text')) {
					echo "\$form->addTextArea($args)";
				} elseif (str_contains($field, 'email')) {
					echo "\$form->addEmail($args)";
				} else {
					$args .= $length ? ', maxLength: ' . $length : '';
					echo "\$form->addText($args)";
					$length = null;
				}
				if ($length) {
					$rules .= "\n\t->addRule(\$form::MaxLength, null, $length)";
				}
			} else {
				echo "\$form->addText($args)";
			}

			if (!$info['null']) {
				echo "\n\t->setRequired()";
			}

			echo $rules;
			echo ";\n";
		}
		echo "\$form->addSubmit('send');\n";
		echo "\$form->onSuccess[] = \$this->formSucceeded(...);\n";
		echo "\n\n";
	}


	private function exportAsDataClass($table, $promo)
	{
		$class = ucwords(str_replace('_', ' ', $table));
		$class = preg_replace('~\W~', '', $class) . 'FormData';
		echo "final class $class\n";
		echo "{\n";
		if ($promo) {
			echo "\tpublic function __construct(\n";
		}
		foreach (fields($table) as $field => $info) {
			$type = $this->detectType($info['type']);
			$type = $this->phpTypes[$type] ?? $type;
			if ($info['null']) {
				$type = '?' . $type;
			}
			echo $promo ? "\t" : '';
			echo "\tpublic $type \$$field";
			$default = $info['default'];
			if ($default !== null && $default !== 'CURRENT_TIMESTAMP') {
				try {
					@settype($default, $type); // may be invalid type
					echo ' = ' . var_export($default, true);
				} catch (ValueError $e) {
				}
			}
			echo $promo ? ",\n" : ";\n";
		}
		if ($promo) {
			echo "\t) {\n\t}\n";
		}
		echo "}\n";
	}


	public function dumpData($table, $style, $query)
	{
		if (isset($this->formats[$_POST['format']])) {
			return true;
		}
	}


	public function detectType($type)
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


	public function detectLength($info)
	{
		if (is_numeric($info['length'])) {
			return (int) $info['length'];
		}
		if (DRIVER === 'server') { // MySQL
			return match ($info['type']) {
				'tinytext' => 255,
				'text' => 65535,
				default => null,
			};
		}
		return null;
	}


	public function detectRange($info)
	{
		$signed = empty($info['unsigned']);
		return match ($info['type']) {
			'tinyint' => $signed ? [-128, 127] : [0, 255],
			'smallint' => $signed ? [-32768, 32767] : [0, 65535],
			'mediumint' => $signed ? [-8388608, 8388607] : [0, 16777215],
			'year' => [1901, 2155],
			default => $signed ? null : [0, null],
		};
	}
}
