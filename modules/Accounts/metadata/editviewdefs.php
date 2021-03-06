<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sales_rep_c',
            'label' => 'LBL_SALES_REP',
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
            'name' => 'wsaf_c',
            'label' => 'LBL_WSAF',
          ),
          1 => 
          array (
            'name' => 'platform_c',
            'label' => 'LBL_PLATFORM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'acc_c',
            'label' => 'LBL_ACC',
          ),
          1 => 
          array (
            'name' => 'mem_id_c',
            'label' => 'LBL_MEM_ID',
          ),
        ),
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'customer_type_c',
            'label' => 'LBL_CUSTOMER_TYPE',
          ),
          1 => 
          array (
            'name' => 'employees',
            'label' => 'LBL_EMPLOYEES',
          ),
        ),
        5 => 
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
        6 => 
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
        7 => 
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
        8 => 
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
        9 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_PHONE_FAX',
          ),
          1 => 
          array (
            'name' => 'industry',
            'label' => 'LBL_INDUSTRY',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'service_request_c',
            'label' => 'LBL_SERVICE_REQUEST',
          ),
          1 => 
          array (
            'name' => 'service_type_internet_c',
            'label' => 'LBL_SERVICE_TYPE_INTERNET',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'leads_accounts_name',
            'label' => 'LBL_LEADS_ACCOUNTS_FROM_LEADS_TITLE',
          ),
          1 => 
          array (
            'name' => 'selected_billing_currency_c',
            'label' => 'LBL_SELECTED_BILLING_CURRENCY',
          ),
        ),
      ),
      'lbl_panel1' => 
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
            'name' => 'invoicing_type_c',
            'label' => 'LBL_INVOICING_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'street_road_c',
            'label' => 'LBL_STREET_ROAD',
          ),
          1 => 
          array (
            'name' => 'town_c',
            'label' => 'LBL_TOWN',
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
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_add_plot_c',
            'label' => 'LBL_BILLING_ADD_PLOT',
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
      'lbl_panel2' => 
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
      'lbl_panel3' => 
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
            'label' => 'LBL_LEASEDLINE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'num_sims_c',
            'label' => 'LBL_NUM_SIMS',
          ),
          1 => NULL,
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
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
      'lbl_panel4' => 
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
          1 => 
          array (
            'name' => 'bank_statement_c',
            'label' => 'LBL_BANK_STATEMENT',
          ),
        ),
      ),
      'lbl_panel5' => 
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
          1 => NULL,
        ),
      ),
      'lbl_panel6' => 
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
      'lbl_description_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'displayParams' => 
            array (
              'cols' => 80,
              'rows' => 6,
            ),
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'qs_queues_accounts_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_QS_QUEUES_ACCOUNTS_FROM_QS_QUEUES_TITLE',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
      'lbl_panel7' => 
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'apn_name_c',
            'label' => 'LBL_APN_NAME',
          ),
          1 => 
          array (
            'name' => 'ip_apn_c',
            'label' => 'LBL_IP_APN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'frn_net_access_c',
            'label' => 'LBL_FRN_NET_ACCESS',
          ),
        ),
      ),
      'lbl_panel13' => 
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
      'lbl_panel14' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fixed_line_no_of_lines_c',
            'label' => 'LBL_FIXED_LINE_NO_OF_LINES',
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
          1 => 
          array (
            'name' => 'fixed_line_link_id_c',
            'label' => 'LBL_FIXED_LINE_LINK_ID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fixed_line_trunk_id_c',
            'label' => 'LBL_FIXED_LINE_TRUNK_ID',
          ),
          1 => NULL,
        ),
      ),
    ),
  ),
);
?>
