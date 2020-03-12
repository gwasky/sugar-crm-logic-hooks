<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2008-12-22 11:35:42
$dictionary["SV_SiteSurvey"]["fields"]["leads_sv_sitesurvey"] = array (
  'name' => 'leads_sv_sitesurvey',
  'type' => 'link',
  'relationship' => 'leads_sv_sitesurvey',
  'source' => 'non-db',
);


// created: 2008-12-22 11:35:42
$dictionary["SV_SiteSurvey"]["fields"]["leads_sv_sitesurvey_name"] = array (
  'name' => 'leads_sv_sitesurvey_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_SV_SITESURVEY_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_sv_siurveyleads_ida',
  'link' => 'leads_sv_sitesurvey',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);


// created: 2008-12-22 11:35:42
$dictionary["SV_SiteSurvey"]["fields"]["leads_sv_siurveyleads_ida"] = array (
  'name' => 'leads_sv_siurveyleads_ida',
  'type' => 'link',
  'relationship' => 'leads_sv_sitesurvey',
  'source' => 'non-db',
);


// created: 2008-12-22 11:36:49
$dictionary["SV_SiteSurvey"]["fields"]["qs_queues_sv_sitesurvey"] = array (
  'name' => 'qs_queues_sv_sitesurvey',
  'type' => 'link',
  'relationship' => 'qs_queues_sv_sitesurvey',
  'source' => 'non-db',
);


// created: 2008-12-22 11:36:49
$dictionary["SV_SiteSurvey"]["fields"]["qs_queues_sv_sitesurvey_name"] = array (
  'name' => 'qs_queues_sv_sitesurvey_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QS_QUEUES_SV_SITESURVEY_FROM_QS_QUEUES_TITLE',
  'save' => true,
  'id_name' => 'qs_queues_syqs_queues_ida',
  'link' => 'qs_queues_sv_sitesurvey',
  'table' => 'qs_queues',
  'module' => 'qs_Queues',
  'rname' => 'name',
);


// created: 2008-12-22 11:36:49
$dictionary["SV_SiteSurvey"]["fields"]["qs_queues_syqs_queues_ida"] = array (
  'name' => 'qs_queues_syqs_queues_ida',
  'type' => 'link',
  'relationship' => 'qs_queues_sv_sitesurvey',
  'source' => 'non-db',
);



// created: 2008-12-22 11:35:42
$dictionary["SV_SiteSurvey"]["fields"]["leads_sv_sitesurvey"] = array (
  'name' => 'leads_sv_sitesurvey',
  'type' => 'link',
  'relationship' => 'leads_sv_sitesurvey',
  'source' => 'non-db',
);


// created: 2008-12-22 11:35:42
$dictionary["SV_SiteSurvey"]["fields"]["leads_sv_sitesurvey_name"] = array (
  'name' => 'leads_sv_sitesurvey_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_SV_SITESURVEY_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_sv_siurveyleads_ida',
  'link' => 'leads_sv_sitesurvey',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);


// created: 2008-12-22 11:35:42
$dictionary["SV_SiteSurvey"]["fields"]["leads_sv_siurveyleads_ida"] = array (
  'name' => 'leads_sv_siurveyleads_ida',
  'type' => 'link',
  'relationship' => 'leads_sv_sitesurvey',
  'source' => 'non-db',
);



// created: 2008-12-19 17:37:47
$dictionary["SV_SiteSurvey"]["fields"]["sv_sitesurvey_leads"] = array (
  'name' => 'sv_sitesurvey_leads',
  'type' => 'link',
  'relationship' => 'sv_sitesurvey_leads',
  'source' => 'non-db',
);


?>