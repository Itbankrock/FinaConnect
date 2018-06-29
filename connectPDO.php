<?php 

$db = new PDO("mysql:host=localhost;dbname=mydb","root", null);

if(!$db){
	echo "Not connected!";
}
?>