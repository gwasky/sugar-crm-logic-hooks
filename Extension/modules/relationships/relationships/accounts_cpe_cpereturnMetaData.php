<?php
// created: 2010-02-26 09:30:47
$dictionary["accounts_cpe_cpereturn"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'accounts_cpe_cpereturn' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'cpe_cpereturn',
      'rhs_table' => 'cpe_cpereturn',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_cpe_cpereturn_c',
      'join_key_lhs' => 'accounts_cprnaccounts_ida',
      'join_key_rhs' => 'accounts_cp_cpereturn_idb',
    ),
  ),
  'table' => 'accounts_cpe_cpereturn_c',
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
      'name' => 'accounts_cprnaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_cp_cpereturn_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_cpe_cpereturnspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_cpe_cpereturn_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_cprnaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_cpe_cpereturn_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_cp_cpereturn_idb',
      ),
    ),
  ),
);
?>
