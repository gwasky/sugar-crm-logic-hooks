<?php
require_once('custom/include/utils/DevToolKit.php');

class DuplicateFields extends DevToolKit {
	public function __construct(&$view) {
		$this->metadata_name = 'check_duplicate_fields';
		parent::__construct($view);
	}

	public function display() {}

	protected function process_edit($prefix = '', $focus = '') {
		parent::process_edit($prefix, $focus);

		global $app_strings;

		$app_strings_encoded = json_encode($app_strings);
		$this->javascript[] = "<script>SUGAR.language.setLanguage('app_strings', $app_strings_encoded);</script>";

		foreach($this->metadata as $field) {
			$unique_values = $this->get_existing_values($field);
			$this->javascript[] = '<script>addToValidateIsInArray(\'EditView\', \'' . $field . '\', \'in_array\', \'true\', \'' . $app_strings['LBL_DEVTOOLKIT_MESSAGE_DUPLICATE_FIELD'] . '\', \'' . json_encode($unique_values) . '\', \'==\')</script>';
		}
	}

	private function get_existing_values($field) {
		global $app_strings;

		if(isset($this->bean->field_defs[$field]['source']) && $this->bean->field_defs[$field]['source'] == 'custom_fields') {
			$select = "SELECT {$this->bean->table_name}_cstm.{$field} ";
			$from = "FROM {$this->bean->table_name} INNER JOIN {$this->bean->table_name}_cstm ON {$this->bean->table_name}.id = {$this->bean->table_name}_cstm.id_c ";
		} else if(! isset($this->bean->field_defs[$field]['source']) || $this->bean->field_defs[$field]['source'] == '') {
			$select = "SELECT {$this->bean->table_name}.{$field} ";
			$from = "FROM {$this->bean->table_name} ";
		}

		$unique_values = array();
		$query = $select . $from . "WHERE {$this->bean->table_name}.deleted = 0";
		$result = $this->bean->db->query($query, true, $app_strings['ERR_DEVTOOLKIT_QUERY_DUPLICATE_FIELD']);

		while($row = $this->bean->db->fetchByAssoc($result)) {
			$unique_values[] = $row[$field];
		}

		return $unique_values;
	}
}
?>
