<?php

require("../database/databaseConnector.php");

$gettimelist = $database->query("SELECT * FROM `tbl_matches` WHERE `score_team_a` IS NULL and `score_team_b` IS NULL");
$gettimelist->execute();
$timelist = $gettimelist->fetchAll();





echo '<br>';
echo '<table class="tijdschema" >';
echo '<tr>';
echo '<th>Team1:</th>';
echo '<th>Team2:</th>';
echo '<th>Tijd</th>';
echo '</tr>';

foreach ($timelist as $item) {

$findteam = $database->query("SELECT `name` From `tbl_teams` WHERE `id` = '".$item['team_id_a']."' "); 
$findteam->execute();   
$team = $findteam->fetchColumn();   
$findteam2 = $database->query("SELECT `name` From `tbl_teams` WHERE `id` = '".$item['team_id_b']."' "); 
$findteam2->execute();   
$team2 = $findteam2->fetchColumn();  

echo '<tr>';
echo '<td>' . $team . '</td>';
echo '<td>' . $team2 . '</td>';
echo '<td>' . $item['start_time'] . '</td>';
echo '</tr>';
 

	
}
echo '</table>';


?>