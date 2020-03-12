<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

        $hook_array = array();

        $hook_array['before_save'] = array();

        // array(hook execute order, 'hook name', 'hook code location', 'hook code class name', 'hook code function to execute')
        $hook_array['before_save'][] = array(1, 'notify_noc', 'custom/modules/tr_Trials/notify_noc.php', 'notify_noc', 'notify_noc');
        $hook_array['before_save'][] = array(2, 'notify_ops', 'custom/modules/tr_Trials/notify_ops.php', 'notify_ops', 'notify_ops');
 		$hook_array['before_save'][] = array(3, 'notify_all', 'custom/modules/tr_Trials/notify_all.php', 'notify_all', 'notify_all');
 		$hook_array['before_save'][] = array(4, 'notify_reject', 'custom/modules/tr_Trials/notify_reject.php', 'notify_reject', 'notify_reject');


?>

