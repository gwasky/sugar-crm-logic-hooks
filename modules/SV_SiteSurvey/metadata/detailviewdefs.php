<?php
$viewdefs ['SV_SiteSurvey'] = 
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
            'customCode' => '<input title="{$APP.LBL_DUP_MERGE}"                     accesskey="M"                     class="button"                     onclick="this.form.return_module.value=\'SV_SiteSurvey\';this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Step1\'; this.form.module.value=\'MergeRecords\';"                     name="button"                     value="{$APP.LBL_DUP_MERGE}"                     type="submit">',
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
      '' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sv_sitesurvey_number',
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'survey_area_c',
            'label' => 'LBL_SURVEY_AREA',
          ),
          1 => 
          array (
            'name' => 'survey_district_c',
            'label' => 'LBL_SURVEY_DISTRICT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
            'displayParams' => 
            array (
              'enableConnectors' => true,
              'module' => 'SV_SiteSurvey',
              'connectors' => 
              array (
                0 => 'ext_rest_linkedin',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'leads_sv_sitesurvey_name',
            'label' => 'LBL_LEADS_SV_SITESURVEY_FROM_LEADS_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'site_survey_nature_c',
            'label' => 'LBL_SITE_SURVEY_NATURE',
          ),
          1 => NULL,
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
            'name' => 'lattitude_c',
            'label' => 'LBL_LATTITUDE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'brackets',
            'label' => 'LBL_BRACKETS',
          ),
        ),
        2 => 
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
            'name' => 'num_rj',
            'label' => 'LBL_NUM_RJ',
          ),
          1 => 
          array (
            'name' => 'num_rj11',
            'label' => 'LBL_NUM_RJ11',
          ),
        ),
        5 => 
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
        6 => 
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
        7 => 
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
      'lbl_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fixed_line_current_pbx_c',
            'label' => 'LBL_FIXED_LINE_CURRENT_PBX',
          ),
          1 => 
          array (
            'name' => 'fixed_line_no_of_channels_c',
            'label' => 'LBL_FIXED_LINE_NO_OF_CHANNELS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fixed_line_closest_site_c',
            'label' => 'LBL_FIXED_LINE_CLOSEST_SITE',
          ),
          1 => NULL,
        ),
      ),
    ),
  ),
);
?>
