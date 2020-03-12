<?php
 if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
  $hook_array = array();
// position, file, function
$hook_array['before_save'] = array();
$hook_array['before_save'][] = Array(
1, 'OutageService', 'custom/BusinessLogic/service_outage/ServiceOutage.php','OutageClass', 'name');
$hook_array['before_save'][] = Array(
1, 'OutageService2', 'custom/BusinessLogic/service_outage/ServiceOutage.php','OutageClass', 'notify_on_status_change');
?>

