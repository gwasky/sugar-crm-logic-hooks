


<?php


//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class cpe_change{
 
		function cpe_change(&$bean, $event, $arguments){
 
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->rel_fields_before_value['qs_queues_accounts_name'] !== 'Site Survey Existing Customer' && $bean->qs_queues_accounts_name === 'Site Survey Existing Customer')
			
			{

				$subject = "CPE Change (Indoor to Outdoor)";
				
				$body .= "{$bean->name} has been assigned to the queue: Site Survey Existing Customer. Please Check the queue, http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?action=DetailView&module=Accounts&record={$bean->id}"; 
				$to = 'grace.kigundu@waridtel.co.ug,corporatesales@waridtel.co.ug,PACKETCORENETWORKS@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,joseph.nsamba@waridtel.co.ug,peter.angole@waridtel.co.ug, paul.kagoda@waridtel.co.ug';
				
				$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";


				
				mail($to,$subject,$body,$headers);

				
			}
		}
	}
 
?>
