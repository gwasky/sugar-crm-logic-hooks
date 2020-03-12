<?php
// created: 2009-03-19 13:51:26
$dictionary["accounts_wc_diagnosis"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'accounts_wc_diagnosis' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'wc_diagnosis',
      'rhs_table' => 'wc_diagnosis',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_wc_diagnosis_c',
      'join_key_lhs' => 'accounts_wcisaccounts_ida',
      'join_key_rhs' => 'accounts_wc_diagnosis_idb',
    ),
  ),
  'table' => 'accounts_wc_diagnosis_c',
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
      'name' => 'accounts_wcisaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_wc_diagnosis_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_wc_diagnosisspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_wc_diagnosis_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_wcisaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_wc_diagnosis_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_wc_diagnosis_idb',
      ),
    ),
  ),
);
?>
