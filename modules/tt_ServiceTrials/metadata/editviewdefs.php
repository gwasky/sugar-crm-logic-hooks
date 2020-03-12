<?php
$module_name = 'tt_ServiceTrials';
$_object_name = 'tt_servicetrials';
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
              'required' => true,
            ),
            'label' => 'LBL_SUBJECT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cases_tt_servicetrials_1_name',
            'label' => 'LBL_CASES_TT_SERVICETRIALS_1_FROM_CASES_TITLE',
          ),
          1 => 
          array (
            'name' => 'accounts_tt_servicetrials_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_ACCOUNTS_TT_SERVICETRIALS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'bandwidth',
            'label' => 'LBL_BANDWIDTH',
          ),
          1 => 
          array (
            'name' => 'trial_status_c',
            'label' => 'LBL_TRIAL_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'trial_description_c',
            'label' => 'LBL_TRIAL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
