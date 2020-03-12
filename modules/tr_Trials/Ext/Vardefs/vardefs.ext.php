<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2009-06-08 15:52:24
$dictionary["tr_Trials"]["fields"]["qs_queues_tr_trials"] = array (
  'name' => 'qs_queues_tr_trials',
  'type' => 'link',
  'relationship' => 'qs_queues_tr_trials',
  'source' => 'non-db',
);


// created: 2009-06-08 15:52:24
$dictionary["tr_Trials"]["fields"]["qs_queues_tr_trials_name"] = array (
  'name' => 'qs_queues_tr_trials_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QS_QUEUES_TR_TRIALS_FROM_QS_QUEUES_TITLE',
  'save' => true,
  'id_name' => 'qs_queues_tsqs_queues_ida',
  'link' => 'qs_queues_tr_trials',
  'table' => 'qs_queues',
  'module' => 'qs_Queues',
  'rname' => 'name',
);


// created: 2009-06-08 15:52:24
$dictionary["tr_Trials"]["fields"]["qs_queues_tsqs_queues_ida"] = array (
  'name' => 'qs_queues_tsqs_queues_ida',
  'type' => 'link',
  'relationship' => 'qs_queues_tr_trials',
  'source' => 'non-db',
);



// created: 2009-06-08 15:52:24
$dictionary["tr_Trials"]["fields"]["qs_queues_tr_trials"] = array (
  'name' => 'qs_queues_tr_trials',
  'type' => 'link',
  'relationship' => 'qs_queues_tr_trials',
  'source' => 'non-db',
);


// created: 2009-06-08 15:52:24
$dictionary["tr_Trials"]["fields"]["qs_queues_tr_trials_name"] = array (
  'name' => 'qs_queues_tr_trials_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QS_QUEUES_TR_TRIALS_FROM_QS_QUEUES_TITLE',
  'save' => true,
  'id_name' => 'qs_queues_tsqs_queues_ida',
  'link' => 'qs_queues_tr_trials',
  'table' => 'qs_queues',
  'module' => 'qs_Queues',
  'rname' => 'name',
);


// created: 2009-06-08 15:52:24
$dictionary["tr_Trials"]["fields"]["qs_queues_tsqs_queues_ida"] = array (
  'name' => 'qs_queues_tsqs_queues_ida',
  'type' => 'link',
  'relationship' => 'qs_queues_tr_trials',
  'source' => 'non-db',
);


// created: 2009-06-08 15:53:24
$dictionary["tr_Trials"]["fields"]["leads_tr_trials"] = array (
  'name' => 'leads_tr_trials',
  'type' => 'link',
  'relationship' => 'leads_tr_trials',
  'source' => 'non-db',
);


// created: 2009-06-08 15:53:24
$dictionary["tr_Trials"]["fields"]["leads_tr_trials_name"] = array (
  'name' => 'leads_tr_trials_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_TR_TRIALS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_tr_trialsleads_ida',
  'link' => 'leads_tr_trials',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);


// created: 2009-06-08 15:53:24
$dictionary["tr_Trials"]["fields"]["leads_tr_trialsleads_ida"] = array (
  'name' => 'leads_tr_trialsleads_ida',
  'type' => 'link',
  'relationship' => 'leads_tr_trials',
  'source' => 'non-db',
);


?>