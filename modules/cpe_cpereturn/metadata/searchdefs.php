<?php
$module_name = 'cpe_cpereturn';
$_object_name = 'cpe_cpereturn';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'serial' => 
      array (
        'width' => '10%',
        'label' => 'LBL_SERIAL',
        'default' => true,
        'name' => 'serial',
      ),
      'cpe_condition' => 
      array (
        'width' => '10%',
        'label' => 'LBL_CPE_CONDITION',
        'default' => true,
        'name' => 'cpe_condition',
      ),
      'name' => 
      array (
        'name' => 'name',
        'label' => 'LBL_SUBJECT',
        'default' => true,
      ),
      'date_of_return' => 
      array (
        'width' => '10%',
        'label' => 'LBL_DATE_OF_RETURN',
        'default' => true,
        'name' => 'date_of_return',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'cpe_cpereturn_number',
      1 => 'name',
      2 => 'resolution',
      3 => 'status',
      4 => 'priority',
      5 => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
