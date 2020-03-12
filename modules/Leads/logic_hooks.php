<?php 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
    $hook_version = 1;

	$hook_array = array();
 
	$hook_array['before_save'] = array();
	// array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
	$hook_array['before_save'][] = array(1,'lead_newlead', 'custom/modules/Leads/lead_newlead.php', 'lead_newlead', 'lead_newlead');
	$hook_array['before_save'][] = array(2,'queue_check', 'custom/modules/Leads/queue_check.php', 'check_queue', 'checkQueue');
	$hook_array['before_save'][] = array(3,'Notify_sales_person','custom/modules/Leads/queue_check.php','check_queue','sales_notification');
	$hook_array['before_save'][] = array(4,'cc_site_survey_request', 'custom/modules/Leads/cc_site_survey_request.php', 'cc_site_survey_request', 'cc_site_survey_request');
	$hook_array['before_save'][] = array(5,'cc_complete_survey', 'custom/modules/Leads/cc_complete_survey.php', 'cc_complete_survey', 'cc_complete_survey');
	$hook_array['before_save'][] = array(6,'cc_pending_approval', 'custom/modules/Leads/cc_pending_approval.php', 'cc_pending_approval', 'cc_pending_approval');
	$hook_array['before_save'][] = array(7,'valid_prospect', 'custom/modules/Leads/valid_prospect.php', 'valid_prospect', 'valid_prospect');
	$hook_array['before_save'][] = array(8,'invalid_prospect', 'custom/modules/Leads/invalid_prospect.php', 'invalid_prospect', 'invalid_prospect');
	$hook_array['before_save'][] = array(9,'lead_servicetrial', 'custom/modules/Leads/service_trial.php', 'lead_servicetrial','lead_servicetrial');
	$hook_array['before_save'][] = array(10,'rf_site_survey_request', 'custom/modules/Leads/rf_site_survey_request.php', 'rf_site_survey_request','rf_site_survey_request');
	$hook_array['before_save'][] = array(11, 'rf_planning', 'custom/modules/Leads/rf_planning.php', 'rf_planning','rf_planning');
	
?>
