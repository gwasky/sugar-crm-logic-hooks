<?php
// created: 2009-01-15 14:02:09
$dictionary["cases_tt_servicetrials"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cases_tt_servicetrials' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'tt_ServiceTrials',
      'rhs_table' => 'tt_servicetrials',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cases_tt_servicetrials_c',
      'join_key_lhs' => 'cases_tt_serialscases_ida',
      'join_key_rhs' => 'cases_tt_sevicetrials_idb',
    ),
  ),
  'table' => 'cases_tt_servicetrials_c',
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
      'name' => 'cases_tt_serialscases_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cases_tt_sevicetrials_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cases_tt_servicetrialsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cases_tt_servicetrials_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cases_tt_serialscases_ida',
        1 => 'cases_tt_sevicetrials_idb',
      ),
    ),
  ),
);
?>
