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
		require_once('billing/objects/class.pog_base.php');
		
		$myquery = new uniquequerys();
		
		$query = "
		SELECT 
			cn_contracts.start_date as data_start,
			cn_contracts.`status` as data_status,
			cn_contracts.expiry_date as data_expiry,
			cn_contracts_cstm.web_hosting_start_c as web_hosting_start,
			cn_contracts_cstm.web_hosting_end_date_c as web_hosting_expiry,
			cn_contracts_cstm.mail_hosting_start_date_c as mail_hosting_start,
			cn_contracts_cstm.mail_hosting_end_date_c as mail_hosting_expiry,
			cn_contracts_cstm.domain_hosting_start_date_c as domain_hosting_start,
			cn_contracts_cstm.domain_hosting_end_date_c as domain_hosting_expiry,
			cn_contracts_cstm.domain_reg_start_date_c as domain_reg_start,
			cn_contracts_cstm.domain_reg_end_date_c as domain_reg_expiry,
			cn_contracts_cstm.web_hosting_status_c as web_hosting_status,
			cn_contracts_cstm.mail_hosting_status_c as mail_hosting_status,
			cn_contracts_cstm.domain_hosting_status_c as domain_hosting_status,
			cn_contracts_cstm.domain_reg_status_c as domain_reg_status
		FROM
			cn_contracts
			INNER JOIN cn_contracts_cstm ON (cn_contracts.id=cn_contracts_cstm.id_c)
		WHERE
			cn_contracts.deleted = 0 and
			cn_contracts.account='".$this->bean->id."'
		";
		
		$contract_info = $myquery->uniquequery($query);
		
		$this->bean->status = $contract_info[data_status];
		$this->bean->start_date = $contract_info[data_start];
		$this->bean->expiry_date = $contract_info[data_expiry];
		
		$this->bean->web_hosting_start_c = $contract_info[web_hosting_start];
		$this->bean->web_hosting_end_date_c = $contract_info[web_hosting_expiry];
		$this->bean->web_hosting_status_c = $contract_info[web_hosting_status];
		
		$this->bean->mail_hosting_start_date_c = $contract_info[mail_hosting_start];
		$this->bean->mail_hosting_end_date_c = $contract_info[mail_hosting_expiry];
		$this->bean->mail_hosting_status_c = $contract_info[mail_hosting_status];
		
		$this->bean->domain_hosting_start_date_c = $contract_info[domain_hosting_start];
		$this->bean->domain_hosting_end_date_c = $contract_info[domain_hosting_expiry];
		$this->bean->domain_hosting_status_c = $contract_info[domain_hosting_status];
		
		$this->bean->domain_reg_start_date_c = $contract_info[domain_reg_start];
		$this->bean->domain_reg_end_date_c = $contract_info[domain_reg_expiry];
		$this->bean->domain_reg_status_c = $contract_info[domain_reg_status];
	}  

}  

 ?>
