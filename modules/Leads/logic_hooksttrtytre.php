<?php
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	$hook_array = array();
 
	$hook_array['before_save'] = array();
 
	// array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
	$hook_array['before_save'][] = array(1, 'lead_newlead', 'custom/modules/Leads/lead_newlead.php', 'lead_newlead', 'lead_newlead');
 
?>
