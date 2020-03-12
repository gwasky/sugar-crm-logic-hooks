<?php
//this acript is supposed to send an email when a task type has been changed to change in service type [either to prepaid or Postpaid].

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class service_type_change{
	
	function service_type(&$bean, $event, $arguments){
		if($event == 'before_save' && $_POST['task_type_c'] == 'Change in Service Type [Prepaid to Postpaid]'){
			$subject = "Change in Service Type [Prepaid to Postpaid]";
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
						<td colspan='2' align='left' valign='top'><span class='style3'>Notification Type:</span><span class='style6'> Change in Service Type [Prepaid to Postpaid]</span></td>
					  </tr>
					  <tr>
						<td width='30%' align='left' valign='top'><span class='style6'>Dear C&C,</span></td>
						<td width='70%' align='left' valign='top'><span class='style7'></span></td>
					  </tr>
					  <tr>
						<td colspan='2' align='left' valign='top'><span class='style6'>The Account {$bean->parent_name} has made a Service Type Change Request.</span></td>
					  </tr>
					  <tr>
						<td align='left' valign='top'><span class='style3'>Pending Tasks:</span></td>
						<td align='left' valign='top'><p class='style6'>1. Vet Account. Please Confirm that the period paid for has Expired,If not Diarise in CRM for future migration on due date.
						Set the task execution date to &quot;due date&quot; and the task status should be changed to &quot;Pending Future Execution&quot;. <br>
						2. a.If the vetting is not successful, C&C will update CRM accordingly and route it back to BCE who will advise the KAM/customer<br>
						  &nbsp;&nbsp;&nbsp;&nbsp; b.If the vetting is successful, C&C will perform the following activities:<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Access the customer’s contract in CRM and change the service type from Prepaid to Postpaid.<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Amend the contract details accordingly<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Make any necessary billing entries.<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Move contract to active contracts queue <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	Close task in CRM after completion and notification sent to originator of task, hence process ends.<br> 
					
						</p>
						</td>
					  </tr>
					  <tr>
						<td align='left' valign='top'><span class='style3'>Details:</span></td>
						<td align='left' valign='top'><span class='style6'>http://wimaxcrm.waridtel.co.ug/index.php?module=Tasks&offset=1&stamp=1222087039066165600&return_module=Tasks&action=DetailView&record={$bean->id}</span></td>
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
		   $to = 'CCBUSINESSANALYSIS@waridtel.co.ug,creditcollection@waridtel.co.ug,corporatesales@waridtel.co.ug,ian.wamara@waridtel.co.ug,grace.kigundu@waridtel.co.ug,joseph.nsamba@waridtel.co.ug,peter.angole@waridtel.co.ug, paul.kagoda@waridtel.co.ug,RA@waridtel.co.ug';
		   //$to = 'gibson.wasukira@waridtel.co.ug,CCBUSINESSANALYSIS@waridtel.co.ug,steven.ntambi@waridtel.co.ug';
		   $from = "Infinity Wimax <ccnotify@waridtel.co.ug>";
				//$subject = "CC Site survey Request";
				sendHTMLemail35($to,$body,$subject,$from);
	}
	function sendHTMLemail($to,$HTML,$subject,$from){
	if(!$from){
		$from = 'CCREPORTS <ccnotify@waridtel.co.ug>';
	}
	$headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: ".$from."\r\n";
    mail($to,$subject,$HTML,$headers);
}
}
}
?>