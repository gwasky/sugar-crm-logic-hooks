<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
error_reporting(E_ERROR|E_PARSE);
require_once('data/SugarBean.php');
require_once('modules/Accounts/Account.php');
require_once('modules/Users/User.php');
require_once('include/utils.php');
require_once('billing/objects/class.pog_base.php');
require_once('custom/BusinessLogic/sms/execute_sms.php');

class account_number{
	function account_number(&$bean, $event, $arguments){
		if(isset($bean->crn_c) && !empty($bean->crn_c)){
			// value already set
		}else{
			//ENSURE THAT CRN_C IS ALWAYS UNIQUE
			$query = "
				ALTER TABLE `accounts_cstm`
				DROP INDEX `crn_c`,
				ADD UNIQUE INDEX `account_number` USING BTREE (`crn_c`);
			";
			$result = uniquequerys::uniquequery($query);
			
			$query = "
				select 
					(count(*) + 1) as number
				from 
					accounts 
				where 
					accounts.date_entered >= date_add(date_format(curdate(),'%Y-%m-01 00:00:00'), interval - 3 hour)
			";
			$result = uniquequerys::uniquequery($query);
			$bean->crn_c = $this->format_number($result[number]);
		}
		
		//clean up the parent_id of all spaces tabs and new lines
		$bean->mem_id_c = preg_replace("/\s+/", "",$bean->mem_id_c);
		
		if($bean->mem_id_c == '' and $bean->acc_c == 'Parent') { $bean->mem_id_c = $bean->crn_c; }
		
		if($bean->mem_id_c == '' and $bean->acc_c == 'Child') { exit('Please set the Parent Account number for this Child account!');}
		
	}// end function
	
	function format_number($value){
		
		$prefix = date('Ym-');
		
		if(10 <= $value and $value <= 99){
			return $prefix.'0'.$value;
		}elseif($value < 10){
			return $prefix.'00'.$value;
		}
		
		return $prefix.$value;
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
			$log[name_change_changed_by] = $changed_by->full_name;
			$log[name_change_changed_by_email] = $changed_by->email1;
			$log[name_change_changed_by_id] = $bean->modified_user_id;
			
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
			
			$log[message][name_change] = "Dear ".trim($bean->fetched_row[sales_rep_c]).", \nYour Account ".strtoupper(trim($bean->name))." has been re assigned to ".$bean->sales_rep_c." as the new Sales Representative by ".$log[name_change_changed_by].". \n\n WARID DATA CRM \n".date('Y-m-d H:i:s');
			
			$log[message_mail][name_change] = "Dear ".trim($bean->fetched_row[sales_rep_c]).",<br><br>
			Your Account <a href='http://wimaxcrm.waridtel.co.ug/index.php?module=Accounts&return_module=Accounts&action=DetailView&record=".$bean->id."'>".trim($bean->crn_c)." - ".trim($bean->name)."</a> has been re assigned to ".$bean->sales_rep_c." as the new Sales Representative by ".$log[name_change_changed_by]."<hr>[CHANGEING USER ID=".$log[name_change_changed_by_id]."]. <br><hr>WARID DATA CRM <br>".date('Y-m-d H:i:s');
			
			$log[name_change_sms_result] = send($message=$log[message][name_change],$msisdn=$log[number_check_name_change][numbers][0],$method='SMS',$sender=100);
			
			$to = $log[name_change_email].",balaji.vinjimoor@waridtel.co.ug,".$log[name_change_changed_by_email];
			$bcc = 'ccbusinessanalysis@waridtel.co.ug';
			$message = $log[message_mail][name_change];
			$subject = 'Lead Sales Representative Re assignment Notification';
			$log[name_change_mail_result] = $this->sendHTMLemail($to,$bcc,$message,$subject,$from);
			
			unset($log);
		}
		
		//CHECK FOR A REASSIGNMENT OF QUEUES AND MAKE NOTIFICATIONS
		if($bean->qs_queues_accounts_name != $bean->rel_fields_before_value[qs_queues_accounts_name]){
			//send the sms
			//find the MSISDN of the sales_rep_c ie $bean->sales_rep_c
			
			$log[message][queue_change] = "Dear ".trim($bean->sales_rep_c).", \nYour Account ".strtoupper(trim($bean->name))." has been moved from the ".$bean->rel_fields_before_value[qs_queues_accounts_name]." Queue to the ".$bean->qs_queues_accounts_name." Queue. \n\n WARID DATA CRM \n".date('Y-m-d H:i:s');
			
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
			
			$log[queue_change_sms_result] = send($message=$log[message][queue_change],$msisdn=$log[number_check_queue_change][numbers][0],$method='SMS',$sender=100);
			unset($log);
		}
	}
	
	function get_contract_info(&$bean, $event, $arguments){
		
		if($event == 'after_retrieve'){
			$myquery = new uniquequerys();
			
			$query = "
			SELECT 
				start_date as data_start,
				`status` as data_status,
				expiry_date as data_expiry,
				cn_contracts_cstm.web_hosting_start_c as web_hosting_start,
				web_hosting_end_date_c as web_hosting_expiry,
				mail_hosting_start_date_c as mail_hosting_start,
				mail_hosting_end_date_c as mail_hosting_expiry,
				domain_hosting_start_date_c as domain_hosting_start,
				domain_hosting_end_date_c as domain_hosting_expiry,
				domain_reg_start_date_c as domain_reg_start,
				domain_reg_end_date_c as domain_reg_expiry,
				web_hosting_status_c as web_hosting_status,
				mail_hosting_status_c as mail_hosting_status,
				domain_hosting_status_c as domain_hosting_status,
				domain_reg_status_c as domain_reg_status
			FROM
				cn_contracts
				INNER JOIN cn_contracts_cstm ON (cn_contracts.id=cn_contracts_cstm.id_c)
			WHERE
				cn_contracts.deleted = 0 and
				cn_contracts.account='".$bean->id."'
			";
			
			$contract_info = $myquery->uniquequery($query);
			
			//var_dump($contract_info);
			
			//exit("Executed inside ".$query." -> [".print_r($contract_info,TRUE)."]<BR>");
			
			$bean->status = $contract_info[data_status];
			$bean->start_date = $contract_info[data_start];
			$bean->expiry_date = $contract_info[data_expiry];
			
			$bean->web_hosting_start_c = $contract_info[web_hosting_start];
			$bean->web_hosting_end_date_c = $contract_info[web_hosting_expiry];
			$bean->web_hosting_status_c = $contract_info[web_hosting_status];
			
			$bean->mail_hosting_start_date_c = $contract_info[mail_hosting_start];
			$bean->mail_hosting_end_date_c = $contract_info[mail_hosting_expiry];
			$bean->mail_hosting_status_c = $contract_info[mail_hosting_status];
			
			$bean->domain_hosting_start_date_c = $contract_info[domain_hosting_start];
			$bean->domain_hosting_end_date_c = $contract_info[domain_hosting_expiry];
			$bean->domain_hosting_status_c = $contract_info[domain_hosting_status];
			
			$bean->domain_reg_start_date_c = $contract_info[domain_reg_start];
			$bean->domain_reg_end_date_c = $contract_info[domain_reg_expiry];
			$bean->domain_reg_status_c = $contract_info[domain_reg_status];
			
			$bean->related_fields_c = "";
			
			if($bean->status != ""){
				$bean->related_fields_c .= "BANDWIDTH SERVICES
			STATUS: [".$bean->status."], START DATE: [".$bean->start_date."], END DATE: [".$bean->expiry_date."]
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
			}
			
			if($bean->web_hosting_status_c != ""){
				$bean->related_fields_c .= "
				WEB HOSTING SERVICES
				STATUS: [".$bean->web_hosting_status_c."], START DATE: [".$bean->web_hosting_start_c."], END DATE: [".$bean->web_hosting_end_date_c."]
				~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
			}
			
			if($bean->mail_hosting_status_c != ""){
				$bean->related_fields_c .= "
				MAIL HOSTING SERVICES
				STATUS: [".$bean->mail_hosting_status_c."], START DATE: [".$bean->mail_hosting_start_date_c."], END DATE: [".$bean->mail_hosting_end_date_c."]
				~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
			}
			
			if($bean->domain_hosting_status_c != ""){
				$bean->related_fields_c .= "
				DOMAIN HOSTING SERVICES
				STATUS: [".$bean->domain_hosting_status_c."], START DATE: [".$bean->domain_hosting_start_date_c."], END DATE: [".$bean->domain_hosting_end_date_c."]
				~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
			}
			if($bean->domain_reg_status_c != ""){
				$bean->related_fields_c .= "
				DOMAIN REGISTRATION SERVICES
				STATUS: [".$bean->domain_reg_status_c."], START DATE: [".$bean->domain_reg_start_date_c."], END DATE: [".$bean->domain_reg_end_date_c."]
				~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
			}
		}else{
			//exit("Executed outside");
		}
	}
	
	function account_name_check(&$bean, $event, $arguments){
		//CHECK DISCARDED TO ALLOW USERS TO DUPLICATE ACCOUNTS. THE USERS PROMISE TO DELETE BLANK ACCOUNTS
		
		/*if($event == 'before_save'){
			if(trim($bean->name) == ''){
				$html = 'The account name you have put is blank, please <a href="javascript: history.go(-1)">try again</a>.';
				//$html .= '<pre>'.print_r($_SERVER).'</pre>';
				echo $html;
				exit();
			}
		}*/
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
}// end class

?> 