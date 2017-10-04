
<?php
 
require 'database.php';
$conn    = Connect();
$screenname    = $conn->real_escape_string($_POST['screenname']);
$password    = $conn->real_escape_string($_POST['password']);
$email   = $conn->real_escape_string($_POST['email']);
$query   = "INSERT into users (screenname,password,email) VALUES('" . $screenname . "','" . $password . "','" . $email . "')";
$success = $conn->query($query);
 


if ($success){
	echo 'User Successfully Registered.';
}



 
$conn->close();
 
?>