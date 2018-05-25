<?php

require("../database/databaseConnector.php");


$allteamssql = $database->query("SELECT * FROM `tbl_teams`");
$allteamssql->execute();
$allteams = $allteamssql->fetchAll();

echo '<br>';
echo '<table class="totalscore" >';
echo '<tr>';
echo '<th>Poule:</th>';
echo '<th>Team Name :</th>';
echo '<th>Total score</th>';
echo '</tr>';

foreach ($allteams as $everyteam ) {


$gettotalscore1 = $database->query("SELECT SUM(score_team_a) FROM tbl_matches WHERE team_id_a = '".$everyteam['id']."'");
$gettotalscore1->execute();
$totalscore1 = $gettotalscore1->fetchColumn();
$gettotalscore2 = $database->query("SELECT SUM(score_team_b) FROM tbl_matches WHERE team_id_b = '".$everyteam['id']."'");
$gettotalscore2->execute();
$totalscore2 = $gettotalscore2->fetchColumn();
$teamscore = $totalscore1 + $totalscore2;

$getpoule = $database->query("SELECT `naam` FROM `tbl_poules` WHERE `id` = '".$everyteam['poule_id']."'");
$getpoule->execute();
$poul = $getpoule->fetchColumn();

echo '<tr>';
echo '<td>' . $poul. '</td>';
echo '<td>' . $everyteam['name'] . '</td>';
echo '<td>' . $teamscore . '</td>';
echo '</tr>';
	
}
echo '</table>';





















?>