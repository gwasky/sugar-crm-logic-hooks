<?php
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
            'name' => 'all_accounts',
            'label' => 'LBL_ALL_ACCOUNTS',
          ),
          1 => 
          array (
            'name' => 'account_status',
            'label' => 'LBL_ACCOUNT_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billed_accounts',
            'label' => 'LBL_BILLED_ACCOUNTS',
          ),
          1 => 
          array (
            'name' => 'activations',
            'label' => 'LBL_ACTIVATIONS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'expiration',
            'label' => 'LBL_EXPIRATION',
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
            'name' => 'sitesurvey',
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
