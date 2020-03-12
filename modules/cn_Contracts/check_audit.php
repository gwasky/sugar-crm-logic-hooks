<?php
// NO COMMENT before php braces
//supposed to check if an account with the same name exists, but its not workin
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('data/SugarBean.php');
require_once('modules/Accounts/Account.php');
require_once('include/utils.php');

require_once('prog/class.pog_base.php');

class check_audit{
 
	function check_audit(&$bean, $event, $arguments){
		
		if($event == 'after_save'){
			$myquery = new uniquequerys();
			
			$query = "
				SELECT 
					COUNT(cn_contracts_audit.parent_id) as number 
				FROM 
					cn_contracts_audit
					INNER JOIN cn_contracts ON cn_contracts.id = cn_contracts_audit.parent_id
				WHERE 
					cn_contracts.id ='".$bean->id."' AND
					cn_contracts_audit.field_name = 'INITIALDATE_".$bean->status."' AND
					cn_contracts.deleted = 0
			";
			
			$time_of_change = date('Y-m-d H:i:s',strtotime("-3 hours"));
					  
			$count = $myquery->uniquequery($query);
			
			if($count[number] == 0){
				$insert_query = "
					INSERT INTO 
						cn_contracts_audit (
							id, 
							parent_id,
							date_created,
							created_by,
							field_name,
							data_type,
							after_value_string)
					VALUES ('".$this->uuid()."',
						'".$bean->id."',
						'".$time_of_change."',
						'".$bean->modified_user_id."',
						'status',
						'enum',
						'".$bean->status."'
					),(
						'".$this->uuid()."',
						'".$bean->id."',
						'".$time_of_change."',
						'".$bean->modified_user_id."',
						'start_date',
						'date',
						'".$bean->start_date."'
					),(
						'".$this->uuid()."',
						'".$bean->id."',
						'".$time_of_change."',
						'".$bean->modified_user_id."',
						'expiry_date',
						'date',
						'".$bean->expiry_date."'
					),(
						'".$this->uuid()."',
						'".$bean->id."',
						'".$time_of_change."',
						'".$bean->modified_user_id."',
						'INITIALDATE_".$bean->status."',
						'date',
						'".$bean->start_date."'
					)";
	
				$myquery->uniquenonquery($insert_query);
			}
		}
	}
	
	function uuid($prefix = ''){
		
		$chars = md5(uniqid(mt_rand(), true));
		$uuid  = substr($chars,0,8) . '-';
		$uuid .= substr($chars,8,4) . '-';
		$uuid .= substr($chars,12,4) . '-';
		$uuid .= substr($chars,16,4) . '-';
		$uuid .= substr($chars,20,12);
		
		return $prefix . $uuid;
	}
}				   
?> 