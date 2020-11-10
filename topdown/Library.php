<?php
class Library {

//function to be exposed must be public
public function getBooks() {
$books = array("Java", "HTML", "CSS", 
"python", "docker", "php", "linux"); 
return $books;
}
public function greetUser($name) {
return array("message" => "Hello, " . $name);
}
}
?>