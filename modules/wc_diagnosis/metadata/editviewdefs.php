<?php
$module_name = 'wc_diagnosis';
$_object_name = 'wc_diagnosis';
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
            'name' => 'accounts_wc_diagnosis_name',
            'label' => 'LBL_ACCOUNTS_WC_DIAGNOSIS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'problem_type',
            'label' => 'LBL_PROBLEM_TYPE',
          ),
          1 => 
          array (
            'name' => 'problem',
            'label' => 'LBL_PROBLEM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'action_taken',
            'label' => 'LBL_ACTION_TAKEN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'resolve_c',
            'label' => 'LBL_RESOLVE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'coments',
            'label' => 'LBL_COMENTS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
        ),
      ),
    ),
  ),
);
?>
