<?php
$module_name = 'cn_Contracts';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'accounts_cn_contracts_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_ACCOUNTS_CN_CONTRACTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'type',
            'label' => 'LBL_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'expiry_date',
            'label' => 'LBL_EXPIRY_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_date',
            'label' => 'LBL_BILLING_DATE',
          ),
          1 => 
          array (
            'name' => 'expiration_notice',
            'label' => 'LBL_EXPIRATION_NOTICE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
      'lbl_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'web_hosting_start_c',
            'label' => 'LBL_WEB_HOSTING_START',
          ),
          1 => 
          array (
            'name' => 'web_hosting_end_date_c',
            'label' => 'LBL_WEB_HOSTING_END_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'web_hosting_status_c',
            'label' => 'LBL_WEB_HOSTING_STATUS',
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
            'name' => 'mail_hosting_start_date_c',
            'label' => 'LBL_MAIL_HOSTING_START_DATE',
          ),
          1 => 
          array (
            'name' => 'mail_hosting_end_date_c',
            'label' => 'LBL_MAIL_HOSTING_END_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mail_hosting_status_c',
            'label' => 'LBL_MAIL_HOSTING_STATUS',
          ),
          1 => NULL,
        ),
      ),
      'lbl_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'domain_hosting_start_date_c',
            'label' => 'LBL_DOMAIN_HOSTING_START_DATE',
          ),
          1 => 
          array (
            'name' => 'domain_hosting_end_date_c',
            'label' => 'LBL_DOMAIN_HOSTING_END_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'domain_hosting_status_c',
            'label' => 'LBL_DOMAIN_HOSTING_STATUS',
          ),
          1 => NULL,
        ),
      ),
      'lbl_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'domain_reg_start_date_c',
            'label' => 'LBL_DOMAIN_REG_START_DATE',
          ),
          1 => 
          array (
            'name' => 'domain_reg_end_date_c',
            'label' => 'LBL_DOMAIN_REG_END_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'domain_reg_status_c',
            'label' => 'LBL_DOMAIN_REG_STATUS',
          ),
          1 => NULL,
        ),
      ),
      'lbl_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'hire_purchase_start_c',
            'label' => 'LBL_HIRE_PURCHASE_START',
          ),
          1 => 
          array (
            'name' => 'hire_purchase_end_c',
            'label' => 'LBL_HIRE_PURCHASE_END',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'hire_purchase_status_c',
            'label' => 'LBL_HIRE_PURCHASE_STATUS',
          ),
          1 => NULL,
        ),
      ),
      'lbl_panel10' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fixed_line_start_date_c',
            'label' => 'LBL_FIXED_LINE_START_DATE',
          ),
          1 => 
          array (
            'name' => 'fixed_line_expiry_date_c',
            'label' => 'LBL_FIXED_LINE_EXPIRY_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fixed_line_status_c',
            'label' => 'LBL_FIXED_LINE_STATUS',
          ),
          1 => NULL,
        ),
      ),
    ),
  ),
);
?>
