<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');


function redirect($Message, $URL){
echo $Message;
header ("refresh:2 ; url=$URL ");
exit();

}
if (!isset($_POST))
{
	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF";
	echo json_encode($msg);
	exit(0);
}
$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
$request = $_POST;
switch ($request["type"])
{
	case "login": {
		$req=array();
		$req['type']="login";
		$req['username']=$request["uname"];
		$req['password']=$request["pword"];
		$response = $client->send_request($req);
		
		//essage = "success";
		//$URL = "https://127.0.0.1/fuckoff.html";
		//redirect($Message, $URL);
	}
	
}


echo json_encode($response);
exit(0);
?>