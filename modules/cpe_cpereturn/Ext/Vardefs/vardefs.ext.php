<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2010-02-26 09:30:47
$dictionary["cpe_cpereturn"]["fields"]["accounts_cpe_cpereturn"] = array (
  'name' => 'accounts_cpe_cpereturn',
  'type' => 'link',
  'relationship' => 'accounts_cpe_cpereturn',
  'source' => 'non-db',
);


// created: 2010-02-26 09:30:47
$dictionary["cpe_cpereturn"]["fields"]["accounts_cpe_cpereturn_name"] = array (
  'name' => 'accounts_cpe_cpereturn_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CPE_CPERETURN_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_cprnaccounts_ida',
  'link' => 'accounts_cpe_cpereturn',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);


// created: 2010-02-26 09:30:47
$dictionary["cpe_cpereturn"]["fields"]["accounts_cprnaccounts_ida"] = array (
  'name' => 'accounts_cprnaccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_cpe_cpereturn',
  'source' => 'non-db',
);


?>