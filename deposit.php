<!DOCTYPE html>
<?php
//session_start();
?>

<style>
    body{background: #ee2211}
    fieldset{margin:auto;width: 700px;background:#ffd740}
    .form-element label{
    display: inline-block;
    width: 150px;
    }
</style>

<form  action = "depositingmoney.php" method ="get">
<center>
<fieldset><legend>DEPOSIT</legend>
<?php   
//require 'database.php';
    //$username= $_SESSION["screenname"];
    //$amount= $_SESSION["amount"];

    print "Welcome $username <br>";
    print "Balance: $ $amount <br><br>";
?>

<div class="form-element">
    <label for="amount">Enter Amount</label>
    <input type = "text" name="amount"  placeholder="Enter Amount"/>
    <input type = "submit">
</div>
</center>
</form>
