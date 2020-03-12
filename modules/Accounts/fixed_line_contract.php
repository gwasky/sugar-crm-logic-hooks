<?php
require_once('billing/objects/class.pog_base.php');


//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class fixed_line_contract{
 		
		function uuid($prefix = '')
		{
			$chars = md5(uniqid(mt_rand(), true));
			$uuid  = substr($chars,0,8) . '-';
			$uuid .= substr($chars,8,4) . '-';
			$uuid .= substr($chars,12,4) . '-';
			$uuid .= substr($chars,16,4) . '-';
			$uuid .= substr($chars,20,12);
			return $prefix . $uuid;
		  
		}
		
		function fixed_line_con(&$bean, $event, $arguments){
		//echo '<pre>'.print_r($bean,true).'</pre>';
			if($event == 'after_save'){
			//print 'event pass: '.$event;
			
				if($bean->fetched_row[invoicing_type_c] == 'it_billing'){
					$myquery = new uniquequerys();
				
					$query = "select count(*) as contracts from cn_contracts where account = '".$bean->fetched_row[id]."' and deleted = '0'";
					$contracts_result = $myquery->uniquequery($query);
					//echo 'contracts'.$contracts_result[contracts].'<br>';
					if(intval($contracts_result[contracts]) == 0){
						//echo 'Creating Contract.........';
						$contractid = $this->uuid();
						$time_now = date('Y-m-d H:i:s');
						
						$query_insert = "
						INSERT INTO cn_contracts 
						(id, name, date_entered, date_modified, modified_user_id, created_by, deleted, account)
						VALUES
						('".$contractid."', '".$bean->fetched_row[name]." - Fixed line', DATE_SUB('".$time_now."', INTERVAL 3 HOUR), DATE_SUB('".$time_now."', INTERVAL 3 HOUR), '".$bean->fetched_row[modified_user_id]."', '".$bean->fetched_row[created_by]."', '0', '".$bean->fetched_row[id]."')
						";
						$create_contract = $myquery->uniquenonquery($query_insert);
						
						
						$query_insert = "
						INSERT INTO cn_contracts_cstm 
						(id_c, fixed_line_status_c, fixed_line_start_date_c)
						VALUES
						('".$contractid."', '".$bean->fetched_row[invoicing_type_c]."', '".substr($time_now,0,10)."')
						";
						$create_contract_c = $myquery->uniquenonquery($query_insert);
						
						
						$contract_rel_id = $this->uuid();
						
						$query_insert = "
						INSERT INTO accounts_cn_contracts_c 
						(id, accounts_cntsaccounts_ida, accounts_cn_contracts_idb, date_modified, deleted)
						VALUES
						('".$contract_rel_id."', '".$bean->fetched_row[id]."', '".$contractid."', DATE_SUB('".$time_now."', INTERVAL 3 HOUR), '0')
						";
						$create_contract_c = $myquery->uniquenonquery($query_insert);
						//exit();
					}
				}else{
					//echo 'Failed invoicing type: '.$bean->fetched_row[invoicing_type_c];
				//exit();
				}
			
			}else{
				//echo 'Event check failed: '.$event;
				//exit();
			}

		}
	}
 
?>
