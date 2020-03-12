<?php
// created: 2008-12-22 11:33:16
$dictionary["Case"]["fields"]["qs_queues_cases"] = array (
  'name' => 'qs_queues_cases',
  'type' => 'link',
  'relationship' => 'qs_queues_cases',
  'source' => 'non-db',
);
?>
<?php
// created: 2008-12-22 11:33:16
$dictionary["Case"]["fields"]["qs_queues_cases_name"] = array (
  'name' => 'qs_queues_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QS_QUEUES_CASES_FROM_QS_QUEUES_TITLE',
  'save' => true,
  'id_name' => 'qs_queues_csqs_queues_ida',
  'link' => 'qs_queues_cases',
  'table' => 'qs_queues',
  'module' => 'qs_Queues',
  'rname' => 'name',
);
?>
<?php
// created: 2008-12-22 11:33:16
$dictionary["Case"]["fields"]["qs_queues_csqs_queues_ida"] = array (
  'name' => 'qs_queues_csqs_queues_ida',
  'type' => 'link',
  'relationship' => 'qs_queues_cases',
  'source' => 'non-db',
);
?>
<?php
// created: 2009-01-15 14:02:09
$dictionary["Case"]["fields"]["cases_tt_servicetrials"] = array (
  'name' => 'cases_tt_servicetrials',
  'type' => 'link',
  'relationship' => 'cases_tt_servicetrials',
  'source' => 'non-db',
);
?>
<?php
// created: 2009-01-15 14:04:30
$dictionary["Case"]["fields"]["cases_tt_servicetrials_1"] = array (
  'name' => 'cases_tt_servicetrials_1',
  'type' => 'link',
  'relationship' => 'cases_tt_servicetrials_1',
  'source' => 'non-db',
);
?>
