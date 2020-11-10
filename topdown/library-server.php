<?php
// create the SoapServer and tells it 
// which class holds the functionality it should expose

require('library.php');
$options = array("uri" => "http://localhost");
//create a SOAPServer instance
$server = new SoapServer(null, $options);
//define the class the SOAP service should expose
$server->setClass('Library'); 
 $server->handle();
 ?>


