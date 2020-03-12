<? 
require_once('data/SugarBean.php');
require_once('modules/outag_service_outage/outag_service_outage.php');
//require_once('modules/dep_deposit_Invoice/dep_deposit_Invoice.php');
 
 class OutageClass{
 	function name(&$bean, $event, $arguments)
	{
		if($event == 'before_save' && isset($_POST[service]))
		{
			$bean->name = $_POST[service];
		}
		return $bean->name;
	}
	
	function notify_on_status_change(&$bean, $event, $arguments)
	{
			function sendHTMLemail90($to,$HTML,$subject,$from){
				if(!$from){
				$from = 'CCREPORTS <ccnotify@waridtel.co.ug>';
						}
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "From: ".$from."\r\n";
				mail($to,$subject,$HTML,$headers);
			}
		if($event == 'before_save' && isset($_POST[status_of_outtage]))
			{
			
							if($bean->fetched_row['status_of_outtage'] !== 'Reported (Orange)' && $bean->status_of_outtage === 'Reported (Orange)')
							{
								//$to = "cccontactcenterstaff@waridtel.co.ug,smg@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,packetcorenetworks@waridtel.co.ug";
								$to="gibson.wasukira@waridtel.co.ug,derrick.katungi@waridtel.co.ug";
							}
							else if($bean->fetched_row['status_of_outtage'] !== 'Problem confirmed (Red)' && $bean->status_of_outtage === 'Problem confirmed (Red)')
							
							{
								//$to = "cccontactcentermanagement@waridtel.co.ug,smg@waridtel.co.ug,packetcorenetworks@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,jamesddungu@waridtel.co.ug,macdavid.mugga@waridtel.co.ug,robert.walakira@waridtel.co.ug,david.daka@waridtel.co.ug,moses.wamono@waridtel.co.ug";
								$to="gibson.wasukira@waridtel.co.ug";
							}
							else if($bean->fetched_row['status_of_outtage'] !== 'Resloved (green)' && $bean->status_of_outtage === 'Resloved (green)')
							{
								$to = "cccontactcenterstaff@waridtel.co.ug,smg@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,PACKETCORENETWORKS@waridtel.co.ug";
							}
							else if($bean->fetched_row['status_of_outtage'] !== 'False alarm (white)' && $bean->status_of_outtage === 'False alarm (white)')
							{
								$to = "cccontactcenterstaff@waridtel.co.ug,smg@waridtel.co.ug,ccbusinessanalysis@waridtel.co.ug,PACKETCORENETWORKS@waridtel.co.ug";
							}
							
							$subject = "Notification Type:Service Outtage Status Has been Changed";

                               $body .= "
										<html xmlns='http://www.w3.org/1999/xhtml'>
										<head>
										<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
										<title>Untitled Document</title>
										<style type='text/css'>
										<!--
										.style1 {
											color: #FF0000;
											font-weight: bold;
											font-size: 24px;
											font-family: Arial, Helvetica, sans-serif;
											font-style: italic;
										}
										.style2 {
											color: #0000FF;
											font-weight: bold;
											font-size: 24px;
											font-family: Arial, Helvetica, sans-serif;
											font-style: italic;
										}
										.style3 {
											font-family: Arial, Helvetica, sans-serif;
											font-weight: bold;
											font-size: 12px;
										}
										.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
										.style7 {font-size: 12px}
										.style8 {
											font-size: 9px;
											font-family: Arial, Helvetica, sans-serif;
										}
										-->
										</style>
										</head>

								<body>
										<table width='750' border='0' cellpadding='4' cellspacing='4'>
										  <tr>
											<td colspan='2' align='left' valign='top'><span class='style1'>Infinity</span> <span class='style2'>Wimax</span></td>
										  </tr>
										  <tr>
											<td colspan='2' align='left' valign='top'><span class='style3'>Notification Type:</span><span class='style6'>Service Outtage Notification</span></td>
										  </tr>
										  <tr>
											<td width='30%' align='left' valign='top'><span class='style6'>Dear Team,</span></td>
											<td width='70%' align='left' valign='top'><span class='style7'></span></td>
										  </tr>
										  <tr>
											<td colspan='2' align='left' valign='top'><span class='style6'>The Service '{$bean->service}' has been changed to the Status '{$bean->status_of_outtage},Area affected is '{$bean->area}'' </span></td>
										  </tr>
								
										  <tr>
											<td colspan='2' align='left' valign='top'><span class='style8'><strong>NB:</strong> This is a system generated email notification do not reply to it. For any complaints please email: complaintsupport@waridtel.co.ug or call contact centre: 0700777000</span></td>
										  </tr>
										</table>
										</body>
										</html>";
				
				sendHTMLemail90($to,$body,$subject,$from);
				
			}
					

	}
	
	

	
}