<?php
// created: 2008-12-22 11:31:23
$dictionary["Lead"]["fields"]["qs_queues_leads"] = array (
  'name' => 'qs_queues_leads',
  'type' => 'link',
  'relationship' => 'qs_queues_leads',
  'source' => 'non-db',
);
?>
<?php
// created: 2008-12-22 11:31:23
$dictionary["Lead"]["fields"]["qs_queues_leads_name"] = array (
  'name' => 'qs_queues_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QS_QUEUES_LEADS_FROM_QS_QUEUES_TITLE',
  'save' => true,
  'id_name' => 'qs_queues_lsqs_queues_ida',
  'link' => 'qs_queues_leads',
  'table' => 'qs_queues',
  'module' => 'qs_Queues',
  'rname' => 'name',
);
?>
<?php
// created: 2008-12-22 11:31:23
$dictionary["Lead"]["fields"]["qs_queues_lsqs_queues_ida"] = array (
  'name' => 'qs_queues_lsqs_queues_ida',
  'type' => 'link',
  'relationship' => 'qs_queues_leads',
  'source' => 'non-db',
);
?>
<?php
// created: 2008-12-22 11:35:42
$dictionary["Lead"]["fields"]["leads_sv_sitesurvey"] = array (
  'name' => 'leads_sv_sitesurvey',
  'type' => 'link',
  'relationship' => 'leads_sv_sitesurvey',
  'source' => 'non-db',
);
?>
<?php
// created: 2008-12-22 14:26:37
$dictionary["Lead"]["fields"]["leads_accounts"] = array (
  'name' => 'leads_accounts',
  'type' => 'link',
  'relationship' => 'leads_accounts',
  'source' => 'non-db',
);
?>
<?php
// created: 2009-06-08 15:53:24
$dictionary["Lead"]["fields"]["leads_tr_trials"] = array (
  'name' => 'leads_tr_trials',
  'type' => 'link',
  'relationship' => 'leads_tr_trials',
  'source' => 'non-db',
);
?>
