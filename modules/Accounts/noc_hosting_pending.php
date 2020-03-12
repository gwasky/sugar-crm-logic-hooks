


<?php


//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class noc_hosting_pending{
 
		function noc_hosting_pending(&$bean, $event, $arguments){
 
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->rel_fields_before_value['qs_queues_accounts_name'] !== 'NOC Hosting Services Configuration Pending' && $bean->qs_queues_accounts_name === 'NOC Hosting Services Configuration Pending')
			
			{

				$subject = "NOC Hosting Configuraion Pending";
				
				$body .= "{$bean->name} has been assigned to NOC Hosting Services Configuration Pending queue. Configure any new hosting details in the account then assign to bill activation pending queue. Please Check the queue, http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?action=DetailView&module=Accounts&record={$bean->id}"; 
				$to = 'noc@waridtel.co.ug,grace.kigundu@waridtel.co.ug,corporatesales@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,moses.wamono@waridtel.co.ug,CCCORPORATE@waridtel.co.ug,PACKETCORENETWORKS@waridtel.co.ug';


				
				$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";


				
				mail($to,$subject,$body,$headers);

				
			}
		}
	}
 
?>
