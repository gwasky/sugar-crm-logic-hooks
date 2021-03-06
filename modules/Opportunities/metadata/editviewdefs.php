<?php
$viewdefs ['Opportunities'] = 
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
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
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_OPPORTUNITY_NAME',
          ),
          1 => 
          array (
            'name' => 'currency_id',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
          1 => 
          array (
            'name' => 'amount',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_AMOUNT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'opportunity_type',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'date_closed',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_DATE_CLOSED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'lead_source',
            'label' => 'LBL_LEAD_SOURCE',
          ),
          1 => 
          array (
            'name' => 'next_step',
            'label' => 'LBL_NEXT_STEP',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sales_stage',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_SALES_STAGE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'probability',
            'label' => 'LBL_PROBABILITY',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'qs_queues_opportunities_name',
          ),
        ),
      ),
    ),
  ),
);
?>
