<?php
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	$hook_array = array();
 
	$hook_array['before_save'] = array();
 
	// array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
			
				$hook_array['before_save'][] = array(1, 'rejectedcl_survey', 'custom/modules/SV_SiteSurvey/rejected_sitesurvey.php', 'rejectedcl_survey', 'rejectedcl_survey');
				
				$hook_array['before_save'][] = array(2, 'approved_survey', 'custom/modules/SV_SiteSurvey/approved_sitesurvey.php', 'approved_survey', 'approved_survey');
				
				$hook_array['before_save'][] = array(3, 'rejectednl_survey', 'custom/modules/SV_SiteSurvey/rejectednl_sitesurvey.php', 'rejectednl_survey', 'rejectednl_survey');
 
	// array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
		
 
?>



