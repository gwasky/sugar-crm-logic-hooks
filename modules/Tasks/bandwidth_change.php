


<?php


//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class bandwidth_change{
 
		function bandwidth_change(&$bean, $event, $arguments){
 
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->fetched_row['task_type_c'] !== 'Change Of Bandwidth Profile' && $bean->task_type_c === 'Change Of Bandwidth Profile')
			
			{

				$subject = "Change Of Bandwidth - Profile";
				
				$body .= "{$bean->parent_name} has made a change request. click here to view details, http://wimaxcrm.waridtel.co.ug/index.php?module=Tasks&offset=1&stamp=1222087039066165600&return_module=Tasks&action=DetailView&record={$bean->id}"; 
				$to = 'CCBUSINESSANALYSIS@waridtel.co.ug,creditcollection@waridtel.co.ug,corporatesales@waridtel.co.ug,grace.kigundu@waridtel.co.ug,joseph.nsamba@waridtel.co.ug,peter.angole@waridtel.co.ug, paul.kagoda@waridtel.co.ug,RA@waridtel.co.ug';

				$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";


				
				mail($to,$subject,$body,$headers);

				
			}
		}
	}
 
?>
