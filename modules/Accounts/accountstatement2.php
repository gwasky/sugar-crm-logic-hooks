<?php 
echo "Hallo";

	echo "Hallo";
	include('../../../billing/control.php');
			
			print_r($_GET);
			
			echo "Hallo";
			$statement = accountStatement($_GET['mem_id_c'], $_GET['start_date'], $_GET['expiry_date']);

	echo $statement; 
	echo '</br></br><div style="padding:3px;"><a href="" class="lbAction" rel="deactivate">Close Lightbox</a></div>';


mysql_free_result($users);
?>