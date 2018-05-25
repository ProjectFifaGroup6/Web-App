<?php

require('../database/databaseconnector.php');

$teams_sql = $database->query("SELECT COUNT(`team_id_a`) from `tbl_matches`");
$teams_sql->execute();
$teams_count = $teams_sql->fetchColumn();




for($i = 0; $i < $teams_count ; $i++){

	$sql = $database->query("SELECT `team_id_a` FROM `tbl_matches` ORDER by `start_time` LIMIT 1 OFFSET ".$i);
	$sql->execute();
	$Teamid_a[$i] = $sql->fetchColumn();

	$sql2 = $database->query("SELECT `name` from `tbl_teams` where `id` = '".$Teamid_a[$i]."'");
	$sql2->execute();
	$Team_a[$i] = $sql2->fetchColumn();

	

	
}

for($i = 0; $i < $teams_count ; $i++){

	$sql = $database->query("SELECT `team_id_b` FROM `tbl_matches` ORDER by `start_time` LIMIT 1 OFFSET " .$i);
	$sql->execute();
	$Teamid_b[$i] = $sql->fetchColumn();

	$sql2 = $database->query("SELECT `name` from `tbl_teams` where `id` = '".$Teamid_b[$i]."'");
	$sql2->execute();
	$Team_b[$i] = $sql2->fetchColumn();
	
		
}



?>