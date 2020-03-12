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
            'name' => 'mocn_c',
            'label' => 'LBL_MOCN',
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
            'name' => 'qs_queues_accounts_name',
            'label' => 'LBL_QS_QUEUES_ACCOUNTS_FROM_QS_QUEUES_TITLE',
          ),
          1 => 
          array (
            'name' => 'platform_c',
            'label' => 'LBL_PLATFORM',
          ),
        ),
        3 => 
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
        4 => 
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
            'name' => 'email_c',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'invoice_by_email_c',
            'label' => 'LBL_INVOICE_BY_EMAIL',
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
            'name' => 'acc_c',
            'label' => 'LBL_ACC',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'customer_type_c',
            'label' => 'LBL_CUSTOMER_TYPE',
          ),
          1 => 
          array (
            'name' => 'service_type_internet_c',
            'label' => 'LBL_SERVICE_TYPE_INTERNET',
          ),
        ),
        9 => 
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
        10 => 
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
        11 => 
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
        12 => 
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
        13 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'selected_billing_currency_c',
            'label' => 'LBL_SELECTED_BILLING_CURRENCY',
          ),
        ),
        14 => 
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
        15 => 
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
        16 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'related_fields_c',
            'label' => 'LBL_RELATED_FIELDS',
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
          1 => 
          array (
            'name' => 'invoicing_type_c',
            'label' => 'LBL_INVOICING_TYPE',
          ),
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
            'name' => 'plot_c',
            'label' => 'LBL_PLOT',
          ),
          1 => 
          array (
            'name' => 'street_road_c',
            'label' => 'LBL_STREET_ROAD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'town_c',
            'label' => 'LBL_TOWN',
          ),
          1 => 
          array (
            'name' => 'area_c',
            'label' => 'LBL_AREA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'district_c',
            'label' => 'LBL_DISTRICT',
          ),
        ),
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'box_num_c',
            'label' => 'LBL_BOX_NUM',
          ),
          1 => NULL,
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
        ),
      ),
      'INTERNET DETAILS' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'data_service_type_c',
            'label' => 'LBL_DATA_SERVICE_TYPE',
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
            'name' => 'apn_name_c',
            'label' => 'LBL_APN_NAME',
          ),
          1 => 
          array (
            'name' => 'num_sims_c',
            'label' => 'LBL_NUM_SIMS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ip_apn_c',
            'label' => 'LBL_IP_APN',
          ),
          1 => NULL,
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'download_bandwidth_c',
            'label' => 'LBL_DOWNLOAD_BANDWIDTH',
          ),
          1 => 
          array (
            'name' => 'whole_sale_type_c',
            'label' => 'LBL_WHOLE_SALE_TYPE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'bandwidth_count_1_c',
            'label' => 'LBL_BANDWIDTH_COUNT_1',
          ),
          1 => 
          array (
            'name' => 'bandwidth_discount_c',
            'label' => 'LBL_BANDWIDTH_DISCOUNT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'bandwidth_package_count_c',
            'label' => 'LBL_BANDWIDTH_PACKAGE_COUNT',
          ),
          1 => 
          array (
            'name' => 'bandwidth_package_discount_c',
            'label' => 'LBL_BANDWIDTH_PACKAGE_DISCOUNT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'maintenance_option_c',
            'label' => 'LBL_MAINTENANCE_OPTION',
          ),
          1 => 
          array (
            'name' => 'maintenance_option_count_c',
            'label' => 'LBL_MAINTENANCE_OPTION_COUNT',
          ),
        ),
      ),
      'lbl_panel14' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'hire_purchase_product_c',
            'label' => 'LBL_HIRE_PURCHASE_PRODUCT',
          ),
          1 => 
          array (
            'name' => 'hire_purchase_count_c',
            'label' => 'LBL_HIRE_PURCHASE_COUNT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'hire_purchase_discount_c',
            'label' => 'LBL_HIRE_PURCHASE_DISCOUNT',
          ),
          1 => 
          array (
            'name' => 'hire_purchase_details_c',
            'label' => 'LBL_HIRE_PURCHASE_DETAILS',
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
          1 => 
          array (
            'name' => 'site_c',
            'label' => 'LBL_SITE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'serving_site_c',
            'label' => 'LBL_SERVING_SITE',
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'ip_address_c',
            'label' => 'LBL_IP_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'primary_base_c',
            'label' => 'LBL_PRIMARY_BASE',
          ),
        ),
      ),
      'lbl_panel8' => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'no_months_domain_hosting_c',
            'label' => 'LBL_NO_MONTHS_DOMAIN_HOSTING',
          ),
          1 => 
          array (
            'name' => 'discount_domain_hosting_c',
            'label' => 'LBL_DISCOUNT_DOMAIN_HOSTING',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description_domain_hosting_c',
            'label' => 'LBL_DESCRIPTION_DOMAIN_HOSTING',
          ),
          1 => 
          array (
            'name' => 'domain_hosting_status_c',
            'label' => 'Status',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'domain_hosting_start_date_c',
            'label' => 'Start Date',
          ),
          1 => 
          array (
            'name' => 'domain_hosting_end_date_c',
            'label' => 'End Date',
          ),
        ),
      ),
      'lbl_panel9' => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'years_domain_registration_c',
            'label' => 'LBL_YEARS_DOMAIN_REGISTRATION',
          ),
          1 => 
          array (
            'name' => 'discount_domain_registration_c',
            'label' => 'LBL_DISCOUNT_DOMAIN_REGISTRATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description_domain_registratio_c',
            'label' => 'LBL_DESCRIPTION_DOMAIN_REGISTRATIO',
          ),
          1 => 
          array (
            'name' => 'domain_reg_status_c',
            'label' => 'Status',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'domain_reg_start_date_c',
            'label' => 'start Date',
          ),
          1 => 
          array (
            'name' => 'domain_reg_end_date_c',
            'label' => 'End Date',
          ),
        ),
      ),
      'lbl_panel10' => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'years_web_hosting_c',
            'label' => 'LBL_YEARS_WEB_HOSTING',
          ),
          1 => 
          array (
            'name' => 'discount_web_hosting_c',
            'label' => 'LBL_DISCOUNT_WEB_HOSTING',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description_web_hosting_c',
            'label' => 'LBL_DESCRIPTION_WEB_HOSTING',
          ),
          1 => 
          array (
            'name' => 'web_hosting_status_c',
            'label' => 'Status',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'web_hosting_start_c',
            'label' => 'Start Date',
          ),
          1 => 
          array (
            'name' => 'web_hosting_end_date_c',
            'label' => 'End Date',
          ),
        ),
      ),
      'lbl_panel11' => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'no_months_mail_hosting_c',
            'label' => 'LBL_NO_MONTHS_MAIL_HOSTING',
          ),
          1 => 
          array (
            'name' => 'discount_mail_hosting_c',
            'label' => 'LBL_DISCOUNT_MAIL_HOSTING',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'desctiption_mail_hosting_c',
            'label' => 'LBL_DESCTIPTION_MAIL_HOSTING',
          ),
          1 => 
          array (
            'name' => 'mail_hosting_status_c',
            'label' => 'Status',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'mail_hosting_start_date_c',
            'label' => 'Start Date',
          ),
          1 => 
          array (
            'name' => 'mail_hosting_end_date_c',
            'label' => 'End Date',
          ),
        ),
      ),
      'lbl_panel12' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'installaion_comments_c',
            'label' => 'LBL_INSTALLAION_COMMENTS',
          ),
          1 => NULL,
        ),
      ),
      'lbl_panel13' => 
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
    ),
  ),
);
?>
