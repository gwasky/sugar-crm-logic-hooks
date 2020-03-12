<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('custom/BusinessLogic/objects/class.pog_base.php');
require_once('custom/BusinessLogic/config.business.php');

class check_queue{
	
		function check_queue(&$bean, $event, $arguments)
		{
			if($event == 'before_save' && isset($_POST['qs_queues_lsqs_queues_ida']))
			{
				$myquery = new uniquequeryz();
				$query = "select id from qs_queues 
							where deleted = 0 and name 
							NOT IN ('New Leads','CC Site Survey Requests','CS Site Surveys Pending Approval','Valid Prospect','Invalid Prospect')";
				$queues = $myquery->multiplerow_query($query);
				if(in_array($_POST['qs_queues_lsqs_queues_ida'],$queues))
				{
					  header("Location:index.php?module=Project&action=lead_queue_restriction");
					  
				
				}
			}
		}
		
}

?>