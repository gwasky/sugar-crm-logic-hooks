<?php
// NO COMMENT before php braces
//supposed to check if an account with the same name exists, but its not workin
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('data/SugarBean.php');
require_once('modules/cn_Contracts/cn_Contracts.php');
require_once('include/utils.php');

class contract_account_number{
	function account_number(&$bean, $event, $arguments){		  
		$bean->account = $bean->accounts_cntsaccounts_ida;     
	} // end function
} // end class
 
?> 