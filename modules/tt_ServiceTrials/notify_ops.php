


<?php



//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class notify_ops{
 
		function notify_ops(&$bean, $event, $arguments){
 
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->fetched_row['trial_status_c'] !== 'Closed' && $bean->trial_status_c === 'Closed')
			
			{

				$subject = "Trial Troubleshoot Started";
				
				$body .= "The trial change in bandwidth for customer '{$bean->accounts_tt_servicetrials_name}' has started(refer to case with subject '{$bean->cases_tt_servicetrials_1_name}').
				
				The trial Period of the change in bandwidth is from '{$bean->period_start}' to '{$bean->period_end}'. Click on link below for details.
				
				http://wimaxcrm.waridtel.co.ug/index.php?action=DetailView&module=tt_ServiceTrials&record={$bean->id}"; 
				
				$to = 'PACKETCORENETWORKS@waridtel.co.ug,CCCORPORATE@waridtel.co.ug,akugizibwe.simon@waridtel.co.ug,CREDITCOLLECTION@waridtel.co.ug,ra@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,revenuerecognition@waridtel.co.ug';


				
					
				$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";


				
				mail($to,$subject,$body,$headers);

				
			}
		}
	}
 
?>
