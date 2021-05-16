<?php
$host="Localhost";
$user ="root"
$password = '';
$db_name ="login";

$conn =  new mysqli($host,$user,$password,$db_name);

if(mysqli_connect_errno()){
	die(":connection failed:'."mysqli_connect_errno);
	
}
 
?>