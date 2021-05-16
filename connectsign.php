<?php
$fullName = $_POST['fullName'];
$username = $_POST['username'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$password = $_POST['password'];
$conpassword = $_POST['conpassword'];
$conn =  new mysqli('localhost','root','root','login1');

if($conn->connect_error){
	die('connection failed:', .$conn->connect_error);
	
}
else {
	$stmt = $conn->prepare("insert into login(fullName,username,email,phoneNumber,password,conpassword) value(?,?,?,?,?,?)");
	$stmt->bind_param("ss",$fullName,$username,$email,$phoneNumber,$password,$conpassword);
	$stmt->execute();
	echo "Login successfully";
	$stmt->closed();
	$conn->closed();
}
?>