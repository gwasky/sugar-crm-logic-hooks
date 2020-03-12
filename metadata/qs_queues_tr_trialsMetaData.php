<?php
// created: 2009-06-08 15:52:24
$dictionary["qs_queues_tr_trials"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'qs_queues_tr_trials' => 
    array (
      'lhs_module' => 'qs_Queues',
      'lhs_table' => 'qs_queues',
      'lhs_key' => 'id',
      'rhs_module' => 'tr_Trials',
      'rhs_table' => 'tr_trials',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'qs_queues_tr_trials_c',
      'join_key_lhs' => 'qs_queues_tsqs_queues_ida',
      'join_key_rhs' => 'qs_queues_tstr_trials_idb',
    ),
  ),
  'table' => 'qs_queues_tr_trials_c',
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
      'name' => 'qs_queues_tsqs_queues_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'qs_queues_tstr_trials_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'qs_queues_tr_trialsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'qs_queues_tr_trials_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'qs_queues_tsqs_queues_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'qs_queues_tr_trials_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'qs_queues_tstr_trials_idb',
      ),
    ),
  ),
);
?>
