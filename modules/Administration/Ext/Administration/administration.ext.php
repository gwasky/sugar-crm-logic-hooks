<?php 
 //WARNING: The contents of this file are auto-generated

 
$admin_option_defs = array();
$admin_option_defs['FieldsACLAdmin'] = array(
	'themes/default/images/Roles', 'LBL_FIELDSACL_ADMIN', 'LBL_FIELDSACL_ADMIN_DESCRIPTION', './index.php?module=acl_fields&action=index'
	);


// Loop through the menus and add to the Users group
$tmp_menu_set = false;
foreach ($admin_group_header as $key => $values)
{
	if ($values[0] == 'LBL_USERS_TITLE')
	{
		if (!ereg('5.2',$sugar_config['sugar_version']))
			$admin_group_header[$key][3]['FieldsACLAdmin'] = $admin_option_defs['FieldsACLAdmin'];
		else
			$admin_group_header[$key][3]['Administration']['FieldsACLAdmin'] = $admin_option_defs['FieldsACLAdmin'];
		$tmp_menu_set = true;
	}
}

// Else create new group
if (!$tmp_menu_set)
	if (!ereg('5.2',$sugar_config['sugar_version']))
		$admin_group_header[] = array('FIELDSACL_ADMIN_TITLE','',false,$admin_option_defs,'FIELDSACL_ADMIN_DESC');
	else
		$admin_group_header[] = array('FIELDSACL_ADMIN_TITLE','',false,array('Administration' => $admin_option_defs),'FIELDSACL_ADMIN_DESC');


?>