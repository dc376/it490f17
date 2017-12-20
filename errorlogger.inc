<?php

function sendLogs($options){
    switch (strtolower($options[0])) {
        case 'e':
        case 'error':
            $level='ERROR';
            break;
        case 'i':
        case 'info':
            $level='INFO';
            break;
        case 'd':
        case 'debug':
            $level='DEBUG';
            break;
        default:
            $level='INFO';
    }
    $client = new rabbitMQClient("errorlogger.ini","testServer");
    $t = time();
    
	
    $msg = date("m/d/Y h:i:s A", $t) . " --- [" . $level . "]-- " . $options[1] . " -- " . $options[2] . PHP_EOL;
    
    $request = array();
    $request['type'] = "errorLog";
    $request['level'] = $level;
    $request['loc'] = $options[1];
    $request['message'] = $msg;
    $response = $client->publish($request);
    
    
    file_put_contents('/home/dean/git/rabbitmq/errorlog'.date("j/n/Y").'.txt', $msg, FILE_APPEND);
    
 
}
?>
