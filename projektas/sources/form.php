<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];



$conn = new mysqli('localhost','root','','forma')
if($conn->connect_error){
die('Connection Failed : ' .$conn->connect_error;)
}else{
$stmt = $conn->prepare("insert into registration(name, email, message)
	values(?, ?, ?)");
$stmt->bind_param("sssi",$name, $email, $message);
$stmt->execute();
echo "message sent successfully....";
$stmt->close();
$conn->close();	
}
;?>