<?php
// created: 2008-12-22 11:32:22
$dictionary["qs_queues_activities_notes"] = array (
  'relationships' => 
  array (
    'qs_queues_activities_notes' => 
    array (
      'lhs_module' => 'qs_Queues',
      'lhs_table' => 'qs_queues',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'qs_Queues',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
?>
