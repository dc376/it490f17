#!/usr/bin/php
<?php


//connects to stats DB and stores the winning teams into an array
$sql = new mysqli('192.168.1.120', 'dean','dean','stats');
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


   
$result->close();
$sql->close();
//return $rows;


//opens up DB for user accnts
$hostname = "192.168.1.120";
$username = "dean";
$password = "dean";
$dbname = "login";
$db2 = mysqli_connect($hostname, $username, $password,$dbname);
$dbselect = mysqli_select_db($db2, "login");

//gets users current balance
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
$userBalanceQuery = mysqli_query($db2, $getUserBalance);
$userBalanceResult = $userBalanceQuery->fetch_object()->var;
//echo $userBalanceResult;


//for loop to iterate thru the array created above

for($i=0; $i<8; $i++)
{

//first pick win

    //checks to see if first pick 
if($rows[0] != $final1)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;

        $amount = $userBalanceResult - (.33 * $betResult);
        $firstPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
        $success = $db2->query($firstPickLost);
        
        echo "\n" . "your choice " . $final1 . " did not win<br><br>";
        
        
    }
elseif($rows[0] == $final1)

    {
        $amount = (.33 * $betResult) + $userBalanceResult;
        $firstPickWon = "update users set balance = '$amount' where screenname = '$userResult'";
        $success = $db2->query($firstPickWon);
        echo "your choice " . $final1 . " won!<br><br>";
        
        
    }
    
 //}   
}
/*
foreach($rows as $value)
{
$i++;
//2nd pick win
if($value[$i] == $final2)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;

        $amount = (.33 * $betResult) + $userBalanceResult;
        $secondPickWon = "update users set balance = '$amount' where screenname = '$userResult'";
        $success = $db2->query($secondPickWon);

        echo "\n" . "your choice " . $final2 . " won<br><br>";
        break;

    }
//2nd pick loss
if($value[$i] != $final2)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;

        $amount = $userBalanceResult - (.33 * $betResult);
        $secondPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
        $success = $db2->query($secondPickLost);
        echo "\n" . "your choice " . $final2 . " did not win<br><br>";
        break;
    }
}

foreach($rows as $value){
//third pick won
$i++;
if($value[$i] == $final3)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;

        $amount = (.33 * $betResult) + $userBalanceResult;
        $thirdBetWon = "update users set balance = '$amount' where screenname = '$userResult'";
        $success = $db2->query($thirdBetWon);

        echo "\n" . "your choice " . $final3 . " won<br><br>";
        break;

    }
    //third pick lost
if($value[$i] != $final3)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;

        $amount = $userBalanceResult - (.33 * $betResult);
        $thirdPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
        $success = $db2->query($thirdPickLost);
        
        echo "\n" . "your choice " . $final3 . " did not win<br><br>";
        break;
    }
    }
    */
return $rows;

$db2->close();

?>
