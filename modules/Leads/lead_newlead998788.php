<?php 
   ini_set ("SMTP", "ugkpexch01.waridtel.co.ug");
   ini_set("sendmail_from", CCREPORTS);
 ?>
<?php
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class lead_newlead{
 
		function lead_newlead(&$bean, $event, $arguments){
 
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->fetched_row['status'] !== 'New' && $bean->status === 'New'){
 
				$subject = "Closed: Case {$bean->first_name} - {$bean->last_name}";
				$body .= 'Description: ' . (empty($bean->description)? ' n/a ' : $bean->description);
 
				$to['Mr. Daniel'] = 'daniel.katatumba@waridtel.co.ug';
				
				   function sendHTMLemail($to,$body,$subject)
        {
// First we have to build our email headers
	
	$headers  .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    mail($to,$subject,$body,$headers);
    }
 
				
			}
		}
	}
 
?>
