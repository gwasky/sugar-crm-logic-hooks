<?php
// created: 2008-12-22 11:30:16
$dictionary["qs_queues_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'qs_queues_accounts' => 
    array (
      'lhs_module' => 'qs_Queues',
      'lhs_table' => 'qs_queues',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'qs_queues_accounts_c',
      'join_key_lhs' => 'qs_queues_asqs_queues_ida',
      'join_key_rhs' => 'qs_queues_atsaccounts_idb',
    ),
  ),
  'table' => 'qs_queues_accounts_c',
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
      'name' => 'qs_queues_asqs_queues_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'qs_queues_atsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'qs_queues_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'qs_queues_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'qs_queues_asqs_queues_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'qs_queues_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'qs_queues_atsaccounts_idb',
      ),
    ),
  ),
);
?>
