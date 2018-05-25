<?php 
require("../database/databaseConnector.php");


$sql = $database->query("SELECT COUNT(*) FROM `tbl_teams`");
$sql->execute();
$teams_number = $sql->fetchColumn(); 

for ($i = 0;$i < $teams_number; $i++){

		
	$sql = $database->query("SELECT `id` FROM tbl_teams LIMIT 1 OFFSET " . $i);
	$sql->execute();
	$Team[$i] = $sql->fetchColumn();
}








if($teams_number >= 2 && $teams_number <= 8){

$loopnumber = $teams_number / 2;

	for($i = 0; $i < $loopnumber; $i++){
		$num2 = $i + $i + 1;
		$num = $i + $i;
		$time_plus = $i;
		$time = 1500 * $time_plus;
		$database->query("INSERT INTO `tbl_matches` (`id`, `team_id_a`, `team_id_b`, `score_team_a`, `score_team_b`, `start_time`) VALUES (NULL, '".$Team[$num]."', '".$Team[$num2]."', NULL, NULL, ADDTIME(CURRENT_TIME(),'".$time."'))");

}
}else{
	echo 'There is no teams yet';
}


?>
