
<?php
require_once('billing/objects/class.pog_base.php');

//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class packet_core_deactivations{
 		function sendHTMLemail($to,$HTML,$subject,$from){
			//echo "sending ".$subject." mail/n"; 
			// First we have to build our email headers
				if(!$from){
					$from = 'CCREPORTS <ccnotify@waridtel.co.ug>';
				}
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "From: ".$from."\r\n";
				mail($to,$subject,$HTML,$headers);
			
		}
		
		function packet_core_deactivation(&$bean, $event, $arguments){
 
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->rel_fields_before_value['qs_queues_accounts_name'] !== 'Packet Core Deactivations' && $bean->qs_queues_accounts_name === 'Packet Core Deactivations')
			
			{
				$myquery = new uniquequerys();

				$query_email_list = "
				SELECT
					qs_queues_cstm.email_list_c
				FROM
					qs_queues
				INNER JOIN qs_queues_cstm ON qs_queues.id = qs_queues_cstm.id_c
				WHERE
					qs_queues.`name` = '".$bean->qs_queues_accounts_name."'
				";
							
				$email_list_result = $myquery->uniquequery($query_email_list);
				
				$subject = "Notification Type: Packet Core Account Deactivation";
				
				$body .= "
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<title>Untitled Document</title>
<style type='text/css'>
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	font-style: italic;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	font-style: italic;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style7 {font-size: 12px}
.style8 {
	font-size: 9px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
				<table width='750' border='0' cellpadding='4' cellspacing='4'>
  <tr>
    <td colspan='2' align='left' valign='top'><span class='style1'>Infinity</span> <span class='style2'>Wimax</span></td>
  </tr>
  <tr>
    <td colspan='2' align='left' valign='top'><span class='style3'>Notification Type:</span><span class='style6'> Packet Core  Account Deactivation</span></td>
  </tr>
  <tr>
    <td width='30%' align='left' valign='top'><span class='style6'>Dear Packet Core,</span></td>
    <td width='70%' align='left' valign='top'><span class='style7'></span></td>
  </tr>
  <tr>
    <td colspan='2' align='left' valign='top'><span class='style6'>Account {$bean->name} has been assigned to Packet Core Deactivations Queue.</span></td>
  </tr>
  <tr>
    <td align='left' valign='top'><span class='style3'>Pending Tasks:</span></td>
    <td align='left' valign='top'><p class='style6'>1. Deactivate the account (username: {$bean->preferred_username_c}). 
      </p>
    </td>
  </tr>
  <tr>
    <td align='left' valign='top'><span class='style3'>Details:</span></td>
    <td align='left' valign='top'><span class='style6'>http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?action=DetailView&module=Accounts&record={$bean->id}</span></td>
  </tr>
  <tr>
    <td align='left' valign='top'>&nbsp;</td>
    <td align='left' valign='top'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2' align='left' valign='top'><span class='style8'><strong>NB:</strong> This is a system generated email notification do not reply to it. For any complaints please email: complaintsupport@waridtel.co.ug or call contact centre: 0700777000</span></td>
  </tr>
</table>
</body>
</html>

";
				$to = $email_list_result['email_list_c'];
				
				//$headers = 'From: Infinity Wimax ' . "\r\n";
				$from = "Infinity Wimax ";
				//$subject = "CC Site survey Request";
				$this->sendHTMLemail($to,$body,$subject,$from);




				
			}
		}
	}
 
?>

