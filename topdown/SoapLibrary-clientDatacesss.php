<?php
$options = array("location" => "https://www.dataaccess.com/webservicesserver/NumberConversion.wso",
"uri" => "http://localhost",'trace' => 1);
try {
$client = new SoapClient("https://www.dataaccess.com/webservicesserver/NumberConversion.wso?WSDL", $options);
$parms = array('ubiNum' => '100');
$result = $client->NumberToWords($parms);
echo '<br/><h1>Service response: </h1>';
print_r($result);
} 
catch (SoapFault $e) {
    echo '<br/><h1>Error: </h1>';
var_dump($e); 
}
// print soap request and response (debug)
	echo '<br/><h1>SOAP Request</h1>'.htmlspecialchars($client->__getLastRequest()).'<br/>';
	echo '<br/><h1>SOAP Response </h1>'.htmlspecialchars($client->__getLastResponse()).'<br/>';
 
?>