<?php



//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que

        if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

        class notify_all{

                function notify_all(&$bean, $event, $arguments){
				function sendHTMLemail50($to,$HTML,$subject,$from){
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
                        if ($bean->fetched_row['trial_status_c'] != 'Started' && $bean->trial_status_c == 'Started')

                        {

                                $subject = "Wimax Service Trial Succesfully Started";

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
    <td colspan='2' align='left' valign='top'><span class='style3'>Notification Type:</span><span class='style6'>Wimax Service Trial Succesfully Started</span></td>
  </tr>
  <tr>
    <td width='30%' align='left' valign='top'><span class='style6'>Dear All,</span></td>
    <td width='70%' align='left' valign='top'><span class='style7'></span></td>
  </tr>
  <tr>
    <td colspan='2' align='left' valign='top'><span class='style6'> The service trial for lead '{$bean->leads_tr_trials_name}' has started. The trial Period Installation date is '{$bean->trial_start_c}' and end date is '{$bean->trial_end_c}'.</span></td>
  </tr>
  <tr>
    <td align='left' valign='top'><span class='style3'>Pending Tasks:</span></td>
    <td align='left' valign='top'><span class='style6'>1. None.</span></td>
  </tr>
  <tr>
    <td align='left' valign='top'><span class='style3'>Details:</span></td>
    <td align='left' valign='top'><span class='style6'>http://wimaxcrm.waridtel.co.ug/index.php?action=DetailView&module=tr_Trials&record={$bean->id}</span></td>
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
		   $to = 'BUISINESSCENTERKAMPALA@waridtel.co.ug,PACKETCORENETWORKS@waridtel.co.ug,CORPORATESALES@waridtel.co.ug,shine.george@waridtel.co.ug,moses.wamono@waridtel.co.ug,phiona.ireemera@waridtel.co.ug,CREDITCOLLECTION@waridtel.co.ug,ra@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,revenuerecognition@waridtel.co.ug';

//$to = 'daniel.katatumba@waridtel.co.ug';

				
				//$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";
				$from = "Infinity Wimax <ccnotify@waridtel.co.ug>";
				//$subject = "CC Site survey Request";
				sendHTMLemail50($to,$body,$subject,$from);




				
			}
		}
	}
 
?>