<!DOCTYPE html>
<html>
<head>
<title>Kehoe's Bros Betting</title>
<style>

body {margin: 0;}
#css1{
    /**background-image:url("http://www.publicdomainpictures.net/pictures/190000/velka/black-background-1468370534d5s.jpg");**/
    background-color: lightgrey;
    background-position: right bottom;
    background-repeat: repeat;
    padding: .5px;
    }
.topnav{
    overflow: hidden;
    background-color:grey;
    }
.topnav a{
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 10px 12px;
    text-decoration: none;
    font-size: 10px;
    }
.topnav a:hover{
    background-color: pink;
    color: white;
}
.topnav a.active{
    background-color: #ee2211;
    color: red;
}   
.box1{
    position: relative;
    margin: auto;
    float: center;
    width: 400px;
    font-family:"georgia";
    height: 100px;
    background-color: pink;
    text-align: left;
    padding-left: .5cm;
    padding-top: .05cm;
    padding-bottom: .8cm;
}
    
</style>

</head>

<body>
<div id = "css1">
<h3><font face="georgia" size="20" color="black">Players Selected</font></h3>
    <div class="topnav" id="firstTopNav">
        <a href="homepage.php">HOME</a>
        <a href="deposit.php">DEPOSIT</a>
        <a href="about.php">ABOUT</a>
        <a href="compareResults.php">RESULTS</a>
    </div>
</div>
</body>

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

<style>
.box1{
    position: relative;
    margin: auto;
    float: center;
    width: 400px;
    font-family:"georgia";
    height: 100px;
    background-color: pink;
    text-align: left;
    padding-left: .5cm;
    padding-top: .05cm;
    padding-bottom: .8cm;
}
</style>
<center>
<br>
<br>
<body>
<div class = "box1">
<p> Quarterback:     <?=$_SESSION['qb']?></p>
<p> Runningback:     <?=$_SESSION['rb']?></p>
<p> Wide Receiver:   <?=$_SESSION['wr']?></p>
</div>
</body>
<br>
<br>
<br>

<body>

<form action="insertBets.php" method="post" style="border:1px solid #ccc; width: 500px; padding-bottom: .8cm;">

   

<h2>Place your bet below</h2> 
    
    
    <label><b>Bet Amount: </b></label>
    <input type="text" name="bet_amount" required>

    <div class="clearfix">

      <br>
	
	<button type="submit" class="signupbtn">Submit Bets!</button>
    
</form>


</body>
</html>
