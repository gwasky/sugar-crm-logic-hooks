<?php

   ini_set ("SMTP", "ugkpexch01.waridtel.co.ug");
   ini_set("sendmail_from", infinityWimax);

//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class uninstallation_pending{
 		
		function sendHTMLemail($to,$HTML,$subject,$from){
			if(!$from){
				$from = 'Wimaxcrm <ccnotify@waridtel.co.ug>';
			}
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "From: ".$from."\r\n";
    		mail($to,$subject,$HTML,$headers);
		}
		
		function uninstallation_pending(&$bean, $event, $arguments){
			if ($bean->rel_fields_before_value['qs_queues_accounts_name'] != 'Uninstallation Pending' && $bean->qs_queues_accounts_name == 'Unistallation Pending'){
				$subject = "Uninstallation Pending";
				
				$body .= "{$bean->name} has been assigned to uninstallation Pending. Please Check the queue, http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?action=DetailView&module=Accounts&record={$bean->id}"; 
				$to = 'grace.kigundu@waridtel.co.ug,corporatesales@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,joseph.nsamba@waridtel.co.ug,CCCORPORATE@waridtel.co.ug,PACKETCORENETWORKS@waridtel.co.ug';	
				sendHTMLemail($to,$HTML=$body,$subject,$from);
			}
		}
	}
 
?>
