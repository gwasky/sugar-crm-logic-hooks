<?php
// created: 2008-12-22 14:26:37
$dictionary["leads_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'leads_accounts' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'leads_accounts_c',
      'join_key_lhs' => 'leads_accountsleads_ida',
      'join_key_rhs' => 'leads_accoutsaccounts_idb',
    ),
  ),
  'table' => 'leads_accounts_c',
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
      'name' => 'leads_accountsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'leads_accoutsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'leads_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'leads_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'leads_accountsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'leads_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'leads_accoutsaccounts_idb',
      ),
    ),
  ),
);
?>
