<?php
$module_name = 'SV_SiteSurvey';
$_object_name = 'sv_sitesurvey';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'sv_sitesurvey_number' => 
      array (
        'name' => 'sv_sitesurvey_number',
        'label' => 'LBL_NUMBER',
        'default' => true,
      ),
      'site_survey_status' => 
      array (
        'label' => 'LBL_SITE_SURVEY_STATUS',
        'width' => '10%',
        'name' => 'site_survey_status',
        'default' => true,
      ),
      'name' => 
      array (
        'name' => 'name',
        'label' => 'LBL_SUBJECT',
        'default' => true,
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
      'created_by_name' => 
      array (
        'width' => '10%',
        'label' => 'LBL_CREATED',
        'default' => true,
        'name' => 'created_by_name',
      ),
    ),
    'advanced_search' => 
    array (
      'sv_sitesurvey_number' => 
      array (
        'name' => 'sv_sitesurvey_number',
        'label' => 'LBL_NUMBER',
        'default' => true,
      ),
      'name' => 
      array (
        'name' => 'name',
        'label' => 'LBL_SUBJECT',
        'default' => true,
      ),
      'site_survey_status' => 
      array (
        'label' => 'LBL_SITE_SURVEY_STATUS',
        'width' => '10%',
        'name' => 'site_survey_status',
        'default' => true,
      ),
      'overall_test_result' => 
      array (
        'label' => 'LBL_OVERALL_TEST_RESULT',
        'width' => '10%',
        'name' => 'overall_test_result',
        'default' => true,
      ),
      'priority' => 
      array (
        'name' => 'priority',
        'label' => 'LBL_PRIORITY',
        'default' => true,
      ),
      'assigned_user_id' => 
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
        'default' => true,
      ),
      'date_entered' => 
      array (
        'width' => '10%',
        'label' => 'LBL_DATE_ENTERED',
        'default' => true,
        'name' => 'date_entered',
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
