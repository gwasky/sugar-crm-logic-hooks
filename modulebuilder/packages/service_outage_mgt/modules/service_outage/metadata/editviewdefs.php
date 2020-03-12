<?php
$module_name = 'outag_service_outage';
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
            'name' => 'service',
            'label' => 'LBL_SERVICE',
          ),
          1 => 
          array (
            'name' => 'status_of_outtage',
            'label' => 'LBL_STATUS_OF_OUTTAGE ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'expected_resolution_time',
            'label' => 'LBL_EXPECTED_RESOLUTION_TIME',
            'type' => 'Datetimecombo',
          ),
          1 => 
          array (
            'name' => 'area',
            'label' => 'LBL_AREA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => NULL,
        ),
      ),
    ),
  ),
);
?>
