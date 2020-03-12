<?php
// created: 2009-03-19 13:51:26
$dictionary["wc_diagnosis"]["fields"]["accounts_wc_diagnosis"] = array (
  'name' => 'accounts_wc_diagnosis',
  'type' => 'link',
  'relationship' => 'accounts_wc_diagnosis',
  'source' => 'non-db',
);
?>
<?php
// created: 2009-03-19 13:51:26
$dictionary["wc_diagnosis"]["fields"]["accounts_wc_diagnosis_name"] = array (
  'name' => 'accounts_wc_diagnosis_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_WC_DIAGNOSIS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_wcisaccounts_ida',
  'link' => 'accounts_wc_diagnosis',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
?>
<?php
// created: 2009-03-19 13:51:26
$dictionary["wc_diagnosis"]["fields"]["accounts_wcisaccounts_ida"] = array (
  'name' => 'accounts_wcisaccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_wc_diagnosis',
  'source' => 'non-db',
);
?>
