<?php
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	$hook_array = array();
 
	$hook_array['before_save'] = array();
 
	// array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
			
				$hook_array['before_save'][] = array(1, 'cpe_change', 'custom/modules/Tasks/cpe_change.php', 'cpe_change', 'cpe_change');
 
	// array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
			
				$hook_array['before_save'][] = array(2, 'location_change', 'custom/modules/Tasks/location_change.php', 'location_change', 'location_change');
				
				$hook_array['before_save'][] = array(3, 'bandwidth_change_upgrade', 'custom/modules/Tasks/bandwidth_change_upgrade.php', 'bandwidth_change_upgrade', 'bandwidth_change_upgrade');
				
				$hook_array['before_save'][] = array(4, 'termination', 'custom/modules/Tasks/termination.php', 'termination', 'termination');
				
				$hook_array['before_save'][] = array(5, 'bandwidth_change_downgrade', 'custom/modules/Tasks/bandwidth_change_downgrade.php', 'bandwidth_change_downgrade', 'bandwidth_change_downgrade');
				
				$hook_array['before_save'][] = array(7, 'prepaid_to_post_paid', 'custom/modules/Tasks/service_type_change.php', 'service_type_change', 'service_type');
				$hook_array['before_save'][] = array(8, 'postpaid_to_prepaid', 'custom/modules/Tasks/service_change_postpaid_prepaid.php', 'service_type_change_postpaid_prepaid', 'service_type_change_postpaid_prepaid');
		
 
?>



