<?php

//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class dummy{
 
		function dummy(&$bean, $event, $arguments){
 
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->fetched_row['status'] !== 'Dummy' && $bean->status === 'Dummy')
			
			{

				$subject = "Dummy Contract Has Been Set";
				
				$body .= "{$bean->name} has been set to dummy. Please Check the queue, http://wimaxcrm.waridtel.co.ug/index.php?action=DetailView&module=Contracts&record={$bean->id}"; 
				$to = 'joseph.nsamba@waridtel.co.ug,peter.angole@waridtel.co.ug';

				$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";

				mail($to,$subject,$body,$headers);

				
			}
		}
	}
 
?>
