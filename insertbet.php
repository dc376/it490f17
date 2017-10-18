<?php
session_start();
 ?>

<?php
require 'database1.php';
$conn    = Connect();
$bet    = $conn->real_escape_string($_POST['bet_amount']);

$query   = "INSERT into user_bets (screenname,bet_amount,qb_pick,rb_pick,wr_pick) VALUES('" . "dc376" . "','" . $bet . "','" . $_SESSION["qb"] . "','" . $_SESSION["rb"] . "','" . $_SESSION["wr"] . "')";
$success = $conn->query($query);
 

echo" whats good";




 
$conn->close();
 
?>
