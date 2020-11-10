<?php
$client = new SoapClient('http://api.radioreference.com/soap2/?wsdl&v=latest', array('trace' => 1));
$countries = $client->getCountryList();
print_r($countries);



// print soap request and response (debug)
echo '<br/><h1>SOAP Request</h1>'.htmlspecialchars($client->__getLastRequest()).'<br/>';
echo '<br/><h1>SOAP Response </h1>'.htmlspecialchars($client->__getLastResponse()).'<br/>';

?>