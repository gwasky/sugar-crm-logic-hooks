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
<?php
// created: 2008-12-22 14:26:37
$dictionary["Account"]["fields"]["leads_accounts"] = array (
  'name' => 'leads_accounts',
  'type' => 'link',
  'relationship' => 'leads_accounts',
  'source' => 'non-db',
);
?>
<?php
// created: 2008-12-22 14:26:37
$dictionary["Account"]["fields"]["leads_accounts_name"] = array (
  'name' => 'leads_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ACCOUNTS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_accountsleads_ida',
  'link' => 'leads_accounts',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
?>
<?php
// created: 2008-12-22 14:26:37
$dictionary["Account"]["fields"]["leads_accountsleads_ida"] = array (
  'name' => 'leads_accountsleads_ida',
  'type' => 'link',
  'relationship' => 'leads_accounts',
  'source' => 'non-db',
);
?>
<?php
// created: 2008-12-23 09:20:08
$dictionary["Account"]["fields"]["accounts_cn_contracts"] = array (
  'name' => 'accounts_cn_contracts',
  'type' => 'link',
  'relationship' => 'accounts_cn_contracts',
  'source' => 'non-db',
);
?>
<?php
// created: 2009-01-15 11:35:37
$dictionary["Account"]["fields"]["accounts_tt_servicetrials"] = array (
  'name' => 'accounts_tt_servicetrials',
  'type' => 'link',
  'relationship' => 'accounts_tt_servicetrials',
  'source' => 'non-db',
);
?>
