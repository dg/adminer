<?php

/** Adminer customization allowing usage of plugins
 * @link http://www.adminer.org/plugins/#use
 * @author Jakub Vrana, http://www.vrana.cz/
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerPlugin extends Adminer
{
	protected $plugins;


	/** Register plugins
	 * @param array object instances or null to register all classes starting by 'Adminer'
	 */
	public function __construct(array $plugins)
	{
		if ($plugins === null) {
			$plugins = [];
			foreach (get_declared_classes() as $class) {
				if (preg_match('~^Adminer.~i', $class) && is_subclass_of($class, 'Adminer')) { //! can use interface
					$plugins[$class] = new $class;
				}
			}
		}
		$this->plugins = $plugins;
		//! it is possible to use ReflectionObject to find out which plugins defines which methods at once
	}


	private function callParent($function, $args)
	{
		return call_user_func_array(['parent', $function], $args);
	}


	private function applyPlugin($function, $args)
	{
		foreach ($this->plugins as $plugin) {
			if (method_exists($plugin, $function)) {
				switch (count($args)) { // call_user_func_array() doesn't work well with references
					case 0: $return = $plugin->$function(); break;
					case 1: $return = $plugin->$function($args[0]); break;
					case 2: $return = $plugin->$function($args[0], $args[1]); break;
					case 3: $return = $plugin->$function($args[0], $args[1], $args[2]); break;
					case 4: $return = $plugin->$function($args[0], $args[1], $args[2], $args[3]); break;
					case 5: $return = $plugin->$function($args[0], $args[1], $args[2], $args[3], $args[4]); break;
					case 6: $return = $plugin->$function($args[0], $args[1], $args[2], $args[3], $args[4], $args[5]); break;
					default: trigger_error('Too many parameters.', E_USER_WARNING);
				}
				if ($return !== null) {
					return $return;
				}
			}
		}
		return $this->callParent($function, $args);
	}


	private function appendPlugin($function, $args)
	{
		$return = $this->callParent($function, $args);
		foreach ($this->plugins as $plugin) {
			if (method_exists($plugin, $function)) {
				$return += call_user_func_array([$plugin, $function], $args);
			}
		}
		return $return;
	}


	// appendPlugin

	public function dumpFormat()
	{
		return $this->appendPlugin(__FUNCTION__, func_get_args());
	}


	public function dumpOutput()
	{
		return $this->appendPlugin(__FUNCTION__, func_get_args());
	}


	public function editFunctions($field)
	{
		return $this->appendPlugin(__FUNCTION__, func_get_args());
	}


	// applyPlugin

	public function name()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function credentials()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function permanentLogin($create = false)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function database()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function schemas()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function databases($flush = true)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function queryTimeout()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function headers()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function head()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function loginForm()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function login($login, $password)
	{
		return true;
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function tableName($tableStatus)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function fieldName($field, $order = 0)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectLinks($tableStatus, $set = '')
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function foreignKeys($table)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function backwardKeys($table, $tableName)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function backwardKeysPrint($backwardKeys, $row)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectQuery($query, $time)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function rowDescription($table)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function rowDescriptions($rows, $foreignKeys)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectLink($val, $field)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectVal($val, $link, $field, $original)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function editVal($val, $field)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectColumnsPrint($select, $columns)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectSearchPrint($where, $columns, $indexes)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectOrderPrint($order, $columns, $indexes)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectLimitPrint($limit)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectLengthPrint($text_length)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectActionPrint($indexes)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectCommandPrint()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectImportPrint()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectEmailPrint($emailFields, $columns)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectColumnsProcess($columns, $indexes)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectSearchProcess($fields, $indexes)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectOrderProcess($fields, $indexes)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectLimitProcess()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectLengthProcess()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectEmailProcess($where, $foreignKeys)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function selectQueryBuild($select, $where, $group, $order, $limit, $page)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function messageQuery($query, $time)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function editInput($table, $field, $attrs, $value)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function processInput($field, $value, $function = '')
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function dumpDatabase($db)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function dumpTable($table, $style, $is_view = 0)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function dumpData($table, $style, $query)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function dumpFilename($identifier)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function dumpHeaders($identifier, $multi_table = false)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function homepage()
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function navigation($missing)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function databasesPrint($missing)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}


	public function tablesPrint($tables)
	{
		return $this->applyPlugin(__FUNCTION__, func_get_args());
	}
}
