#!/usr/bin/php

<?php


require '/home/dean/git/jawn/database.php';


//read json file that was pulled using tester.php(json format)

$json = file_get_contents('/home/dean/git/jawnoutput2.txt');

//decode json

$json_data = json_decode($json, true);



//parse ze data

for($i=0; $i<19; $i++)

	{

		//QB DATA
		$qb = $json_data['passing'][$i]['name'];
		$passYards = $json_data['passing'][$i]['yds'];
		$qbPos = $json_data['passing'][$i]['position'];
		$teamNameQB = $json_data['passing'][$i]['team']['name'];
		$teamCityQB = $json_data['passing'][$i]['team']['market'];



		//RB DATA
		$rb = $json_data['rushing'][$i]['name'];
		$rushYards = $json_data['rushing'][$i]['yds'];
		$rbPos = $json_data['rushing'][$i]['position'];
		$teamNameRB = $json_data['rushing'][$i]['team']['name'];
		$teamCityRB = $json_data['rushing'][$i]['team']['market'];


		//WR DATA
		$wr = $json_data['receiving'][$i]['name'];
		$recYards = $json_data['receiving'][$i]['yds'];
		$wrPos = $json_data['receiving'][$i]['position'];
		$teamNameWR = $json_data['receiving'][$i]['team']['name'];
		$teamCityWR = $json_data['receiving'][$i]['team']['market'];

		//INSERT STATEMENTS..gets info from above, still gotta see how to insert each individually
		$conn    = Connect();
		//qbs
		$query1   = "INSERT into football_stats (player_name,position,team_location,team_name,passing_yards,running_yards,receiving_yards) VALUES('" . $qb . "','" . $qbPos . "','" . $teamCityQB . "','" . $teamNameQB . "','" . $passYards . "','" . 0 . "','" . 0 . "')";
		//rbs
		$query2   = "INSERT into football_stats (player_name,position,team_location,team_name,passing_yards,running_yards,receiving_yards) VALUES('" . $rb . "','" . $rbPos . "','" . $teamCityRB . "','" . $teamNameRB . "','" . 0 . "','" . $rushYards . "','" . 0 . "')";
		//wrs
		$query3   = "INSERT into football_stats (player_name,position,team_location,team_name,passing_yards,running_yards,receiving_yards) VALUES('" . $wr . "','" . $wrPos . "','" . $teamCityWR . "','" . $teamNameWR . "','" . 0 . "','" . 0 . "','" . $recYards . "')";
		$success = $conn->query($query1);
		$success2 = $conn->query($query2);
		$success3 = $conn->query($query3);
		echo "success";



		//TEST TO SEE IF DATA IS PULLED CORRECTLY
		//print_r($qb . " from " . $teamCityQB . " " . $teamNameQB . " " . " threw for " . $passYards . " yards" . "\n" . $qbPos . $teamNameRB . $teamCityRB . $teamNameWR . $teamCityWR);
		//print_r( "\n" . $rb . " ran for " . $rushYards . " yards" . "\n" . $rbPos);
		//print_r( "\n" . $wr . " caught for " . $recYards . " yards" . "\n" . $wrPos);


		}
