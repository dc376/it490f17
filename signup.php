
<?php
 
require 'database.php';
$conn    = Connect();
$screenname    = $conn->real_escape_string($_POST['screenname']);
$password    = $conn->real_escape_string($_POST['password']);
$email   = $conn->real_escape_string($_POST['email']);
$query   = "INSERT into users (screenname,password,email) VALUES('" . $screenname . "','" . $password . "','" . $email . "')";
$success = $conn->query($query);
 



function redirect($message, $url)
{
	echo $message;
	header ("refresh:2; url=$url");
	exit();
}

if ($success)
{
	echo 'User Successfully Registered.';
	$message = "Redirecting to homepage.";
	$url = "https://127.0.0.1/homepage.html";
	redirect($message, $url);
}

else
{
	echo "Invalid registration, duplicate information provided.";

}



 
$conn->close();
 
?>
