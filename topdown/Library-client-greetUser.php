<?php
// 'trace' => 1 is essential to capture SOAP request ans response
$options = array(
"location" => "http://localhost:8888/mywebservices/topdown/library-server.php",
"uri" => "http://localhost",
'trace' => 1);
 // No WSDL is given.  we need to provide web service URI.   
try {
$client = new SoapClient(null, $options);
$result = $client->greetUser("hi");
echo '<br/><h1>Service response</h1>';
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