<?php
$viewdefs ['Cases'] = 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Cases/Case.js',
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
              'size' => 75,
              'required' => true,
            ),
            'label' => 'LBL_SUBJECT',
          ),
          1 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'calling_num_c',
            'label' => 'LBL_CALLING_NUM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'case_type_c',
            'label' => 'LBL_CASE_TYPE',
            'displayParams' => 
            array (
              'javascript' => 'onchange="initData();"',
            ),
          ),
          1 => 
          array (
            'name' => 'subject_setting_c',
            'label' => 'LBL_SUBJECT_SETTING',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'priority',
            'label' => 'LBL_PRIORITY',
          ),
          1 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'displayParams' => 
            array (
              'rows' => '8',
              'cols' => '80',
            ),
            'nl2br' => true,
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'resolution',
            'displayParams' => 
            array (
              'rows' => '5',
              'cols' => '80',
            ),
            'nl2br' => true,
            'label' => 'LBL_RESOLUTION',
          ),
          1 => 
          array (
            'name' => 'casereolvedon_c',
            'label' => 'LBL_CASEREOLVEDON',
          ),
        ),
        6 => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'root_cause_c',
            'label' => 'LBL_ROOT_CAUSE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'qs_queues_cases_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_QS_QUEUES_CASES_FROM_QS_QUEUES_TITLE',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
