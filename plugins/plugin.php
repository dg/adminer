<?php

/** Adminer customization allowing usage of plugins
 * @link http://www.adminer.org/plugins/#use
 * @author Jakub Vrana, http://www.vrana.cz/
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerPlugin extends Adminer
{
	/** @access protected */
	public $plugins;


	public function _findRootClass($class)
	{ // is_subclass_of(string, string) is available since PHP 5.0.3
		do {
			$return = $class;
		} while ($class = get_parent_class($class));
		return $return;
	}


	/** Register plugins
	 * @param array object instances or null to register all classes starting by 'Adminer'
	 */
	public function __construct($plugins)
	{
		if ($plugins === null) {
			$plugins = [];
			foreach (get_declared_classes() as $class) {
				if (preg_match('~^Adminer.~i', $class) && strcasecmp($this->_findRootClass($class), 'Adminer')) { //! can use interface
					$plugins[$class] = new $class;
				}
			}
		}
		$this->plugins = $plugins;
		//! it is possible to use ReflectionObject to find out which plugins defines which methods at once
	}


	public function _callParent($function, $args)
	{
		return call_user_func_array(['parent', $function], $args);
	}


	public function _applyPlugin($function, $args)
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
		return $this->_callParent($function, $args);
	}


	public function _appendPlugin($function, $args)
	{
		$return = $this->_callParent($function, $args);
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
		$args = func_get_args();
		return $this->_appendPlugin(__FUNCTION__, $args);
	}


	public function dumpOutput()
	{
		$args = func_get_args();
		return $this->_appendPlugin(__FUNCTION__, $args);
	}


	public function editFunctions($field)
	{
		$args = func_get_args();
		return $this->_appendPlugin(__FUNCTION__, $args);
	}


	// applyPlugin

	public function name()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function credentials()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function permanentLogin($create = false)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function database()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function schemas()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function databases($flush = true)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function queryTimeout()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function headers()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function head()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function loginForm()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function login($login, $password)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function tableName($tableStatus)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function fieldName($field, $order = 0)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectLinks($tableStatus, $set = '')
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function foreignKeys($table)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function backwardKeys($table, $tableName)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function backwardKeysPrint($backwardKeys, $row)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectQuery($query, $time)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function rowDescription($table)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function rowDescriptions($rows, $foreignKeys)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectLink($val, $field)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectVal($val, $link, $field, $original)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function editVal($val, $field)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectColumnsPrint($select, $columns)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectSearchPrint($where, $columns, $indexes)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectOrderPrint($order, $columns, $indexes)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectLimitPrint($limit)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectLengthPrint($text_length)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectActionPrint($indexes)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectCommandPrint()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectImportPrint()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectEmailPrint($emailFields, $columns)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectColumnsProcess($columns, $indexes)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectSearchProcess($fields, $indexes)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectOrderProcess($fields, $indexes)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectLimitProcess()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectLengthProcess()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectEmailProcess($where, $foreignKeys)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function selectQueryBuild($select, $where, $group, $order, $limit, $page)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function messageQuery($query, $time)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function editInput($table, $field, $attrs, $value)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function processInput($field, $value, $function = '')
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function dumpDatabase($db)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function dumpTable($table, $style, $is_view = 0)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function dumpData($table, $style, $query)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function dumpFilename($identifier)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function dumpHeaders($identifier, $multi_table = false)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function homepage()
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function navigation($missing)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function databasesPrint($missing)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}


	public function tablesPrint($tables)
	{
		$args = func_get_args();
		return $this->_applyPlugin(__FUNCTION__, $args);
	}
}
