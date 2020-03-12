<?php
// created: 2008-12-22 11:35:42
$dictionary["leads_sv_sitesurvey"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'leads_sv_sitesurvey' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'SV_SiteSurvey',
      'rhs_table' => 'sv_sitesurvey',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'leads_sv_sitesurvey_c',
      'join_key_lhs' => 'leads_sv_siurveyleads_ida',
      'join_key_rhs' => 'leads_sv_sisitesurvey_idb',
    ),
  ),
  'table' => 'leads_sv_sitesurvey_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'leads_sv_siurveyleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'leads_sv_sisitesurvey_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'leads_sv_sitesurveyspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'leads_sv_sitesurvey_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'leads_sv_siurveyleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'leads_sv_sitesurvey_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'leads_sv_sisitesurvey_idb',
      ),
    ),
  ),
);
?>
