<?php 

$db = new PDO("mysql:host=192.168.0.35;dbname=mydb","root", null);

if(!$db){
	echo "Not connected!";
}
?>