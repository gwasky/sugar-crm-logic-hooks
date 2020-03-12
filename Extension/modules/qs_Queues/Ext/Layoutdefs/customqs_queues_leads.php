<?php
// created: 2008-12-22 11:30:16
$layout_defs["qs_Queues"]["subpanel_setup"]["qs_queues_accounts"] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_QS_QUEUES_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'qs_queues_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'Accounts',
      'mode' => 'MultiSelect',
    ),
  ),
);
?>
<?php
// created: 2008-12-22 11:31:22
$layout_defs["qs_Queues"]["subpanel_setup"]["qs_queues_leads"] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_QS_QUEUES_LEADS_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'qs_queues_leads',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'Accounts',
      'mode' => 'MultiSelect',
    ),
  ),
);
?>
