<?php
$viewdefs ['Leads'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
          2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'platform_c',
            'label' => 'LBL_PLATFORM',
          ),
          1 => 
          array (
            'name' => 'name_c',
            'label' => 'LBL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'label' => 'LBL_TITLE',
          ),
          1 => 
          array (
            'name' => 'sales_rep_c',
            'label' => 'LBL_SALES_REP',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'label' => 'LBL_OFFICE_PHONE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'technical_contact_person_c',
            'label' => 'LBL_TECHNICAL_CONTACT_PERSON',
          ),
          1 => 
          array (
            'name' => 'technical_contact_phone_c',
            'label' => 'LBL_TECHNICAL_CONTACT_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'billing_contact_person_c',
            'label' => 'LBL_BILLING_CONTACT_PERSON',
          ),
          1 => 
          array (
            'name' => 'billing_contact_phone_c',
            'label' => 'LBL_BILLING_CONTACT_PHONE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'customer_type_c',
            'label' => 'LBL_CUSTOMER_TYPE',
          ),
          1 => 
          array (
            'name' => 'lead_source',
            'label' => 'LBL_LEAD_SOURCE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'industry_c',
            'label' => 'LBL_INDUSTRY',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'email_c',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX_PHONE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'lead_source_description',
            'displayParams' => 
            array (
              'rows' => 4,
              'cols' => 40,
            ),
            'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'installation_address_1_c',
            'label' => 'LBL_INSTALLATION_ADDRESS_1',
          ),
          1 => 
          array (
            'name' => 'near_by_land_mark_c',
            'label' => 'LBL_NEAR_BY_LAND_MARK',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'installation_district_c',
            'label' => 'LBL_INSTALLATION_DISTRICT',
          ),
          1 => 
          array (
            'name' => 'installation_area_c',
            'label' => 'LBL_INSTALLATION_AREA',
          ),
        ),
      ),
      'lbl_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_add_plot_c',
            'label' => 'LBL_BILLING_ADD_PLOT',
          ),
          1 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_add_strt_c',
            'label' => 'LBL_BILLING_ADD_STRT',
          ),
          1 => 
          array (
            'name' => 'billing_add_town_c',
            'label' => 'LBL_BILLING_ADD_TOWN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_add_area_c',
            'label' => 'LBL_BILLING_ADD_AREA',
          ),
          1 => 
          array (
            'name' => 'billing_add_district_c',
            'label' => 'LBL_BILLING_ADD_DISTRICT',
          ),
        ),
      ),
      'lbl_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bank_c',
            'label' => 'LBL_BANK',
          ),
          1 => 
          array (
            'name' => 'branch_c',
            'label' => 'LBL_BRANCH',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'account_number_c',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
        ),
      ),
      'lbl_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'service_type_internet_c',
            'label' => 'LBL_SERVICE_TYPE_INTERNET',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'data_service_type_c',
            'label' => 'LBL_DATA_SERVICE_TYPE',
          ),
          1 => 
          array (
            'name' => 'shared_packages_c',
            'label' => 'LBL_SHARED_PACKAGES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cpe_type_c',
            'label' => 'LBL_CPE_TYPE',
          ),
          1 => 
          array (
            'name' => 'download_bandwidth_c',
            'label' => 'LBL_DOWNLOAD_BANDWIDTH',
          ),
        ),
      ),
      'lbl_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'package_type_domain_hosting_c',
            'label' => 'LBL_PACKAGE_TYPE_DOMAIN_HOSTING',
          ),
          1 => 
          array (
            'name' => 'no_domains_d_hosting_c',
            'label' => 'LBL_NO_DOMAINS_D_HOSTING',
          ),
        ),
      ),
      'lbl_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'package_domain_registration_c',
            'label' => 'LBL_PACKAGE_DOMAIN_REGISTRATION',
          ),
          1 => 
          array (
            'name' => 'no_domains_registration_c',
            'label' => 'LBL_NO_DOMAINS_REGISTRATION',
          ),
        ),
      ),
      'lbl_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'package_web_hosting_c',
            'label' => 'LBL_PACKAGE_WEB_HOSTING',
          ),
          1 => 
          array (
            'name' => 'no_domains_web_hosting_c',
            'label' => 'LBL_NO_DOMAINS_WEB_HOSTING',
          ),
        ),
      ),
      'lbl_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'package_mail_hosting_c',
            'label' => 'LBL_PACKAGE_MAIL_HOSTING',
          ),
          1 => 
          array (
            'name' => 'no_of_100mb_email_c',
            'label' => 'LBL_NO_OF_100MB_EMAIL',
          ),
        ),
      ),
      'lbl_description_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'qs_queues_leads_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_QS_QUEUES_LEADS_FROM_QS_QUEUES_TITLE',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'lead_rejection_reason_c',
            'label' => 'LBL_LEAD_REJECTION_REASON',
          ),
        ),
      ),
      'lbl_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'site_survey_comments_c',
            'label' => 'LBL_SITE_SURVEY_COMMENTS',
          ),
        ),
      ),
      'lbl_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'employee_name_c',
            'label' => 'LBL_EMPLOYEE_NAME',
          ),
          1 => 
          array (
            'name' => 'employee_sales_id_c',
            'label' => 'LBL_EMPLOYEE_SALES_ID',
          ),
        ),
      ),
      'lbl_panel10' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fixed_line_no_of_lines_c',
            'label' => 'LBL_FIXED_LINE_NO_OF_LINES ',
          ),
          1 => 
          array (
            'name' => 'fixed_line_service_c',
            'label' => 'LBL_FIXED_LINE_SERVICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fixed_line_number_range_c',
            'label' => 'LBL_FIXED_LINE_NUMBER_RANGE',
          ),
          1 => NULL,
        ),
      ),
    ),
  ),
);
?>
