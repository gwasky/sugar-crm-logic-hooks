<?php
// created: 2009-01-15 11:35:37
$dictionary["accounts_tt_servicetrials"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'accounts_tt_servicetrials' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'tt_ServiceTrials',
      'rhs_table' => 'tt_servicetrials',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_ttervicetrials_c',
      'join_key_lhs' => 'accounts_ttlsaccounts_ida',
      'join_key_rhs' => 'accounts_ttvicetrials_idb',
    ),
  ),
  'table' => 'accounts_ttervicetrials_c',
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
      'name' => 'accounts_ttlsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_ttvicetrials_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_tt_servicetrialsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_tt_servicetrials_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_ttlsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_tt_servicetrials_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_ttvicetrials_idb',
      ),
    ),
  ),
);
?>
