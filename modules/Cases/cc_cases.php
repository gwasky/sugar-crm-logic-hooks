<?php
//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que

require_once('billing/objects/class.pog_base.php');
require_once('custom/BusinessLogic/sms/execute_sms.php');

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
class cc_cases{
 
	function cc_cases(&$bean, $event, $arguments){

		// make sure the status was actually changed to closed
		// $bean->fetched_row['status'] is the stored status of the case
		// $bean->status is the status it was changed to
		if ($event == 'before_save' && $bean->rel_fields_before_value['qs_queues_cases_name'] != 'C & C Cases Pending' && $bean->qs_queues_cases_name == 'C & C Cases Pending'){
			$subject = "Notification Type: Case Logged to C&C";
			
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
    <td colspan='2' align='left' valign='top'><span class='style3'>Notification Type:</span><span class='style6'> Case Logged to C&C</span></td>
  </tr>
  <tr>
    <td width='30%' align='left' valign='top'><span class='style6'>Dear Credit Collection,</span></td>
    <td width='70%' align='left' valign='top'><span class='style7'></span></td>
  </tr>
  <tr>
    <td colspan='2' align='left' valign='top'><span class='style6'>Case for account '{$bean->account_name}' with subject '{$bean->name}' has been assigned to C&C Cases Pending Queue</span></td>
  </tr>
  <tr>
    <td align='left' valign='top'><span class='style3'>Pending Tasks:</span></td>
    <td align='left' valign='top'><span class='style6'>1. Review case details, call customer and trouble shoot (Troubleticket: {$bean->subject_setting_c}).<br /> 
    2. Close case Assign to CC Outbound Or Cases Archive queues. Otherwise assign case to NOC Cases Pending Or Field OPS Cases</span></td>
  </tr>
      <tr>
    <td align='left' valign='top'><span class='style3'>Root Cause:</span></td>
    <td align='left' valign='top'><span class='style6'>{$bean->root_cause_c}</span></td>
  </tr>
  <tr>
    <td align='left' valign='top'><span class='style3'>Details:</span></td>
    <td align='left' valign='top'><span class='style6'>http://wimaxcrm.waridtel.co.ug/index.php?action=DetailView&module=Cases&record={$bean->id}</span></td>
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
			$to = 'complaintsupport@waridtel.co.ug,creditcollection@waridtel.co.ug,grace.kigundu@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug';
			//$to = 'emmlagwa@ug.ibm.com';
			
			//$headers = 'From: Infinity Wimax <ccnotify@waridtel.co.ug>' . "\r\n";
			$from = "Infinity Wimax <ccnotify@waridtel.co.ug>";
			//$subject = "CC Site survey Request";
			$this->sendHTMLemail($to,$body,$subject,$from);
			
		}
	}
	
	function sendHTMLemail($to,$HTML,$subject,$from, $reply_to='customercare@waridtel.co.ug', $bcc=''){
		if(!$from){
			$from = 'Warid Customer Care <ccnotify@waridtel.co.ug>';
			$headers .= "From: ".$from."\r\n";
			
			if($reply_to!=''){
				$headers .= "Reply-To: ".$reply_to."\r\n";
			}
		}
		if($bcc){
			$headers .= "BCC: ".$bcc." \r\n";
		}
		$headers .= "MIME-Version: 1.0\r\n";
    	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    	mail($to,$subject,$HTML,$headers);
	}
	
	function case_closure_customer_notification(&$bean, $event, $arguments){
		
		if($event == 'before_save' and $bean->status == 'Closed' and $bean->fetched_row[status] != 'Closed'){
			
			$myquery = new uniquequerys();
			
			$query = "
				SELECT
					accounts_cstm.crn_c AS account_no,
					accounts_cstm.contact_person_c AS admin_person,
					TRIM(accounts_cstm.contact_person_phone_c) AS admin_phone,
					accounts_cstm.technical_contact_person_c AS tech_person,
					TRIM(accounts_cstm.technical_contact_phone_c) AS tech_phone
				FROM
					accounts_cstm
				WHERE
					accounts_cstm.id_c = '".$bean->account_id."'
			";
			
			$result = $myquery->uniquequery($query);
			
			$contacts_to_check = $bean->calling_num_c.'/'.$result[admin_phone];
			if($result[tech_phone] != $result[admin_phone]){
				$contacts_to_check .= '/'.$result[tech_phone];
			}
			$checked_contacts = obtain_contacts($contacts_to_check);
			
			$sms_message = "Dear customer,\nYour complaint ".strtoupper($bean->name).", number ".$bean->case_number." against Account ".$result[account_no]." has been closed. \n\nWARID CUSTOMER CARE\n0700777000";
			
			if(count($checked_contacts[numbers]) > 0 and !empty($checked_contacts[numbers])){
				foreach($checked_contacts[numbers] as $msisdn){
					send($sms_message,$msisdn,$method='SMS',$sender=100);
					$checked_contacts_list .= $msisdn; if(++$ii < count($checked_contacts)){ $checked_contacts_list .= ','; }
				}
				
				//Let Complaints support and Retention know about the SMS.
				$SMG_Rentention_notice = '
					<div style="font:calibri; font-size:12px;">
					<p>Dear SMG/Retention team,</p>
					<p>This is to notify you that Complaint logging, Account admininistrative and Account technical (phone) contacts ['.$checked_contacts_list.'] of Data <a href="http://wimaxcrm.waridtel.co.ug/index.php?module=Accounts&action=DetailView&record='.$bean->account_id.'" target="_blank">account '.$result[account_no].'</a> have been sent a case closure notification for <a href="http://wimaxcrm.waridtel.co.ug/index.php?module=Cases&action=DetailView&record='.$bean->id.'" target="_blank">case ['.strtoupper($bean->name).'] number '.$bean->case_number.'</a> as follows : </p><hr>
					<p style="background-color:#CCC; font-style:italic;">'.nl2br($sms_message).'</p><hr>
					<p>WimaxCRM Notifications</p>
					</div>
				';
			}else{
				$SMG_Rentention_notice = '
					<div style="font:calibri; font-size:12px;">
					<p>Dear SMG/Retention team,</p>
					<p>This is to notify you that Data <a href="http://wimaxcrm.waridtel.co.ug/index.php?module=Accounts&action=DetailView&record='.$bean->account_id.'" target="_blank">account '.$result[account_no].'</a> has no VALID administrative and technical (phone) contacts ['.$checked_contacts_list.'] and therefore they shall not be able to receive the case closure notification for the case <a href="http://wimaxcrm.waridtel.co.ug/index.php?module=Cases&action=DetailView&record='.$bean->id.'" target="_blank">['.strtoupper($bean->name).'] number '.$bean->case_number.'</a></p>
					<p style="background-color:#CCC; font-style:italic;">CONTACT CHECK ERROR : '.$checked_contact[error].'<hr></p><hr>
					<p>WimaxCRM Notifications</p>
					</div>
				';
			}
			
			$this->sendHTMLemail($to='customercare@waridtel.co.ug,retention1@waridtel.co.ug',$body=$SMG_Rentention_notice,$subject="Data Case ".$bean->case_number." closed",$from="Infinity WimaxCRM <ccnotify@waridtel.co.ug>",$reply_to='', $bcc='');
		}
	}
}
 
?>
