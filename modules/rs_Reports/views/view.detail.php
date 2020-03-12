<?php
require_once('include/MVC/View/views/view.detail.php');
class rs_ReportsViewDetail extends ViewDetail
{
    function rs_ReportsViewDetail()
    {
        parent::ViewDetail();
    }
    function display()
    {

	 
   	echo '<link rel="stylesheet" href="custom/modules/rs_Reports/css/lightbox.css" type="text/css" media="screen" />';
    	echo '<script type="text/javascript" src="custom/modules/rs_Reports/scripts/prototype.js"></script>';
		echo '<script type="text/javascript" src="custom/modules/rs_Reports/scripts/lightbox.js"></script>';
				
        parent::display();
    }
}
?>
