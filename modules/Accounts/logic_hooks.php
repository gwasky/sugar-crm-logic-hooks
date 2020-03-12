<?php

	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	$hook_array = array();

	// array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
	$hook_array['before_save'][] = array(1, 'account_number', 'custom/BusinessLogic/Accounts/account_leadcheck.php', 'conversion_check', 'set_default_account_name');
	$hook_array['before_save'][] = array(2, 'account_number', 'custom/modules/Accounts/account_number.php', 'account_number', 'account_number');
	$hook_array['before_save'][] = array(3, 'Notify_sales','custom/modules/Accounts/account_number.php','account_number','sales_notification');
	$hook_array['before_save'][] = array(4, 'payments_pending', 'custom/modules/Accounts/payments_pending.php', 'payments_pending', 'payments_pending');
	$hook_array['before_save'][] = array(5, 'noc_config_pending', 'custom/modules/Accounts/noc_config_pending.php', 'noc_config_pending', 'noc_config_pending');
	$hook_array['before_save'][] = array(6, 'installation_pending', 'custom/modules/Accounts/installation_pending.php', 'installation_pending', 'installation_pending');
	$hook_array['before_save'][] = array(7, 'bill_pending', 'custom/modules/Accounts/bill_pending.php', 'bill_pending', 'bill_pending');
	$hook_array['before_save'][] = array(8, 'cpe_change', 'custom/modules/Accounts/cpe_change.php', 'cpe_change', 'cpe_change');
	$hook_array['before_save'][] = array(9, 'cc_site_survey', 'custom/modules/Accounts/cc_site_survey.php', 'cc_site_survey', 'cc_site_survey');
	$hook_array['before_save'][] = array(10, 'cr_payments_pending', 'custom/modules/Accounts/cr_payments_pending.php', 'cr_payments_pending', 'cr_payments_pending');
	$hook_array['before_save'][] = array(11, 'bandwidth_pending', 'custom/modules/Accounts/bandwidth_pending.php', 'bandwidth_pending', 'bandwidth_pending'); 
	$hook_array['before_save'][] = array(12, 'uninstallation_pending', 'custom/modules/Accounts/uninstallation_pending.php', 'uninstallation_pending', 'uninstallation_pending');
	$hook_array['before_save'][] = array(13, 'reactivation_pending', 'custom/modules/Accounts/reactivation_pending.php', 'reactivation_pending', 'reactivation_pending');
	$hook_array['before_save'][] = array(14, 'deactivation_pending', 'custom/modules/Accounts/deactivation_pending.php', 'deactivation_pending', 'deactivation_pending');
	$hook_array['before_save'][] = array(15, 'delete_aaa', 'custom/modules/Accounts/delete_aaa.php', 'delete_aaa', 'delete_aaa');
	$hook_array['before_save'][] = array(16, 'noc_hosting_pending', 'custom/modules/Accounts/noc_hosting_pending.php', 'noc_hosting_pending', 'noc_hosting_pending');
	$hook_array['before_save'][] = array(17, 'rf_installation_pending', 'custom/modules/Accounts/rf_installation_pending.php', 'rf_installation_pending', 'rf_installation_pending');
	$hook_array['before_save'][] = array(18, 'invalid_account', 'custom/modules/Accounts/invalid_account.php', 'invalid_account', 'invalid_account');
	$hook_array['before_save'][] = array(19, 'deactivation_done', 'custom/modules/Accounts/deactivation_done.php', 'deactivation_done', 'deactivation_done');
	
	$hook_array['before_save'][] = array(20, 'it_bill_activation_pending_fixed_lines', 'custom/modules/Accounts/it_bill_activation_pending_fixed_lines.php', 'it_bill_activation_pending_fixed_lines', 'it_bill_activation_fixed_lines');
	$hook_array['before_save'][] = array(21, 'it_bill_deactivation_queue_fixed_lines', 'custom/modules/Accounts/it_bill_deactivation_queue_fixed_lines.php', 'it_bill_deactivation_queue_fixed_lines', 'it_bill_deactivation_fixed_lines');
	
	
	$hook_array['before_save'][] = array(22, 'packet_core_change_in_bandwidth', 'custom/modules/Accounts/packet_core_change_in_bandwidth.php', 'packet_core_change_in_bandwidth', 'packet_core_change_bandwidth');
	$hook_array['before_save'][] = array(23, 'packet_core_deactivations', 'custom/modules/Accounts/packet_core_deactivations.php', 'packet_core_deactivations', 'packet_core_deactivation');
	$hook_array['before_save'][] = array(24, 'packet_core_reactivations', 'custom/modules/Accounts/packet_core_reactivations.php', 'packet_core_reactivations', 'packet_core_reactivation');
	$hook_array['before_save'][] = array(25, 'check_account_name', 'custom/modules/Accounts/account_number.php', 'account_number', 'account_name_check');
	
	
	$hook_array['after_save'][] = array(1, 'Update_primary_site_id', 'custom/BusinessLogic/Accounts/account_leadcheck.php', 'conversion_check', 'update_primary_account_site_id');
	$hook_array['after_save'][] = array(2,'create_fixed_line_contract','custom/modules/Accounts/fixed_line_contract.php', 'fixed_line_contract', 'fixed_line_con');
	//$hook_array['before_save'][] = array(22,'create_fixed_line_contract','custom/modules/Accounts/fixed_line_contract.php', 'fixed_line_contract', 'fixed_line_con');
	
	$hook_array['after_retrieve'][] = array(1, 'get_contract_info','custom/modules/Accounts/account_number.php','account_number','get_contract_info');
?>

