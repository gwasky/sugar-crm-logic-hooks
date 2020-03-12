<?php
$module_name = 'cpe_cpereturn';
$_object_name = 'cpe_cpereturn';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'size' => 60,
            ),
            'label' => 'LBL_SUBJECT',
          ),
          1 => 
          array (
            'name' => 'accounts_cpe_cpereturn_name',
            'label' => 'LBL_ACCOUNTS_CPE_CPERETURN_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cpe_type_c',
            'label' => 'LBL_CPE_TYPE',
          ),
          1 => 
          array (
            'name' => 'date_of_return',
            'label' => 'LBL_DATE_OF_RETURN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'serial',
            'label' => 'LBL_SERIAL',
          ),
          1 => 
          array (
            'name' => 'mac_address',
            'label' => 'LBL_MAC_ADDRESS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
          1 => NULL,
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cpe_condition',
            'label' => 'LBL_CPE_CONDITION',
          ),
          1 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
