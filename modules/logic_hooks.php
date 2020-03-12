<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(3, 'ListView', 'custom/include/EnhancedStudio.php','CustomCode', 'evalCode'); 
$hook_array['after_retrieve'] = Array(); 
$hook_array['after_retrieve'][] = Array(4, 'DetailView', 'custom/include/EnhancedStudio.php','CustomCode', 'evalCode'); 
$hook_array['after_retrieve'][] = Array(1, 'acl_fields', 'modules/acl_fields/fields_logic.php','acl_fields_logic', 'limit_views'); 



?>