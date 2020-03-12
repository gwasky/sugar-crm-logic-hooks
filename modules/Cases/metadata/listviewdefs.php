<?php
$listViewDefs ['Cases'] = 
array (
  'CASE_NUMBER' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_NUMBER',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '35%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'link' => true,
    'default' => true,
    'ACLTag' => 'ACCOUNT',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'CASE_TYPE_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CASE_TYPE',
    'default' => true,
  ),
  'SUBJECT_SETTING_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SUBJECT_SETTING',
    'default' => true,
  ),
  'QS_QUEUES_CASES_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_QS_QUEUES_CASES_FROM_QS_QUEUES_TITLE',
    'default' => true,
  ),
  'ROOT_CAUSE_C' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ROOT_CAUSE',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => true,
  ),
);
?>
