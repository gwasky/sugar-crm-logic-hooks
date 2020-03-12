<?php

require_once('billing/objects/class.pog_base.php');

//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class cc_site_survey{
 
		function cc_site_survey(&$bean, $event, $arguments){
 			$myquery = new uniquequerys();
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->rel_fields_before_value['qs_queues_accounts_name'] !== 'CC Site Survey Requests' && $bean->qs_queues_accounts_name === 'CC Site Survey Requests')
			
			{
				$query_email_list = "
				SELECT
					qs_queues_cstm.email_list_c
				FROM
					qs_queues
				INNER JOIN qs_queues_cstm ON qs_queues.id = qs_queues_cstm.id_c
				WHERE
					qs_queues.`name` = '".$bean->qs_queues_leads_name."'
				";
							
				$email_list_result = $myquery->uniquequery($query_email_list);
				
				$subject = "CC Site Survey Request";
				
				$body .= "The account {$bean->name} has been assigned to CC Site Survey Request queue. Please Check the queue, http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?action=DetailView&module=Accounts&record={$bean->id}"; 
				
				$to = $email_list_result['email_list_c'];
	
				$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";

				mail($to,$subject,$body,$headers);

			}
		}
	}
 
?>
