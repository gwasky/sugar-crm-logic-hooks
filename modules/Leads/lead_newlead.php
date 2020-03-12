<?php

//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class lead_newlead{
 
		function lead_newlead(&$bean, $event, $arguments){
 			
			if($event == 'before_save'){
				
				$bean->contact_person_c = $bean->first_name." ".$bean->last_name;
				
				// make sure the status was actually changed to closed
				// $bean->fetched_row['status'] is the stored status of the case
				// $bean->status is the status it was changed to
				if ($bean->rel_fields_before_value['qs_queues_leads_name'] != 'New Leads' && $bean->qs_queues_leads_name == 'New Leads'){
	
					$subject = "New Lead";
					
					$body .= "{$bean->first_name} - {$bean->last_name} has been assigned to New Leads queue. Contact Sales rep '{$bean->sales_rep_c}' for additional details. Please Check the queue, http://wimaxcrm.waridtel.co.ug/index.php?action=DetailView&module=Leads&record={$bean->id}"; 
					$to = 'macdavid.mugga@waridtel.co.ug,charles.bbaale@waridtel.co.ug,joseph.nsamba@waridtel.co.ug,peter.angole@waridtel.co.ug,grace.kigundu@waridtel.co.ug,corporatesales@waridtel.co.ug,sarah.namuwanga@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,deogratias.biwaga@waridtel.co.ug,benon.mwesigwa@waridtel.co.ug,businesscenterkampala@waridtel.co.ug,enterprisesales@waridtel.co.ug,paul.kagoda@waridtel.co.ug';
					
					$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";

					mail($to,$subject,$body,$headers);
				}
			}
		}
	}
 
?>

