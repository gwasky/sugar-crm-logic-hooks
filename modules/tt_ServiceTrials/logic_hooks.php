<?php
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	$hook_array = array();
 
	$hook_array['before_save'] = array();
 
	// array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
	$hook_array['before_save'][] = array(1, 'notify_noc', 'custom/modules/tt_ServiceTrials/notify_noc.php', 'notify_noc', 'notify_noc');
	$hook_array['before_save'][] = array(2, 'notify_op', 'custom/modules/tt_ServiceTrials/notify_op.php', 'notify_op', 'notify_op');
		
		
	
?>

