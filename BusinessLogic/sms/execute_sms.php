<?php
require_once('custom/BusinessLogic/sms/nusoap.php');

function send($message,$msisdn,$method='SMS',$sender=100){
	
	$log = "";
	
	$log .= "Attempting to send [".$message."] to [".$msisdn."] via [".$method."]";
	
	$message_format[SMS] = "sendBroadcastSMS";
	$message_format[USSD] = "sendUSSDMessage";
	
	if(strlen(trim($message)) > 10){
		$client = new nusoapclient('http://devfe/WTUSMSWebService/WTUSMSWebService.asmx?wsdl', true);
		
		$err = $client->getError();
		if($err){
		  // Display the error
		  $log .= "Constructor error :". $err."/n <br>";
		  $status = 0;
		}else{
			// Call the TriangleArea SOAP method
		
			$params = array('recipient'=>$msisdn,'sender'=>$sender,'message'=>$message);
			//$params =array('name' => 'Francis' );
			//$result = $client->call("Hello", array('parameters' => $param));
			$result = $client->call($message_format[strtoupper($method)],  array('parameters' => $params), '_http://www.wariditdev.co.ug/');
			//$result = $client->call('HelloWorld');
			// Display the request and response
		   
			// Check for a fault
			if ($client->fault) {
				$log .= "Fault : ".serialize($result)."\n <br>";
				$status = 0;
				//print_r($result);
				//echo '</pre>';
			}else{
				// Check for errors
				$err = $client->getError();
				if($err){
					// Display the error
					$log .= "Error : ".$err." \n <br>";
					$status = 0;
				}else{
					$status = 1;
					$log .= strtoupper($method)." sent to ".$msisdn." \n <br>";
					//echo '<h2>Request</h2>';
					//echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
					//echo '<h2>Response</h2>';
					//echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
					// Display the result
					//echo '<h2>Result</h2><pre>';
					//print_r($result);
					//echo '</pre>';
				}
			}
		}
	}else{
		$log .= strtoupper($method).' not sent ... Message length is less than 10! '.strlen(trim($message)).'<br>';
		$status = -1;
	}
	
	return array('log'=>$log,strtolower($method).'_result'=>$status);
}

function explode_by_special_xter($input,$by_list=array(';',':',',','/')){
		if(str_replace(array('-','+',' '),'',$input) != '' and $by_list != array()){
			$input = str_replace(array('-','+',' '),"",$input);
			
			$last_item = end($by_list);
			
			foreach($by_list as $by){
				if($by == end($by_list)) continue;
				$input = str_replace($by,end($by_list),$input);
			}
			
			$output = explode(end($by_list),$input);
		}else{
			$output = array();
		}
		
		return $output;
	}

function obtain_contacts($entry){
	
	$contact[enumbers] = array();
	$contact[numbers] = array();
	
	$contacts = explode_by_special_xter($entry); //default xters are ';',':',',','/'
	
	if(count($contacts) > 0 and !empty($contacts)){

		foreach($contacts as $temp){
			$number = preg_replace("#[A-Z]#i", "",str_replace(array('-','+',' '),'',trim($temp)));
			 if(substr($number,0,3) == '256'){
				$number = substr_replace($number,'',0,3);
			} 
			if(substr($number,0,1) == '0'){
				$number = substr_replace($number,'',0,1);
			}
			if((substr($number,0,2) == '41')||(substr($number,0,2) == '20')){
				$contact[error] .= '; 256-'.$number.' is a Landline';
				//array_push($contact[enumbers],$number);
				$contact[enumbers][$number] = $number;
			}else{
				if(strlen($number) != 9){
					$contact[error] .= '; 256-'.$number.' has incorrect number ['.strlen($number).'] of digits';
					//array_push($contact[enumbers],$number);
					$contact[enumbers][$number] = $number;
				}else{
					//array_push($contact[numbers],'256'.$number);
					$contact[numbers]['256'.$number] = '256'.$number;
				}
			}
		}
	}else{
		$contact[error] .= 'Client has no contact MISISDN';
		array_push($contact[enumbers],'000000000');
	}
	
	return $contact;
}
?>