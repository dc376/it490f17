<?php
 
 
function Connect()
{
 $dbhost = "192.168.1.120";
 $dbuser = "frank";
 $dbpass = "frank";
 $dbname = "login";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
	
}
 
?>