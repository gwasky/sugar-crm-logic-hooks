<?php
$module_name = 'tt_ServiceTrials';
$_object_name = 'tt_servicetrials';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'period_start',
            'label' => 'LBL_PERIOD_START',
          ),
          1 => 
          array (
            'name' => 'period_end',
            'label' => 'LBL_PERIOD_END',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'bandwidth',
            'label' => 'LBL_BANDWIDTH',
          ),
          1 => 
          array (
            'name' => 'priority',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'trial_description_c',
            'label' => 'LBL_TRIAL_DESCRIPTION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'resolution',
            'label' => 'LBL_RESOLUTION',
          ),
          1 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'work_log',
            'label' => 'LBL_WORK_LOG',
          ),
        ),
      ),
    ),
  ),
);
?>
