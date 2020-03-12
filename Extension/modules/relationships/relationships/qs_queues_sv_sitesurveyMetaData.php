<?php
// created: 2008-12-22 11:36:49
$dictionary["qs_queues_sv_sitesurvey"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'qs_queues_sv_sitesurvey' => 
    array (
      'lhs_module' => 'qs_Queues',
      'lhs_table' => 'qs_queues',
      'lhs_key' => 'id',
      'rhs_module' => 'SV_SiteSurvey',
      'rhs_table' => 'sv_sitesurvey',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'qs_queues_sv_sitesurvey_c',
      'join_key_lhs' => 'qs_queues_syqs_queues_ida',
      'join_key_rhs' => 'qs_queues_ssitesurvey_idb',
    ),
  ),
  'table' => 'qs_queues_sv_sitesurvey_c',
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
      'name' => 'qs_queues_syqs_queues_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'qs_queues_ssitesurvey_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'qs_queues_sv_sitesurveyspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'qs_queues_sv_sitesurvey_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'qs_queues_syqs_queues_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'qs_queues_sv_sitesurvey_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'qs_queues_ssitesurvey_idb',
      ),
    ),
  ),
);
?>
