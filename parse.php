#!/usr/bin/php

<?php
require '/home/dean/git/jawn/database.php';
//read json file that was pulled using tester.php(json format)
$json = file_get_contents('/home/dean/git/jawn/output.txt');
//decode json
$json_data = json_decode($json, true);

//for loop to get data
for ($i=227;$i<237;$i++)

    {
        //if statement so the game required is a game that was actually played(helps forloop index)
        if($json_data['games'][$i]['status'] == "closed")

            {
                $homePts = $json_data['games'][$i]['home_points'];
                $awayPts = $json_data['games'][$i]['away_points'];
                $homeTeam = $json_data['games'][$i]['home']['name'];
                $awayTeam = $json_data['games'][$i]['away']['name'];
                //echo "the home team: " , $homeTeam, " scored: ", $homePts , " the away team: ", $awayTeam, " scored: " , $awayPts , "\n";
                
                
                
                //insert into the DB
                $conn    = Connect();
                $query1   = "INSERT into basketball_stats (home_team,away_team,home_score,away_score) VALUES('" . $homeTeam . "','" . $awayTeam . "','" . $homePts . "','" . $awayPts . "')";
                $success = $conn->query($query1);
                
            }
            
    }


?>
