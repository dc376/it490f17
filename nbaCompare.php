#!/usr/bin/php
<?php



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
  if(in_array("Boston Celtics",$rows)) {
    echo "winner";
  }
  
}



$team1Pick = "SELECT team1_pick AS var FROM user_bballbet";
$team1Result = $sql->query($team1Pick);
$final1 = $team1Result->fetch_object()->var;



$team2Pick = "SELECT team2_pick AS var FROM user_bballbet";
$team2Result = $sql->query($team2Pick);
$final2 = $team2Result->fetch_object()->var;


$team3Pick = "SELECT team3_pick AS var FROM user_bballbet";
$team3Result = $sql->query($team3Pick);
$final3 = $team3Result->fetch_object()->var;
//echo $final3;



foreach($rows as $value) 
{
if($value[0] == $final1)

{
echo "pick 1 won!";
}

if($value[0] == $final2)
{
echo "pick 2 won";
}
if($value[0] == $final3)
{
echo "pick 3 won";
}

}
   


$result->close();
$sql->close();
return $rows;

?>
