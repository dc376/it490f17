#!/usr/bin/php
<?php
$ch = curl_init("https://api.sportradar.us/nfl-t1/2017/reg/7/leaders.json?api_key=n7xdgystegrsbwp5sxn3cspq");


$fp = fopen("/home/dean/git/jawn/output2.txt", "w+");


curl_setopt($ch, CURLOPT_FILE, $fp);

curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);
?>
