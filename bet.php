<!DOCTYPE html>
<html>
<body>

<?php
session_start();


// retrieve the form data by using the element's name attributes value as key 
$qb = $_GET['qb']; 
$rb = $_GET['rb']; 
$wr = $_GET['wr'];

$_SESSION['qb'] = $qb;
$_SESSION['rb'] = $rb;
$_SESSION['wr'] = $wr;

?>



<h2>Players Selected</h2>

<p> Quarterback:     <?=$_SESSION['qb']?></p>
<p> Runningback:     <?=$_SESSION['rb']?></p>
<p> Wide Receiver:   <?=$_SESSION['wr']?></p>


</style>
<body>



<form action="insertBets.php" method="post" style="border:1px solid #ccc">

   

<h2>Place your bet below</h2> 
    
    
    <label><b>Bet Amount: </b></label>
    <input type="text" name="bet_amount" required>

    <div class="clearfix">

      <br>
	
	<button type="submit" class="signupbtn">Submit Bets!</button>
    
</form>


</body>
</html>
