#!/usr/bin/php
<?php
$ch = curl_init("https://api.sportradar.us/nba/trial/v4/en/games/2017/REG/schedule.json?api_key=a3jzmmvy3uvvafpuyaxskb4n");

$fp = fopen("/home/dean/git/jawn/output.txt", "w+");
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);



?>
