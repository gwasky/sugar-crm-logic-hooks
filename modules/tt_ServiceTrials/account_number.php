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

class account_number{


 function account_number(&$bean, $event, $arguments){
                     if(isset($bean->account) && !empty($bean->account)){
                      // value already set
                   }
                   else
                   {
				   $db = &PearDatabase::getinstance();
				   
				   $account = $bean->accounts_tt_servicetrials_name;
				   $GLOBALS['log']->fatal("HOOK 1-".print_r($account,true));
				   //$get_id = $bean->id;
                     $query = "SELECT id FROM accounts WHERE accounts.name = '$account' AND deleted = '0'";
					 $GLOBALS['log']->fatal("HOOK 2-".print_r($query,true));
                     $result = $db->query($query, true,"Error incrementing OfferNumber: ");
					 $GLOBALS['log']->fatal("HOOK 3-".print_r($result,true));
                     $row = $db->fetchByAssoc($result);
					 $GLOBALS['log']->fatal("HOOK 4-".print_r($row,true));
                     if($row != null) {
                       $bean->account = $row[id];    

                     }   
                   }
  } // end function
} // end class
 
?> 