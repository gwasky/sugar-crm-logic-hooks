


<?php

 

//this acript is supposed to send an email when a lead has changed from one que to another, in this case new leads que
 
	if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 
	class root_cause{
 
		function root_cause(&$bean, $event, $arguments){
		
		// make sure the status was actually changed to closed
		// $bean->fetched_row['status'] is the stored status of the case
		// $bean->status is the status it was changed to
			if ($bean->root_cause_c == 'To Be Updated' && $bean->status == 'Closed')
			
			{
			echo "No Valid Root Cause For Case Closure";
			echo "<script> alert('This case has not been succesfully closed. Please choose a root cause other than To Be Updated before you can close the case: Click Ok and then click resend button to go back to edit view of the case'); parent.location='javascript:history.go(-1)'; </script>";
			exit();
			//header('Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."') ;

			}
		}
	}
 
?>
