<?php
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	$hook_array = array();
 
	$hook_array['before_save'][] = array(1, 'account_number', 'custom/modules/cn_Contracts/account_number.php', 'contract_account_number', 'account_number');
	$hook_array['before_save'][] = array(2, 'dummy','custom/modules/cn_Contracts/dummy.php', 'dummy', 'dummy');

	$hook_array['after_save'][] = array(1,'check_audit','custom/modules/cn_Contracts/check_audit.php', 'check_audit', 'check_audit');
?>

