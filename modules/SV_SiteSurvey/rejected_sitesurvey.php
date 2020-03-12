


<?php


//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class rejectedcl_survey{
 
		function rejectedcl_survey(&$bean, $event, $arguments){
		
		function sendHTMLemailRS($to,$HTML,$subject,$from){
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
			if ($bean->fetched_row['site_survey_status'] !== 'Rejected[Customer limitation]' && $bean->site_survey_status  == 'Rejected[Customer limitation]')
			
			{

				$subject = "Site Survey Rejected [Customer Limitation]";
				
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
    <td colspan='2' align='left' valign='top'><span class='style3'>Notification Type:</span><span class='style6'> Site Survey Rejected[Customer Limitation]</span></td>
  </tr>
  <tr>
    <td width='30%' align='left' valign='top'><span class='style6'>Dear Teams,</span></td>
    <td width='70%' align='left' valign='top'><span class='style7'></span></td>
  </tr>
  <tr>
    <td colspan='2' align='left' valign='top'><span class='style6'>The Lead {$bean->leads_sv_sitesurvey_name} site survey status is marked rejected due to customer limitation</span></td>
  </tr>
  <tr>
    <td align='left' valign='top'><span class='style3'>Pending Tasks:</span></td>
    <td align='left' valign='top'><span class='style6'>1. View sitesurvey details and advise customer accordingly<br /> 
    2. If a conclusion is not reached, please assign lead to invalid prospect</span></td>
  </tr>
  <tr>
    <td align='left' valign='top'><span class='style3'>Details:</span></td>
    <td align='left' valign='top'><span class='style6'>http://wimaxcrm.waridtel.co.ug/index.php?module=SV_SiteSurvey&offset=1&stamp=1266224204040687600&return_module=SV_SiteSurvey&action=DetailView&record={$bean->id}</span></td>
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
		   $to = 'CORPORATESALES@waridtel.co.ug,joseph.nsamba@waridtel.co.ug,peter.angole@waridtel.co.ug,Milton Mubangizi/Engineering/Kampala <milton.mubangizi@waridtel.co.ug>,ccbusinessanalysis@waridtel.co.ug';
		   //$to = 'daniel.katatumba@waridtel.co.ug';













//$to = 'daniel.katatumba@waridtel.co.ug';

				
				//$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";
				$from = "Infinity Wimax <ccnotify@waridtel.co.ug>";
				//$subject = "CC Site survey Request";
				sendHTMLemailRS($to,$body,$subject,$from);




				
			}
		}
	}
 
?>