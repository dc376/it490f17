<!DOCTYPE html>
<html>
<body>

<?php
include "database.php";
session_start();
$con = Connect();
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = 'dc376'";
$userBalanceQuery = mysqli_query($con, $getUserBalance);
$balanceResult = $userBalanceQuery->fetch_object()->var;
echo "current balance: " . $balanceResult;


$deposit = $_GET['amount'];
$_SESSION['amount'] = $deposit;

$deposit = $deposit + $balanceResult;
$newBalance = "UPDATE users set balance = '$deposit' where screenname = 'dc376'";
$success = $con->query($newBalance);
?>

<h2> Deposited Amount </h2>
<p> Deposited amount = <?=$_SESSION['amount']?></p>


</style>
</body>
</html>

