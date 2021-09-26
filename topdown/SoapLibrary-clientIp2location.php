<?php
$options = array("location" => "http://v1.fraudlabs.com/ip2locationwebservice.asmx",
"uri" => "http://localhost",'trace' => 1);
try {
$client = new SoapClient("http://v1.fraudlabs.com/ip2locationwebservice.asmx?wsdl", $options);
$parms = array("IP" => "197.15.63.82","LICENSE" => "02-W77R-DPB4");
$result = $client->IP2Location($parms);
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