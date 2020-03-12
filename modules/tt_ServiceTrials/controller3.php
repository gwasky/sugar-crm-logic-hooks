<?php
require_once('include/MVC/Controller/SugarController.php'); 

class AccountsController extends SugarController { 
    /*function action_editview(){ 
        global $app_list_strings; 
         
        $this->view = 'edit'; 
        $GLOBALS['view'] = $this->view; 

        require_once('modules/cn_Contracts/cn_Contracts.php');
        
        $contracts_bean = new cn_Contract();
        $cn_Contract_list = $contracts_bean->get_list('', "accounts_cn_contracts_c.accounts_cn_contracts_idb = '{$this->bean->id}'");
        
        if(count($cn_Contract_list['list']) > 0) {
            $cn_Contract = array_shift($cn_Contract_list['list']);
            
            $this->bean->status = $cn_Contract->status;
        }
    }*/
    
    
 function action_detailview(){ 
        global $app_list_strings; 
         
        $this->view = 'detail'; 
        $GLOBALS['view'] = $this->view; 
        require_once('modules/tt_ServiceTrials/tt_ServiceTrials.php');
        
        $tt_ServiceTrials_bean = new tt_ServiceTrials();
        $tt_ServiceTrials_list = $tt_ServiceTrials_bean->get_list('', "tt_ServiceTrials.account = '{$this->bean->id}'");
        
        if(count($tt_ServiceTrials_list['list']) > 0) {
            $tt_ServiceTrials = array_shift($tt_ServiceTrials_list['list']);
            
            $this->bean->status = $cn_Contracts->status;
			$this->bean->start_date = $cn_Contracts->start_date;
			$this->bean->expiry_date = $cn_Contracts->expiry_date;
        }
    }

}  

 ?>
