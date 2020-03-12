<?php
require_once('include/MVC/Controller/SugarController.php'); 

class AccountsController extends SugarController { 
    function action_editview(){ 
        global $app_list_strings; 
         
        $this->view = 'edit'; 
        $GLOBALS['view'] = $this->view; 

        require_once('modules/cn_Contracts/cn_Contracts.php');
        
        $contracts_bean = new cn_Contract();
        $contract_list = $contracts_bean->get_list('', "contracts.account_id = '{$this->bean->id}'");
        
        if(count($contract_list['list']) > 0) {
            $contract = array_shift($contract_list['list']);
            
            $this->bean->status = $contract->status;
        }
    }
    
    
     function action_detailview(){ 
        global $app_list_strings; 
         
        $this->view = 'detail'; 
        $GLOBALS['view'] = $this->view; 
        require_once('modules/cn_Contracts/cn_Contracts.php');
        
        $contracts_bean = new cn_Contract();
        $contract_list = $contracts_bean->get_list('', "contracts.account_id = '{$this->bean->id}'");
        
        if(count($contract_list['list']) > 0) {
            $contract = array_shift($contract_list['list']);
            
            $this->bean->status = $contract->status;
			$this->bean->start_date = $contract->start_date;
			$this->bean->expiry_date = $contract->expiry_date;
        }
    }
}  
 ?>
