<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2009-01-15 14:02:09
$layout_defs["tt_ServiceTrials"]["subpanel_setup"]["cases_tt_servicetrials"] = array (
  'order' => 100,
  'module' => 'Cases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CASES_TT_SERVICETRIALS_FROM_CASES_TITLE',
  'get_subpanel_data' => 'cases_tt_servicetrials',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'Cases',
      'mode' => 'MultiSelect',
    ),
  ),
);


?>