<!DOCTYPE html>
<html>
<head>
<title>Kehoe's Bros Betting</title>
<style>
body {margin: 0;}
#css1{
  background-color: black;
  background-position: right bottom;
  background-repeat: repeat;
  padding: .5px;
}
.topnav{
    overflow: hidden;
    background-color:black;
    }
.topnav a{
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 5px 10px;
    text-decoration: none;
    font-size: 10px;
    }
.topnav a:hover{
    background-color: lightblue;
    color: black;
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
    height: 150px;
    background-color: black;
    color:white;
    text-align: left;
    padding-left: .5cm;
    padding-top: .05cm;
    padding-bottom: .8cm;
}
    
</style>

</head>

<body>
<div id = "css1">
<h3><font face="georgia" size="5" color="white" text-align="left" float="left">Kehoe's Bros Betting</font></h3> 
<!--<h3> <font face="georgia" size="8" color="white" text-align="center" float="center">WELCOME!</font></h3></center>--> <!--MUST BE THE SAME LINE AS KEHOES BROS!!!!!-->
    <div class="topnav" id="firstTopNav">
        <a href="homepage.php">HOME</a>
        <a href="deposit.html">DEPOSIT</a>
        <a href="about.html">ABOUT</a>
        <a href="compareResults.php">RESULTS</a> <!--I NEED ACCESS TO THE DB-->
    </div>
</div>
</body>
<style>
    { margin: 0; padding: 0; }
    html {
        background: url('https://i.pinimg.com/originals/2c/ba/0c/2cba0cb95b6bfdad2a7699490309d8ff.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

</style>

<?php
session_start();
  $username= $_SESSION["screenname"];
  $amount= $_SESSION["amount"];
?>

<!--<form action = "depositingmoney.php" method ="get">-->

<!--<?php   
    print "Welcome $username <br>"; //need session
    print "Balance: $ $amount <br><br>"; //need session
?>-->

<center>
<br>
<br>
<body>
<div class="box1">
<form action = "depositingmoney.php" method ="get" style="width: 415px; padding-bottom: .8cm; padding-top: .05cm; background-color: #000000;">

<h2><font face="georgia" size="3" color="white"><center>Place deposit money below </center></font></h2>

    <label for="amount">Deposit Amount: </label>
    <input type = "text" name="amount"  placeholder="Enter Amount"/>
    <br>
    <br>
    <center><input type = "submit"></center>
</div>
</form>
</body>
</html>
