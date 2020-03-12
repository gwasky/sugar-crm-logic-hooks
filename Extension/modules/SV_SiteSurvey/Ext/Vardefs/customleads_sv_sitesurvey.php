<?php
// created: 2008-12-22 11:35:42
$dictionary["SV_SiteSurvey"]["fields"]["leads_sv_sitesurvey"] = array (
  'name' => 'leads_sv_sitesurvey',
  'type' => 'link',
  'relationship' => 'leads_sv_sitesurvey',
  'source' => 'non-db',
);
?>
<?php
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
?>
<?php
// created: 2008-12-22 11:35:42
$dictionary["SV_SiteSurvey"]["fields"]["leads_sv_siurveyleads_ida"] = array (
  'name' => 'leads_sv_siurveyleads_ida',
  'type' => 'link',
  'relationship' => 'leads_sv_sitesurvey',
  'source' => 'non-db',
);
?>
