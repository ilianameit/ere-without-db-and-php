<?php

try{
			$client = new SoapClient('https://web-1c.kamaz.ru/wsGOA/ws/CarInfo?wsdl', array('login' => "WSUserCarInfo", 'password'  => "CarInfo2018", "exceptions"=>1));  
			
			$VINTC = 'XTC651154F1330482';
			
			$result = $client->SendInfo(array( 'VINTC' => $VINTC));
			$xml_request = $result->return;
			if($xml_request != ''){
				$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>'.$xml_request );
				foreach($xml as $prop => $row){
					foreach($row as $znach => $value1){
						foreach($value1 as $option => $rad){
							
								
					echo "<pre>";
					print_r ($xml);
					echo "</pre>";
					


				
			}
				}
			}
			}
	
			unset($client);
		}catch (SoapFault $s){
			die('ERROR: [' . $s->faultcode . '] ' . $s->faultstring);
		}catch (Exception $e){
			die('ERROR: ' . $e->getMessage());
		}
?>