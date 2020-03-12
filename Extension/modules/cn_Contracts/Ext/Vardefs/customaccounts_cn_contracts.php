<?php
// created: 2008-12-23 09:20:08
$dictionary["cn_Contracts"]["fields"]["accounts_cn_contracts"] = array (
  'name' => 'accounts_cn_contracts',
  'type' => 'link',
  'relationship' => 'accounts_cn_contracts',
  'source' => 'non-db',
);
?>
<?php
// created: 2008-12-23 09:20:08
$dictionary["cn_Contracts"]["fields"]["accounts_cn_contracts_name"] = array (
  'name' => 'accounts_cn_contracts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CN_CONTRACTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_cntsaccounts_ida',
  'link' => 'accounts_cn_contracts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
?>
<?php
// created: 2008-12-23 09:20:08
$dictionary["cn_Contracts"]["fields"]["accounts_cntsaccounts_ida"] = array (
  'name' => 'accounts_cntsaccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_cn_contracts',
  'source' => 'non-db',
);
?>
