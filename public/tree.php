<head>
	<link rel="stylesheet" href="../style/main.css">
</head>


<?php 



require("../database/databaseConnector.php");

$sql = $database->query("SELECT COUNT(*) FROM `tbl_teams`");
$sql->execute();


$teams_number = $sql->fetchColumn(); ;


if($teams_number == 8){
include('../treestyle/8teams.php');
}else if ($teams_number == 6){
include('../treestyle/6teams.php');	
}else if ($teams_number == 4){
include('../treestyle/4teams.php');			
}else if ($teams_number == 2){
include('../treestyle/2teams.php');	
}else{
	echo 'choose number between 2 to 8';
}


?>