<?php
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	$hook_array = array();
 
	$hook_array['before_save'] = array();
	// array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
	
	$hook_array['before_save'][] = array(1, 'smt_cases', 'custom/modules/Cases/smt_cases.php', 'smt_cases', 'smt_cases');	
	$hook_array['before_save'][] = array(2, 'noc_cases', 'custom/modules/Cases/noc_cases.php', 'noc_cases', 'noc_cases');
	$hook_array['before_save'][] = array(3, 'field_cases', 'custom/modules/Cases/field_cases.php', 'field_cases', 'field_cases');
	$hook_array['before_save'][] = array(4, 'out_cases', 'custom/modules/Cases/out_cases.php', 'out_cases', 'out_cases');	
	$hook_array['before_save'][] = array(5, 'archived_cases', 'custom/modules/Cases/archived_cases.php', 'archived_cases', 'archived_cases');
	$hook_array['before_save'][] = array(6, 'cc_cases', 'custom/modules/Cases/cc_cases.php', 'cc_cases', 'cc_cases');
	$hook_array['before_save'][] = array(7, 'rf_cases', 'custom/modules/Cases/rf_cases.php', 'rf_cases', 'rf_cases');
	$hook_array['before_save'][] = array(8, 'root_cause', 'custom/modules/Cases/root_cause.php', 'root_cause', 'root_cause');
	$hook_array['before_save'][] = array(9, 'microwave', 'custom/modules/Cases/microwave_cases.php', 'microwave_cases', 'microwave_cases');
	$hook_array['before_save'][] = array(10, 'customer_notification', 'custom/modules/Cases/cc_cases.php', 'cc_cases', 'case_closure_customer_notification');
	
	$hook_array['before_save'][] = array(11, 'it_cases_pending_fixed_lines', 'custom/modules/Cases/it_cases_pending_fixed_lines.php', 'it_cases_pending_fixed_lines', 'it_cases_fixed_lines');
		
 
?>

