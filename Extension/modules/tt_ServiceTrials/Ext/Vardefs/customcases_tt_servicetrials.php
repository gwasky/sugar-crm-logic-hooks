<?php
// created: 2009-01-15 11:35:37
$dictionary["tt_ServiceTrials"]["fields"]["accounts_tt_servicetrials"] = array (
  'name' => 'accounts_tt_servicetrials',
  'type' => 'link',
  'relationship' => 'accounts_tt_servicetrials',
  'source' => 'non-db',
);
?>
<?php
// created: 2009-01-15 11:35:37
$dictionary["tt_ServiceTrials"]["fields"]["accounts_tt_servicetrials_name"] = array (
  'name' => 'accounts_tt_servicetrials_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_TT_SERVICETRIALS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ttlsaccounts_ida',
  'link' => 'accounts_tt_servicetrials',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
?>
<?php
// created: 2009-01-15 11:35:37
$dictionary["tt_ServiceTrials"]["fields"]["accounts_ttlsaccounts_ida"] = array (
  'name' => 'accounts_ttlsaccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_tt_servicetrials',
  'source' => 'non-db',
);
?>
<?php
// created: 2009-01-15 14:02:09
$dictionary["tt_ServiceTrials"]["fields"]["cases_tt_servicetrials"] = array (
  'name' => 'cases_tt_servicetrials',
  'type' => 'link',
  'relationship' => 'cases_tt_servicetrials',
  'source' => 'non-db',
);
?>
