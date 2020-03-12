


<?php


//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class cr_payments_pending{
 
		function cr_payments_pending(&$bean, $event, $arguments){
 
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->rel_fields_before_value['qs_queues_accounts_name'] !== 'CR Payments Pending' && $bean->qs_queues_accounts_name === 'CR Payments Pending')
			
			{

				$subject = "Change Request Payments Pending";
				
				$body .= "{$bean->name} has been assigned to CR Payments Pending queue. Please Check the queue, http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?action=DetailView&module=Accounts&record={$bean->id}"; 
				$to = 'macdavid.mugga@waridtel.co.ug,peter.angole@waridtel.co.ug, paul.kagoda@waridtel.co.ug,joseph.nsamba@waridtel.co.ug,peter.angole@waridtel.co.ug,grace.kigundu@waridtel.co.ug,corporatesales@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,CCCORPORATE@waridtel.co.ug';

				
				$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";


				
				mail($to,$subject,$body,$headers);

				
			}
		}
	}
 
?>
