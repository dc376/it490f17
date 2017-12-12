#!/usr/bin/php
<?php


//connects to stats DB and stores the winning teams into an array
$sql = new mysqli('127.0.0.1', 'root','chris','stats');
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit;
}
$query = "SELECT winner FROM basketball_stats";
$result = $sql->query($query);     
if (!$result) {
  printf("Query failed: %s\n", $mysqli->error);
  exit;
}      
while($row = $result->fetch_row()) {
  $rows[]=$row;
  
 
}



//picks users first pick
$team1Pick = "SELECT team1_pick AS var FROM user_bballbet";
$team1Result = $sql->query($team1Pick);
$final1 = $team1Result->fetch_object()->var;


//2nd pick
$team2Pick = "SELECT team2_pick AS var FROM user_bballbet";
$team2Result = $sql->query($team2Pick);
$final2 = $team2Result->fetch_object()->var;

//3rd pick
$team3Pick = "SELECT team3_pick AS var FROM user_bballbet";
$team3Result = $sql->query($team3Pick);
$final3 = $team3Result->fetch_object()->var;
//echo $final3;


//fetches the username
$getUser = "SELECT screenname AS var from user_bballbet WHERE screenname = 'dc376'";
$userQuery = mysqli_query($sql,$getUser);
$userResult = $userQuery->fetch_object()->var;


//fetches the bet amount
$getBet = "SELECT bet_amount AS var from user_bballbet WHERE screenname = 'dc376'";
$betQuery = mysqli_query($sql,$getBet);
$betResult = $betQuery->fetch_object()->var;

//echo "the bet amount is".$betResult;


   
$result->close();
$sql->close();
//return $rows;


//opens up DB for user accnts
$hostname = "127.0.0.1";
$username = "root";
$password = "chris";
$dbname = "login";
$db2 = mysqli_connect($hostname, $username, $password,$dbname);
$dbselect = mysqli_select_db($db2, "login");

//gets users current balance
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
$userBalanceQuery = mysqli_query($db2, $getUserBalance);
$userBalanceResult = $userBalanceQuery->fetch_object()->var;


$winners = [];

foreach($rows as $value)
{
 
if($value[0] == $final1)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;
	//print_r($value[0]);
	array_push($winners, $final1);   
        
    }

}


foreach($rows as $value)
{
$i++;

//first pick win

//checks to see if first pick 
if($value[0] == $final2)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;
	array_push($winners, $final2);
 
    }

}

foreach($rows as $value)
{
$i++;

if($value[0] == $final3)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;
	array_push($winners, $final3);        
    }

}

if(count($winners) == 0){
	$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;

	echo "Sorry, none of your picks won this week, your balance has been adjusted.";
	$amount = $userBalanceResult - ($betResult);
        $firstPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
	$success = $db2->query($firstPickLost);

}

if(count($winners) == 1){
	$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;

	echo "One of your picks won this week, your balance has been adjusted.";
	$amount = $userBalanceResult + (.33 * $betResult);
        $firstPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
	$success = $db2->query($firstPickLost);

}

if(count($winners) == 2){
	$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;

	echo "Two of your picks won this week, your balance has been adjusted.";
	$amount = $userBalanceResult + (.66 * $betResult);
        $firstPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
	$success = $db2->query($firstPickLost);

}

if(count($winners) == 3){
	$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;

	echo "All of your picks won this week, your balance has been adjusted.";
	$amount = $userBalanceResult + ($betResult);
        $firstPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
	$success = $db2->query($firstPickLost);

}


print_r($winners);

echo count($winners);
    
    
return $rows;

$db2->close();

?>
