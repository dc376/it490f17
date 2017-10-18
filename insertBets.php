<?php session_start();
$_SESSION['qb'];
$_SESSION['rb'];
$_SESSION['wr'];

?>

<?php

$qb = $_GET['qb'];
$rb = $_GET['rb'];
$wr = $_GET['wr'];


require 'database1.php';
$conn    = Connect();
$bet    = $_POST['bet_amount'];


$query   = "INSERT into user_bets (screenname,bet_amount,qb_pick,rb_pick,wr_pick) VALUES('" . "dc376" . "','" . $bet . "','" . $_SESSION["qb"] . "','" . $_SESSION["rb"] . "','" . $_SESSION["wr"] . "')";

$success = $conn->query($query);
 

echo "<br><br>The QB is ". $_SESSION['qb'];
echo "<br><br>The RB is ". $_SESSION['rb'];
echo "<br><br>The WR is ". $_SESSION['wr'];
echo "<br><br>The bet amount is ". $bet;




 
$conn->close();
 
?>


