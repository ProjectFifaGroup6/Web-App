<head>
	<link rel="stylesheet" href="../style/main.css">
</head>


<?php 

include('../public/teams.php');

require("../database/databaseConnector.php");

$team = $_GET['name'];
$teamid = $_GET['id'];
$memberssql = $database->query("SELECT * FROM `tbl_players` WHERE `team_id` = '$teamid'");
$memberssql->execute();
$members = $memberssql->fetchAll();
echo '<h1> Team name : </h1>';
echo '<h2>' . $team . '</h2>';
echo '<br>';
echo '<table calss="teams">';
echo '<tr>';
echo '<th>member:</th>';
echo '<th>Delete member:</th>';
echo '</tr>';

foreach($members as $member){
echo '<tr>';
echo '<td>'.$member['first_name'].'</td>';
echo '<td> <a href="../app/deletemember.php?id='.$member['id'].'">Remove</a></td>';
echo '</tr>';

}
echo '</table>';


include('../app/players.php');
?>
