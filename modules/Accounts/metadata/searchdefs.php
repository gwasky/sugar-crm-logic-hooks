<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'crn_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_CRN',
        'default' => true,
        'name' => 'crn_c',
      ),
      'date_entered' => 
      array (
        'width' => '10%',
        'label' => 'LBL_DATE_ENTERED',
        'default' => true,
        'name' => 'date_entered',
      ),
      'mocn_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_MOCN',
        'default' => true,
        'name' => 'mocn_c',
      ),
      'name' => 
      array (
        'name' => 'name',
        'label' => 'LBL_NAME',
        'default' => true,
      ),
      'preferred_username_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_PREFERRED_USERNAME',
        'default' => true,
        'name' => 'preferred_username_c',
      ),
      'service_type_internet_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_SERVICE_TYPE_INTERNET',
        'default' => true,
        'name' => 'service_type_internet_c',
      ),
      'download_bandwidth_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_DOWNLOAD_BANDWIDTH',
        'default' => true,
        'name' => 'download_bandwidth_c',
      ),
      'primary_base_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_PRIMARY_BASE',
        'default' => true,
        'name' => 'primary_base_c',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'label' => 'LBL_NAME',
        'default' => true,
      ),
      'crn_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_CRN',
        'default' => true,
        'name' => 'crn_c',
      ),
      'access_points_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_ACCESS_POINTS',
        'sortable' => false,
        'default' => true,
        'name' => 'access_points_c',
      ),
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
      ),
      'created_by_name' => 
      array (
        'width' => '10%',
        'label' => 'LBL_CREATED',
        'default' => true,
        'name' => 'created_by_name',
      ),
      'customer_type_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_CUSTOMER_TYPE',
        'default' => true,
        'name' => 'customer_type_c',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
      ),
      'industry' => 
      array (
        'name' => 'industry',
        'label' => 'LBL_INDUSTRY',
        'default' => true,
      ),
      'download_bandwidth_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_DOWNLOAD_BANDWIDTH',
        'default' => true,
        'name' => 'download_bandwidth_c',
      ),
      'primary_base_c' => 
      array (
        'width' => '10%',
        'label' => 'LBL_PRIMARY_BASE',
        'default' => true,
        'name' => 'primary_base_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
