<?php
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class lead_newlead{
 
		function lead_newlead(&$bean, $event, $arguments){
 
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->fetched_row['qs_queues_leads_name'] !== 'New Leads' && $bean->status === 'New Leads'){
 
				$subject = "Closed: Case {$bean->first_name} - {$bean->last_name}";
				$body .= 'Description: ' . (empty($bean->description)? ' n/a ' : $bean->description);
 
				$to['Mr. Daniel'] = 'daniel.katatumba@waridtel.co.ug';
 
				if (!sendSugarPHPMail($to, $subject, $body)){
					$GLOBALS['log']->info("Could not send New lead notification:  " . $mail->ErrorInfo);
				}
			}
		}
	}
 
?>
