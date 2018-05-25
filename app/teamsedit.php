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
echo '<h1 id="Title"> Team name : </h1>';
echo '<h2 id="Title">' . $team . '</h2>';
echo '<br>';
echo '<table calss="teams" id="teamsedit">';
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

<div class="footer">
        <h1>FIFA-Generator</h1>
        <p>Radius group 6</p>
        <div class="footer-names">
            <P>This project was created by:</P>
            <p id="Allaith">Allaith</p>
            <p id="Bas">Bas</p>
            <p id="Thijs">Thijs</p>
            <p id="Thomas">Thomas</p>
        </div>
    </div>