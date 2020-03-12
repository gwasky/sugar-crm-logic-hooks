<title>ctive</title><?php
$module_name = 'rs_Reports';
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
            'name' => 'dash_board_c',
			'customCode' => '<a href="wimaxreports/index.php" class="lbOn">View Dashboard</a>',
            'label' => 'LBL_DASH_BOARD',
          ),
          1 => 
          array (
            'name' => 'all_accounts',
			'customCode' => '<a href="wimaxreports/account_all_reports.php" class="lbOn">All Accounts In CRM</a>',
            'label' => 'LBL_ALL_ACCOUNTS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'account_status',
			'customCode' => '<a href="wimaxreports/account_active.php" class="lbOn">Check Account Status</a>',
            'label' => 'LBL_ACCOUNT_STATUS',
          ),
          1 => 
          array (
            'name' => 'activations',
			'customCode' => '<a href="wimaxreports/account_activation.php" class="lbOn">View Activetions</a>',
            'label' => 'LBL_ACTIVATIONS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'expiration',
			'customCode' => '<a href="wimaxreports/account_expired.php" class="lbOn">Check Expiry Report</a>',
            'label' => 'LBL_EXPIRATION',
          ),
          1 => 
          array (
            'name' => 'billed_accounts',
			'customCode' => '<a href="wimaxreports/account_reports.php" class="lbOn">Billed Accounts</a>',
            'label' => 'LBL_BILLED_ACCOUNTS',
          ),
        ),
      ),
      'lbl_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sitesurvey',
			'customCode' => '<a href="wimaxreports/site_survey_cods.php" class="lbOn">Survey Cordinates</a>',
            'label' => 'LBL_SITESURVEY',
          ),
          1 => NULL,
        ),
      ),
      'lbl_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'invoices',
            'label' => 'LBL_INVOICES',
          ),
          1 => 
          array (
            'name' => 'revenue',
            'label' => 'LBL_REVENUE',
          ),
        ),
      ),
    ),
  ),
);
?>
