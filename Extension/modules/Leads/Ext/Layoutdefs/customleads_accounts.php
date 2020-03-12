<?php
// created: 2008-12-22 11:35:42
$layout_defs["Leads"]["subpanel_setup"]["leads_sv_sitesurvey"] = array (
  'order' => 100,
  'module' => 'SV_SiteSurvey',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_SV_SITESURVEY_FROM_SV_SITESURVEY_TITLE',
  'get_subpanel_data' => 'leads_sv_sitesurvey',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'SV_SiteSurvey',
      'mode' => 'MultiSelect',
    ),
  ),
);
?>
<?php
// created: 2008-12-22 14:26:37
$layout_defs["Leads"]["subpanel_setup"]["leads_accounts"] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'leads_accounts',
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
