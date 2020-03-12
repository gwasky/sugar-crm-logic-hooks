<?php
$viewdefs ['Accounts'] = 
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
          3 => 'FIND_DUPLICATES',
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
            'name' => 'crn_c',
            'label' => 'LBL_CRN',
          ),
          1 => 
          array (
            'name' => 'acc_c',
            'label' => 'LBL_ACC',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sales_rep_c',
            'label' => 'LBL_SALES_REP',
          ),
          1 => 
          array (
            'name' => 'mem_id_c',
            'label' => 'LBL_MEM_ID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'wsaf_c',
            'label' => 'LBL_WSAF',
          ),
          1 => 
          array (
            'name' => 'status',
            'label' => 'LBL_ACTIVATION_STATUS',
          ),
        ),
         3 => 
      array (
          0 => 
          array (
            'name' => 'start_date',
            'label' => 'Start Date',
          ),
          1 => 
          array (
            'name' => 'expiry_date',
            'label' => 'Expiry Date',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'qs_queues_accounts_name',
            'label' => 'LBL_QS_QUEUES_ACCOUNTS_FROM_QS_QUEUES_TITLE',
          ),
          1 => 
          array (
            'name' => 'viewstatement_c',
			'customCode'=> '<a href="custom/modules/Accounts/accountstatement2.php?mem_id_c={$fields.mem_id_c.value}&&start_date={$fields.start_date.value}&&end_date={$fields.end_date.value}" class="lbOn">View Account Statement</a>',
            'label' => 'LBL_VIEWSTATEMENT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_MEMBER_OF',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'mobile_phone_c',
            'label' => 'LBL_MOBILE_PHONE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'label' => 'LBL_OTHER_PHONE',
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
            'name' => 'email1',
            'label' => 'LBL_EMAIL',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'customer_type_c',
            'label' => 'LBL_CUSTOMER_TYPE',
          ),
          1 => NULL,
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'industry',
            'label' => 'LBL_INDUSTRY',
          ),
          1 => 
          array (
            'name' => 'service_request_c',
            'label' => 'LBL_SERVICE_REQUEST',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'contact_person_c',
            'label' => 'LBL_CONTACT_PERSON',
          ),
          1 => 
          array (
            'name' => 'contact_person_phone_c',
            'label' => 'LBL_CONTACT_PERSON_PHONE',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'leads_accounts_name',
            'label' => 'LBL_LEADS_ACCOUNTS_FROM_LEADS_TITLE',
          ),
        ),
      ),
      'lbl_panel2' => 
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
      'lbl_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_postalcode',
            'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'billing_address_state',
            'label' => 'LBL_BILLING_ADDRESS_STATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_country',
            'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'billing_address_city',
            'label' => 'LBL_BILLING_ADDRESS_CITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'area_c',
            'label' => 'LBL_AREA',
          ),
          1 => 
          array (
            'name' => 'box_num_c',
            'label' => 'LBL_BOX_NUM',
          ),
        ),
      ),
      'VOICE DETAILS' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'service_type_voice_c',
            'label' => 'LBL_SERVICE_TYPE_VOICE',
          ),
          1 => 
          array (
            'name' => 'idd_c',
            'label' => 'LBL_IDD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'voip_c',
            'label' => 'LBL_VOIP',
          ),
          1 => 
          array (
            'name' => 'voip_lines_c',
            'label' => 'LBL_VOIP_LINES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'voice_mail_c',
            'label' => 'LBL_VOICE_MAIL',
          ),
          1 => 
          array (
            'name' => 'ip_centrex_c',
            'label' => 'LBL_IP_CENTREX',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'media_x_c',
            'label' => 'LBL_MEDIA_X',
          ),
          1 => NULL,
        ),
      ),
      'INTERNET DETAILS' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'service_type_internet_c',
            'label' => 'LBL_SERVICE_TYPE_INTERNET',
          ),
          1 => 
          array (
            'name' => 'cpe_type_c',
            'label' => 'LBL_CPE_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'shared_packages_c',
            'label' => 'LBL_SHARED_PACKAGES',
          ),
          1 => 
          array (
            'name' => 'leasedline_c',
            'label' => 'Leased Line',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'download_bandwidth_c',
            'label' => 'LBL_DOWNLOAD_BANDWIDTH',
          ),
          1 => 
          array (
            'name' => 'access_type_c',
            'label' => 'LBL_ACCESS_TYPE',
          ),
        ),
      ),
      'BANK DETAILS' => 
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
          1 => NULL,
        ),
      ),
      'DOCUMENT CHECKLIST' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'company_id_c',
            'label' => 'LBL_COMPANY_ID',
          ),
          1 => 
          array (
            'name' => 'passport_c',
            'label' => 'LBL_PASSPORT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'voters_card_c',
            'label' => 'LBL_VOTERS_CARD',
          ),
          1 => 
          array (
            'name' => 'drivers_liscence_c',
            'label' => 'LBL_DRIVERS_LISCENCE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cancelled_check_c',
            'label' => 'LBL_CANCELLED_CHECK',
          ),
          1 => 
          array (
            'name' => 'bank_statement_c',
            'label' => 'LBL_BANK_STATEMENT',
          ),
        ),
      ),
      'lbl_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mac_address_c',
            'label' => 'LBL_MAC_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'serial_num_c',
            'label' => 'LBL_SERIAL_NUM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'access_points_c',
            'label' => 'LBL_ACCESS_POINTS',
          ),
          1 => NULL,
        ),
      ),
      'lbl_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'preferred_username_c',
            'label' => 'LBL_PREFERRED_USERNAME',
          ),
          1 => 
          array (
            'name' => 'preferred_password_c',
            'label' => 'LBL_PREFERRED_PASSWORD',
          ),
        ),
      ),
    ),
  ),
);
?>
