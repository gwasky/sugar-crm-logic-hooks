<?php
// created: 2008-12-19 17:37:47
$dictionary["sv_sitesurvey_leads"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sv_sitesurvey_leads' => 
    array (
      'lhs_module' => 'SV_SiteSurvey',
      'lhs_table' => 'sv_sitesurvey',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sv_sitesurvey_leads_c',
      'join_key_lhs' => 'sv_sitesurvsitesurvey_ida',
      'join_key_rhs' => 'sv_sitesurvleadsleads_idb',
    ),
  ),
  'table' => 'sv_sitesurvey_leads_c',
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
      'name' => 'sv_sitesurvsitesurvey_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sv_sitesurvleadsleads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sv_sitesurvey_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sv_sitesurvey_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sv_sitesurvsitesurvey_ida',
        1 => 'sv_sitesurvleadsleads_idb',
      ),
    ),
  ),
);
?>
