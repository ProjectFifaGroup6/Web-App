<?php 
require("../database/databaseConnector.php");


$sql = $database->query("SELECT COUNT(*) FROM `tbl_winners`");
$sql->execute();
$winners_number = $sql->fetchColumn(); 

for ($i = 0;$i < $winners_number; $i++){

		
	$sql = $database->query("SELECT `team_id` FROM tbl_winners LIMIT 1 OFFSET " . $i);
	$sql->execute();
	$winner[$i] = $sql->fetchColumn();

}

$sql = $database->query("SELECT `start_time` FROM `tbl_matches` WHERE `id`=( SELECT max(`id`) FROM `tbl_matches`)");
$sql->execute();
$lastTime = $sql->fetchColumn();


if($winners_number >= 2){
	$time = 1500;
    $database->query("INSERT INTO `tbl_matches` (`id`, `team_id_a`, `team_id_b`, `score_team_a`, `score_team_b`, `start_time`) VALUES (NULL, '".$winner[0]."', '".$winner[1]."', NULL, NULL, ADDTIME('".$lastTime."','".$time."'))");
    $database->query("DELETE FROM `tbl_winners`");

}




?>