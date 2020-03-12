<?php
require_once('include/MVC/View/views/view.detail.php');
class AccountsViewDetail extends ViewDetail
{
    function AccountsViewDetail()
    {
        parent::ViewDetail();
    }
    function display()
    {

	 
   	echo '<link rel="stylesheet" href="custom/modules/Accounts/css/lightbox.css" type="text/css" media="screen" />';
    	echo '<script type="text/javascript" src="custom/modules/Accounts/scripts/prototype.js"></script>';
		echo '<script type="text/javascript" src="custom/modules/Accounts/scripts/lightbox.js"></script>';
				
        parent::display();
    }
}
?>
