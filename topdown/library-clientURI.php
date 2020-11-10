<?php

// 'trace' => 1 is essential to capture SOAP request ans response
$options = array(
	"location" => "http://localhost/mywebservices/topdown/library-server.php",
	"uri" => "http://localhost",
	'trace' => 1);
try {
 // No WSDL is given.  we need to provide web service URI.   
$client = new SoapClient(null, $options); 
$result = $client->getBooks(); 
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