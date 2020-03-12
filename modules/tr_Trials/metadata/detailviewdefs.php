<?php
$module_name = 'tr_Trials';
$_object_name = 'tr_trials';
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
            'customCode' => '<input title="{$APP.LBL_DUP_MERGE}"                     accesskey="M"                     class="button"                     onclick="this.form.return_module.value=\'tr_Trials\';this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Step1\'; this.form.module.value=\'MergeRecords\';"                     name="button"                     value="{$APP.LBL_DUP_MERGE}"                     type="submit">',
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
            'name' => 'leads_tr_trials_name',
            'label' => 'LBL_LEADS_TR_TRIALS_FROM_LEADS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'approval_status_c',
            'label' => 'LBL_APPROVAL_STATUS',
          ),
          1 => 
          array (
            'name' => 'trial_status_c',
            'label' => 'LBL_TRIAL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'username_c',
            'label' => 'LBL_USERNAME',
          ),
          1 => 
          array (
            'name' => 'testing_bandwidth',
            'label' => 'LBL_TESTING_BANDWIDTH',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'number_days_c',
            'label' => 'LBL_NUMBER_DAYS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'trial_start_c',
            'label' => 'LBL_TRIAL_START',
          ),
          1 => 
          array (
            'name' => 'trial_end_c',
            'label' => 'LBL_TRIAL_END',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        6 => 
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
        7 => 
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
      ),
    ),
  ),
);
?>
