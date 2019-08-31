<?php
$dbhost='localhost';
$dbuser='root'
$dbpass=;
$db='adminpanel'
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);

//check connection
if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}
?>