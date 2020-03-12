<?php
// created: 2008-12-23 09:20:07
$dictionary["accounts_cn_contracts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'accounts_cn_contracts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'cn_Contracts',
      'rhs_table' => 'cn_contracts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_cn_contracts_c',
      'join_key_lhs' => 'accounts_cntsaccounts_ida',
      'join_key_rhs' => 'accounts_cn_contracts_idb',
    ),
  ),
  'table' => 'accounts_cn_contracts_c',
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
      'name' => 'accounts_cntsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_cn_contracts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_cn_contractsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_cn_contracts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_cntsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_cn_contracts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_cn_contracts_idb',
      ),
    ),
  ),
);
?>
