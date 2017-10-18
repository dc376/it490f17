<?php session_start();
$_SESSION["qb"];
$_SESSION["rb"];
$_SESSION["wr"];

?>

<?php

$qb = $_GET["qb"];
$wr = $_GET["wr"];
$rb = $_GET["rb"];

require 'database1.php';
$conn    = Connect();
$bet    = $conn->real_escape_string($_POST['bet_amount']);

$query   = "INSERT into user_bets (screenname,bet_amount,qb_pick,rb_pick,wr_pick) VALUES('" . "dc376" . "','" . $bet . "','" . $qb . "','" . $rb . "','" . $wr . "')";
$success = $conn->query($query);
 

echo" whats good";




 
$conn->close();
 
?>
