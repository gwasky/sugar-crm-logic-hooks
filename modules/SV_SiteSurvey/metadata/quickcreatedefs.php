<?php
$module_name = 'SV_SiteSurvey';
$_object_name = 'sv_sitesurvey';
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
      'DEFAULT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sv_sitesurvey_number',
            'type' => 'readonly',
            'label' => 'sv_sitesurvey_number',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'priority',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        2 => 
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
      ),
      'LINK TEST' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'signal_strength',
            'label' => 'LBL_SIGNAL_STRENGTH',
          ),
          1 => 
          array (
            'name' => 'cinr',
            'label' => 'LBL_CINR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'primary_base',
            'label' => 'LBL_PRIMARY_BASE',
          ),
          1 => 
          array (
            'name' => 'primary_base_loc_id',
            'label' => 'LBL_PRIMARY_BASE_LOC_ID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'secondary_base',
            'label' => 'LBL_SECONDARY_BASE',
          ),
          1 => 
          array (
            'name' => 'secondary_base_loc_id',
            'label' => 'LBL_SECONDARY_BASE_LOC_ID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'other_base',
            'label' => 'LBL_OTHER_BASE',
          ),
          1 => 
          array (
            'name' => 'other_base_loc_id',
            'label' => 'LBL_OTHER_BASE_LOC_ID',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'interferences',
            'label' => 'LBL_INTERFERENCES',
          ),
          1 => 
          array (
            'name' => 'terrain_type',
            'label' => 'LBL_TERRAIN_TYPE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'overall_test_result',
            'label' => 'LBL_OVERALL_TEST_RESULT',
          ),
          1 => NULL,
        ),
      ),
      'SITE DETAILS' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'coordinates',
            'label' => 'LBL_COORDINATES',
          ),
          1 => 
          array (
            'name' => 'brackets',
            'label' => 'LBL_BRACKETS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cable_length',
            'label' => 'LBL_CABLE_LENGTH',
          ),
          1 => 
          array (
            'name' => 'cable_type',
            'label' => 'LBL_CABLE_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'num_rj',
            'label' => 'LBL_NUM_RJ',
          ),
          1 => 
          array (
            'name' => 'num_rj11',
            'label' => 'LBL_NUM_RJ11',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'power_protected',
            'label' => 'LBL_POWER_PROTECTED',
          ),
          1 => 
          array (
            'name' => 'earth_cable',
            'label' => 'LBL_EARTH_CABLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'num_trunks',
            'label' => 'LBL_NUM_TRUNKS',
          ),
          1 => 
          array (
            'name' => 'num_conduits',
            'label' => 'LBL_NUM_CONDUITS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'num_cable_ties',
            'label' => 'LBL_NUM_CABLE_TIES',
          ),
          1 => 
          array (
            'name' => 'num_wall_clips',
            'label' => 'LBL_NUM_WALL_CLIPS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'cpe_mounting',
            'label' => 'LBL_CPE_MOUNTING',
          ),
          1 => 
          array (
            'name' => 'others',
            'label' => 'LBL_OTHERS',
          ),
        ),
      ),
      'SOLUTION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'num_pc_connected',
            'label' => 'LBL_NUM_PC_CONNECTED',
          ),
          1 => 
          array (
            'name' => 'bandwidth_request',
            'label' => 'LBL_BANDWIDTH_REQUEST',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cpe_type',
            'label' => 'LBL_CPE_TYPE',
          ),
          1 => 
          array (
            'name' => 'os_server',
            'label' => 'LBL_OS_SERVER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'num_voice_ports',
            'label' => 'LBL_NUM_VOICE_PORTS',
          ),
          1 => 
          array (
            'name' => 'site_survey_status',
            'label' => 'LBL_SITE_SURVEY_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'additional_req',
            'label' => 'LBL_ADDITIONAL_REQ',
          ),
          1 => 
          array (
            'name' => 'engineer_rec',
            'label' => 'LBL_ENGINEER_REC',
          ),
        ),
      ),
    ),
  ),
);
?>
