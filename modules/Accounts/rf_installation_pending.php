<?php


//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class rf_installation_pending{
 
		function rf_installation_pending(&$bean, $event, $arguments){
		
		function sendHTMLemail701($to,$HTML,$subject,$from){
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
 
			// make sure the status was actually changed to closed
			// $bean->fetched_row['status'] is the stored status of the case
			// $bean->status is the status it was changed to
			if ($bean->rel_fields_before_value['qs_queues_accounts_name'] !== 'RF / Fiber Installation/Configuration Pending' && $bean->qs_queues_accounts_name === 'RF / Fiber Installation/Configuration Pending')
			
			{

				$subject = "Notification Type: RF / Fiber Installation/Configuration Pending";
				
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
    <td colspan='2' align='left' valign='top'><span class='style3'>Notification Type:</span><span class='style6'> RF / Fiber Installation/Configuration Pending</span></td>
  </tr>
  <tr>
    <td width='30%' align='left' valign='top'><span class='style6'>Dear TXPLANNING & PACKETCORE,</span></td>
    <td width='70%' align='left' valign='top'><span class='style7'></span></td>
  </tr>
  <tr>
    <td colspan='2' align='left' valign='top'><span class='style6'>Account {$bean->name} has been assigned to Installation Pending Queue.</span></td>
  </tr>
        <tr>
    <td align='left' valign='top'><span class='style3'>Preffered Platform:</span></td>
    <td align='left' valign='top'><span class='style6'>{$bean->platform_c}</span></td>
  </tr>
  <tr>
    <td align='left' valign='top'><span class='style3'>Pending Tasks:</span></td>
    <td align='left' valign='top'><span class='style6'>1. Complete Installation at customers premises<br /><span class='style3'>Requested Bandwidth:</span>{$bean->download_bandwidth_c},<br /> <span class='style3'>CPE Type:</span>{$bean->cpe_type_c}. <br />Update CRM with customers IP Address<br /> 
    2. Assign to Bill Activation Pending Queue.</span></td>
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
			 $to = 'grace.kigundu@waridtel.co.ug,corporatesales@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,joseph.nsamba@waridtel.co.ug,CCCORPORATE@waridtel.co.ug,TXPLANNING@waridtel.co.ug,PACKETCORENETWORKS@waridtel.co.ug';

//$to = 'daniel.katatumba@waridtel.co.ug';

				
				//$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";
				$from = "Infinity Wimax <ccnotify@waridtel.co.ug>";
				//$subject = "CC Site survey Request";
				sendHTMLemail701($to,$body,$subject,$from);




				
			}
		}
	}
 
?>

