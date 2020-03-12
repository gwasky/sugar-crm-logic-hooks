<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('data/SugarBean.php');
require_once('billing/objects/class.pog_base.php');
require_once('custom/BusinessLogic/sms/execute_sms.php');

class check_queue{
	
	function checkQueue(&$bean, $event, $arguments){
		if($event == 'before_save' && isset($_POST['qs_queues_lsqs_queues_ida'])){
			$myquery = new uniquequerys();
			$query = "select id from qs_queues 
						where deleted = 0 and name 
						NOT IN ('New Leads','CC Site Survey Requests','CS Site Surveys Pending Approval','Valid Prospect','Invalid Prospect','CC Complete Site Surveys','C & C Pending Approval','RF Planning','Service Trial','RF / Fiber Site Survey Requests','Packet Core Cases Pending')";
			$queues = $myquery->multiplerow_query($query);
			$id = $_POST['qs_queues_lsqs_queues_ida'];
			//die($id);
			foreach($queues as $row){ 
				$queues_load[$row[id]] = $row; 
			}
			if(array_key_exists($id,$queues_load)){
				 $redirectUrl = "index.php?module=Project&action=lead_queue_restriction"; 
				 header("Location:".$redirectUrl);
				 exit();
			
			}
		}
	}
		
	function sales_notification(&$bean, $event, $arguments){
		
		list($name[now][first],$name[now][last]) = explode(' ',trim($bean->sales_rep_c));
		list($name[before][first],$name[before][last]) = explode(' ',trim($bean->fetched_row[sales_rep_c]));
		
		$log[names] = $name;
		
		//CHECK FOR A REASSIGNMENT OF SALES REP AND MAKE NOTIFICATIONS
		if(
		   	trim($bean->sales_rep_c) != trim($bean->fetched_row[sales_rep_c]) and 
			(
			 	trim($bean->fetched_row[sales_rep_c]) != 'Not Assigned' and 
				trim($bean->fetched_row[sales_rep_c]) != '-blank-' and 
				trim($bean->fetched_row[sales_rep_c]) != ''
			)
		){
			$myquery = new uniquequerys();
			$myUser = new User();
			
			$changed_by = $myUser->retrieve($bean->modified_user_id);
			$log[name_change_changed_by_name] = $changed_by->full_name;
			$log[name_change_changed_by_email] = $changed_by->email1; 
			
			$log[name_change_query] = "
				SELECT
					email_addresses.email_address,
					users.phone_mobile
				FROM
					users
					Inner Join email_addr_bean_rel ON users.id = email_addr_bean_rel.bean_id
					Inner Join email_addresses ON email_addresses.id = email_addr_bean_rel.email_address_id
				WHERE
					(
						(users.first_name LIKE '%".$name[before][first]."%' AND users.last_name LIKE '%".$name[before][last]."%')
					OR
						(users.first_name LIKE '%".$name[before][last]."%' AND users.last_name LIKE '%".$name[before][first]."%')
					)
				LIMIT 1
			"; 
			
			$log[name_change_result] = $myquery->uniquequery($log[name_change_query]);
			
			$log[name_change_mobile] = $log[name_change_result][phone_mobile];
			$log[name_change_email] = $log[name_change_result][email_address];
			$log[number_check_name_change] = obtain_contacts($log[name_change_mobile]);
			
			$log[message][name_change] = "Dear ".trim($bean->fetched_row[sales_rep_c]).", \nYour Lead [".trim($bean->name_c)."] \nfrom ".trim($bean->salutation)." ".trim($bean->first_name)." ".trim($bean->last_name)." has been re assigned to ".$bean->sales_rep_c." as the new Sales Representative by ".$log[name_change_changed_by].". \n\n WARID DATA CRM \n".date('Y-m-d H:i:s');
			
			$log[message_mail][name_change] = "Dear ".trim($bean->fetched_row[sales_rep_c]).",<br><br>
			Your Lead <a href='http://wimaxcrm.waridtel.co.ug/index.php?module=Leads&return_module=Leads&action=DetailView&record=".$bean->id."'>[".trim($bean->name_c)."]</a> from ".trim($bean->salutation)." ".trim($bean->first_name)." ".trim($bean->last_name)." has been re assigned to ".$bean->sales_rep_c." as the new Sales Representative by ".$log[name_change_changed_by_name].". <br><hr> WARID DATA CRM <br>".date('Y-m-d H:i:s');
			
			$log[name_change_sms_result] = send($message=$log[message][name_change],$msisdn=reset($log[number_check_name_change][numbers]),$method='SMS',$sender=100);
			
			$to = $log[name_change_email].",balaji.vinjimoor@waridtel.co.ug,".$log[name_change_changed_by_email];
			$bcc = 'ccbusinessanalysis@waridtel.co.ug';
			$message = $log[message_mail][name_change];
			$subject = 'Lead Sales Representative Re assignment Notification';
			$log[name_change_mail_result] = $this->sendHTMLemail($to,$bcc,$message,$subject,$from);
			//echo "<hr>".nl2br(print_r($log,true))."<hr>";
			unset($log);
		}
		
		//CHECK FOR A REASSIGNMENT OF QUEUES AND MAKE NOTIFICATIONS
		if($bean->qs_queues_leads_name != $bean->rel_fields_before_value[qs_queues_leads_name]){
			//send the sms
			//find the MSISDN of the sales_rep_c ie $bean->sales_rep_c
			
			$log[message][queue_change] = "Dear ".trim($bean->sales_rep_c).", \nYour Lead [".trim($bean->name_c)."] \nfrom ".trim($bean->salutation).". ".trim($bean->first_name)." ".trim($bean->last_name)." has been moved from the ".$bean->rel_fields_before_value[qs_queues_leads_name]." to the ".$bean->qs_queues_leads_name." Queue. \n\n WARID DATA CRM \n".date('Y-m-d H:i:s');
			
			//print_r($log);
			
			$myquery = new uniquequerys();
			
			$log[queue_change_query] = "
				SELECT
					email_addresses.email_address,
					users.phone_mobile
				FROM
					users
					Inner Join email_addr_bean_rel ON users.id = email_addr_bean_rel.bean_id
					Inner Join email_addresses ON email_addresses.id = email_addr_bean_rel.email_address_id
				WHERE
					(
						(users.first_name LIKE '%".$name[now][first]."%' AND users.last_name LIKE '%".$name[now][last]."%')
					OR
						(users.first_name LIKE '%".$name[now][last]."%' AND users.last_name LIKE '%".$name[now][first]."%')
					)
				LIMIT 1
			";
			
			$log[queue_change_result] = $myquery->uniquequery($log[queue_change_query]);
			
			$log[queue_change_mobile] = $log[queue_change_result][phone_mobile];
			$log[queue_change_email] = $log[queue_change_result][email_address];
			$log[number_check_queue_change] = obtain_contacts($log[queue_change_mobile]);
			
			$log[queue_change_sms_result] = send($message=$log[message][queue_change],$msisdn=reset($log[number_check_queue_change][numbers]),$method='SMS',$sender=100);
			unset($log);
		}
	}
	
	function sendHTMLemail($to,$bcc,$message,$subject,$from){
		if(!$from){
			$from = 'DATA CRM <ccnotify@waridtel.co.ug>';
		}
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: ".$from."\r\n";
		if($bcc != ''){
			$headers .= "BCC: ".$bcc." \r\n";
		}
		
		return mail($to,$subject,$message,$headers);
	}
}

?>