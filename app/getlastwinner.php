<?php

$sql = $database->query("SELECT COUNT(*) FROM `tbl_matches`");
$sql->execute();
$matchescount = $sql->fetchColumn(); 

if($matchescount >= $teamscount - 1){

$i = $teamscount - 2;
$sql2 = $database->query("SELECT `id` FROM `tbl_matches` ORDER BY `id` ASC LIMIT 1 OFFSET " . $i);
$sql2->execute();
$lastmatchid = $sql2->fetchColumn();
$sql3 = $database->query("SELECT `team_id_a` FROM `tbl_matches` WHERE `id` = '$lastmatchid'");
$sql3->execute();
$team_id_a = $sql3->fetchColumn();
$sql4 = $database->query("SELECT `team_id_b` FROM `tbl_matches` WHERE `id` = '$lastmatchid'");
$sql4->execute();
$team_id_b = $sql4->fetchColumn();
$sql5 = $database->query("SELECT `score_team_a` FROM `tbl_matches` WHERE `id` = '$lastmatchid'");
$sql5->execute();
$score1 = $sql5->fetchColumn();
$sql6 = $database->query("SELECT `score_team_b` FROM `tbl_matches` WHERE `id` = '$lastmatchid'");
$sql6->execute();
$score2 = $sql6->fetchColumn();

$sql7 = $database->query("SELECT `name` FROM `tbl_teams` WHERE `id` = '$team_id_a'");
$sql7->execute();
$name1 = $sql7->fetchColumn();

$sql7 = $database->query("SELECT `name` FROM `tbl_teams` WHERE `id` = '$team_id_b'");
$sql7->execute();
$name2 = $sql7->fetchColumn();



if($score1 > $score2){

	$lastwinner = $name1;
	
}else{

	$lastwinner = $name2;
}

}else{

	$lastwinner = "Winner";
}

?>