<?php 
require('library.php');
$server = new SoapServer("library.wsdl"); // wsdl file name 
$server->setClass('Library');
$server->addFunction('getBooks');

$server->handle();
?>