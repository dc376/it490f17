

<?php
include "database1.php";


$conn    = Connect();
//get top QB
$getQB = "SELECT player_name AS var FROM football_stats WHERE position = 'QB' ORDER BY passing_yards DESC LIMIT 1";
$qbQuery = mysqli_query($conn,$getQB);
$qbResult = $qbQuery->fetch_object()->var;


//get top RB
$getRB = "SELECT player_name AS var FROM football_stats WHERE position = 'RB' ORDER BY running_yards DESC LIMIT 1";
$rbQuery = mysqli_query($conn,$getRB);
$rbResult = $rbQuery->fetch_object()->var;

//get top WR
$getWR="SElECT player_name AS var FROM football_stats WHERE position = 'WR' ORDER BY receiving_yards DESC LIMIT 1";
$wrQuery = mysqli_query($conn,$getWR);
$wrResult = $wrQuery->fetch_object()->var;


//get user name...need a session var for username
$getUser = "SELECT screenname AS var from user_bets WHERE screenname = 'dc376'";
$userQuery = mysqli_query($conn,$getUser);
$userResult = $userQuery->fetch_object()->var;


//get bet amount
$getBet = "SELECT bet_amount AS var from user_bets WHERE screenname = 'dc376'";
$betQuery = mysqli_query($conn,$getBet);
$betResult = $betQuery->fetch_object()->var;

//get user qb
$getUserQb = "SELECT qb_pick AS var from user_bets where screenname = 'dc376'";
$userQbQuery = mysqli_query($conn,$getUserQb);
$userQbResult = $userQbQuery->fetch_object()->var;

//get user rb
$getUserRb = "SELECT rb_pick AS var from user_bets where screenname = 'dc376'";
$userRbQuery = mysqli_query($conn,$getUserRb);
$userRbResult = $userRbQuery->fetch_object()->var;

//get user wr
$getUserWr = "SELECT wr_pick AS var from user_bets where screenname = 'dc376'";
$userWrQuery = mysqli_query($conn,$getUserWr);
$userWrResult = $userWrQuery->fetch_object()->var;


//connects to user DB
$conn->close();
$hostname = "192.168.1.120";
$username = "dean";
$password = "dean";
$dbname = "login";
$db2 = mysqli_connect($hostname, $username, $password,$dbname);
$dbselect = mysqli_select_db($db2, "login");


//get user balance from user DB
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
$userBalanceQuery = mysqli_query($db2, $getUserBalance);
$userBalanceResult = $userBalanceQuery->fetch_object()->var;
//echo $userBalanceResult;


//checks if hit on qb
if($qbResult == $userQbResult)
{
$amount = (.33 * $betResult) + $userBalanceResult;
$qbBetWon = "update users set balance = '$amount' where screenname = '$userResult'";
$success = $db2->query($qbBetWon);
echo "your choice " . $userQbResult . " won!<br><br>";

}
if($qbResult != $userQbResult){
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
$userBalanceQuery = mysqli_query($db2, $getUserBalance);
$userBalanceResult = $userBalanceQuery->fetch_object()->var;

$amount = $userBalanceResult - (.33 * $betResult);
$qbBetLost = "update users set balance = '$amount' where screenname = '$userResult'";
$success = $db2->query($qbBetLost);
echo "\n" . "your choice " . $userQbResult . " did not win<br><br>";
//code to track a win, put it in a database that just has an INT for a number to add/subtract to it.


}


//checks if hit on RB
if($rbResult == $userRbResult)
{
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
$userBalanceQuery = mysqli_query($db2, $getUserBalance);
$userBalanceResult = $userBalanceQuery->fetch_object()->var;

$amount = (.33 * $betResult) + $userBalanceResult;
$rbBetWon = "update users set balance = '$amount' where screenname = '$userResult'";
$success = $db2->query($rbBetWon);

echo ".\n" . "your choice " . $userRbResult . " won!<br><br>";

}

if($rbResult != $userRbResult){
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
$userBalanceQuery = mysqli_query($db2, $getUserBalance);
$userBalanceResult = $userBalanceQuery->fetch_object()->var;

$amount = $userBalanceResult - (.33 * $betResult);
$rbBetLost = "update users set balance = '$amount' where screenname = '$userResult'";
$success = $db2->query($rbBetLost);
echo "\n" . "your choice " . $userRbResult . " did not win<br><br>";
}



//checks if hit on WR
if($wrResult == $userWrResult)
{
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
$userBalanceQuery = mysqli_query($db2, $getUserBalance);
$userBalanceResult = $userBalanceQuery->fetch_object()->var;

$amount = (.33 * $betResult) + $userBalanceResult;
$wrBetWon = "update users set balance = '$amount' where screenname = '$userResult'";
$success = $db2->query($wrBetWon);

echo "\n" . "your choice " . $userWrResult . " won<br><br>";

}
if($wrResult != $userWrResult){
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
$userBalanceQuery = mysqli_query($db2, $getUserBalance);
$userBalanceResult = $userBalanceQuery->fetch_object()->var;

$amount = $userBalanceResult - (.33 * $betResult);
$wrBetLost = "update users set balance = '$amount' where screenname = '$userResult'";
$success = $db2->query($wrBetLost);
echo "\n" . "your choice " . $userWrResult . " did not win<br><br>";
}


$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
$userBalanceQuery = mysqli_query($db2, $getUserBalance);
$userBalanceResult = $userBalanceQuery->fetch_object()->var;

echo "\n" . $userResult . " your new balance is " . $userBalanceResult; 




?>

