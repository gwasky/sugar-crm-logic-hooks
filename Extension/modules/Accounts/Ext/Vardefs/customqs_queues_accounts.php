<?php
// created: 2008-12-22 11:30:16
$dictionary["Account"]["fields"]["qs_queues_accounts"] = array (
  'name' => 'qs_queues_accounts',
  'type' => 'link',
  'relationship' => 'qs_queues_accounts',
  'source' => 'non-db',
);
?>
<?php
// created: 2008-12-22 11:30:16
$dictionary["Account"]["fields"]["qs_queues_accounts_name"] = array (
  'name' => 'qs_queues_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QS_QUEUES_ACCOUNTS_FROM_QS_QUEUES_TITLE',
  'save' => true,
  'id_name' => 'qs_queues_asqs_queues_ida',
  'link' => 'qs_queues_accounts',
  'table' => 'qs_queues',
  'module' => 'qs_Queues',
  'rname' => 'name',
);
?>
<?php
// created: 2008-12-22 11:30:16
$dictionary["Account"]["fields"]["qs_queues_asqs_queues_ida"] = array (
  'name' => 'qs_queues_asqs_queues_ida',
  'type' => 'link',
  'relationship' => 'qs_queues_accounts',
  'source' => 'non-db',
);
?>
