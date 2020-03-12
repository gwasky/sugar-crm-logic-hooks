<?php
// created: 2008-12-23 09:20:07
$layout_defs["Accounts"]["subpanel_setup"]["accounts_cn_contracts"] = array (
  'order' => 100,
  'module' => 'cn_Contracts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_CN_CONTRACTS_FROM_CN_CONTRACTS_TITLE',
  'get_subpanel_data' => 'accounts_cn_contracts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'cn_Contracts',
      'mode' => 'MultiSelect',
    ),
  ),
);
?>
