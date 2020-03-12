<?php
require_once('custom/include/utils/DevToolKit.php');

class DynamicPanel extends DevToolKit {
	public function __construct(&$view) {
		$this->metadata_name = 'toggle_panel_fields';
		$this->event_function = 'togglePanel';
		parent::__construct($view);
	}

	public function display() {
		parent::display();
	}

	protected function display_detail() {
		$panels = array_keys($this->view->dv->defs['panels']);
		$visible_panels = array();

		foreach($this->metadata as $field => $field_defs) {
			if($this->bean->$field != '' && isset($field_defs[$this->bean->$field])) {
				$visible_panels = array_merge($visible_panels, array_keys($field_defs[$this->view->bean->$field]));
			}
		}
		foreach($panels as $panel) {
			if(! in_array($panel, $visible_panels) && $panel != 'default') {
				unset($this->view->dv->defs['panels'][$panel]);
			}
		}
	}

	protected function process_edit($prefix = '', $focus = '') {
		parent::process_edit($prefix, $focus);

		$this->process_metadata();
		$this->javascript[] = '<script type="text/javascript" src="custom/include/javascript/DynamicPanel.js"></script>';
		$this->javascript[] = '<script>var panelFieldsDefs = ' . json_encode($this->metadata) . ';</script>';
		$this->load_process_javascript($focus);
	}

	private function process_metadata() {
		global $app_list_strings;

		$panel_list = array();

		foreach($this->metadata as $field => $field_defs) {
			foreach($field_defs as $value => $panel_defs) {
				$panel_list = array_merge($panel_list, array_keys($panel_defs));
			}
		}
		
		foreach($this->metadata as $field => $field_defs) {
			foreach($field_defs as $value => $panel_defs) {
				foreach($panel_list as $panel) {
					if(! isset($this->metadata[$field][$value][$panel])) {
						$this->metadata[$field][$value][$panel] = 0;
					}
				}
			}
		}
		
		foreach($this->metadata as $field => $field_defs) {
			$dropdown = $this->bean->field_defs[$field]['options'];
			
			foreach($app_list_strings[$dropdown] as $dd_key => $dd_value) {
				if(! isset($this->metadata[$field][$dd_key])) {
					foreach($panel_list as $panel) {
						$this->metadata[$field][$dd_key][$panel] = 0;
					}
				}
			}
		}
	}
}
?>
