<?php
// created: 2008-12-22 11:34:15
$dictionary["Opportunity"]["fields"]["qs_queues_opportunities"] = array (
  'name' => 'qs_queues_opportunities',
  'type' => 'link',
  'relationship' => 'qs_queues_opportunities',
  'source' => 'non-db',
);
?>
<?php
// created: 2008-12-22 11:34:15
$dictionary["Opportunity"]["fields"]["qs_queues_opportunities_name"] = array (
  'name' => 'qs_queues_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QS_QUEUES_OPPORTUNITIES_FROM_QS_QUEUES_TITLE',
  'save' => true,
  'id_name' => 'qs_queues_osqs_queues_ida',
  'link' => 'qs_queues_opportunities',
  'table' => 'qs_queues',
  'module' => 'qs_Queues',
  'rname' => 'name',
);
?>
<?php
// created: 2008-12-22 11:34:15
$dictionary["Opportunity"]["fields"]["qs_queues_osqs_queues_ida"] = array (
  'name' => 'qs_queues_osqs_queues_ida',
  'type' => 'link',
  'relationship' => 'qs_queues_opportunities',
  'source' => 'non-db',
);
?>
