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
require_once('billing/objects/class.pog_base.php');

class conversion_check{
	
	function set_default_account_name(&$bean, $event, $arguments){
		
		$query = "
			select 
				count(*) as number
			from 
				accounts 
			where 
				accounts.id = '".$bean->id."'
		";
		$result = uniquequerys::uniquequery($query);
		
		//Newly converted account
		if(
			(intval($result[number]) == 0 or $bean->id == '') and		//New account e.g converted
			trim($bean->name) != ''										//And name has been filled esp when created by duplicated
		){
			$bean->name = $bean->name_c;
			$bean->acc_c = 'Parent';
			//Admin contact equivalent from Leads ($bean->phone_work) to accounts ($bean->contact_person_phone_c)
			$bean->contact_person_phone_c = $bean->phone_work;
		}
		
		//exit('result is '.print_r($result,TRUE));
	}
	
	function update_primary_account_site_id(&$bean, $event, $arguments){
		//THIS FUNCTION GETS THE PRIMARY ID ON THE MOST RECENTLY UPDATED SITE SURVEY ATTACHED TO THE LEAD FROM WHICH THIS ACCOUNT HAS BEEN CONVERTED
		
		if($event == 'after_save' and $bean->fetched_row[site_c] == ''){
			$query = "
				SELECT
					sv_sitesurvey.primary_base_loc_id AS primary_site
				FROM
					sv_sitesurvey
					Inner Join leads_sv_sitesurvey_c ON leads_sv_sitesurvey_c.leads_sv_sisitesurvey_idb = sv_sitesurvey.id
					Inner Join leads ON leads.id = leads_sv_sitesurvey_c.leads_sv_siurveyleads_ida
					Inner Join leads_cstm on leads_cstm.id_c = leads.id
				WHERE
					leads_sv_sitesurvey_c.deleted = 0 AND
					leads.account_id = '".$bean->fetched_row[id]."' AND
					sv_sitesurvey.site_survey_status = 'Approved'
				ORDER BY
					sv_sitesurvey.date_modified DESC
				LIMIT 1
			";
			
			$result = uniquequerys::uniquequery($query);
			
			$update_query = "
				UPDATE 
					accounts_cstm
				SET 
					accounts_cstm.site_c = '".$result[primary_site]."'
				WHERE
					accounts_cstm.id_c = '".$bean->fetched_row[id]."'
			";
			
			$result = uniquequerys::uniquequery($update_query);
		}
	}
}
 
?> 