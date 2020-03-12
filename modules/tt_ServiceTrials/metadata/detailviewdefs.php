<?php
$module_name = 'tt_ServiceTrials';
$_object_name = 'tt_servicetrials';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 
          array (
            'customCode' => '<input title="{$APP.LBL_DUP_MERGE}"                     accesskey="M"                     class="button"                     onclick="this.form.return_module.value=\'tt_ServiceTrials\';this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Step1\'; this.form.module.value=\'MergeRecords\';"                     name="button"                     value="{$APP.LBL_DUP_MERGE}"                     type="submit">',
          ),
        ),
      ),
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
            'label' => 'LBL_SUBJECT',
          ),
          1 => 
          array (
            'name' => 'trial_status_c',
            'label' => 'LBL_TRIAL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'accounts_tt_servicetrials_name',
            'label' => 'LBL_ACCOUNTS_TT_SERVICETRIALS_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'cases_tt_servicetrials_1_name',
            'label' => 'LBL_CASES_TT_SERVICETRIALS_1_FROM_CASES_TITLE',
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
            'name' => 'priority',
            'label' => 'LBL_PRIORITY',
          ),
          1 => 
          array (
            'name' => 'bandwidth',
            'label' => 'LBL_BANDWIDTH',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        6 => 
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
