<?php

//include('get_host_info.inc');
//include('path.inc');
//include('rabbitMQLib.inc');
//include('testRabbitMQServer.php');
require_once('login.php.inc');

if(!isset($_POST))
{
	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF";
	echo json_encode($msg);
	exit(0);

}

//$client = new rabbitMQClient("testRabbitMQ.ini", "testServer");
$request = $_POST;
//var_dump($request);

//echo"hello";
//$response = "jigga";
$login = new logindb();
$req = array();
$req['username'] = $request["uname"];
$req['password'] = $request["pword"];
$output = $login->validateLogin($req['username'] = $request["uname"],$req['password'] = $request["pword"]);

if($output)
{
	echo "login successful".PHP_EOL;

}
else
{
	echo "login failed".PHP_EOL;
	
}
echo json_encode($response);
exit(0);



?>