<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add scores</title>
	<link rel="stylesheet" href="../style/main.css">
</head>
<body>
	
<?php 
require("../database/databaseConnector.php");


$id1 = $_GET['id1'];
$id2 = $_GET['id2'];
$findteam = $database->query("SELECT `name` From `tbl_teams` WHERE `id` = '$id1' "); 
$findteam->execute();   
$team = $findteam->fetchColumn();   
$findteam2 = $database->query("SELECT `name` From `tbl_teams` WHERE `id` = '$id2' ");
$findteam2->execute();   
$team2 = $findteam2->fetchColumn();



echo '<h1>'.$team.'</h1>';
echo '<h2>. VS .</h2>';
echo '<h1>'.$team2.'</h1>';

echo '<h4>Edit scores:</h4>';

?>

<form action="" method="post">

	<?php
	echo'<label>'.$team.':</label>';
	?>
	<input id="score1" type="number" name="score1" min="0">
	<?php
	echo'<label>'.$team2.':</label>';
	?>
	<input id="score2" type="number" name="score2" min="0">	

	<h1></h1>


	<h3></h3>
	<input type="submit" name="submit" id="submit" value="SUBMIT">
</form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

	$score1 = $_POST['score1'];
	$score2 = $_POST['score2'];

	

	if($score1 > $score2){
		$winner = $database->query("INSERT INTO `tbl_winners` (`team_id`) VALUES ('$id1')");
	}else{
		$winner = $database->query("INSERT INTO `tbl_winners` (`team_id`) VALUES ('$id2')");
	}

	$addscore = $database->query("UPDATE `tbl_matches` SET `score_team_a` = '$score1'  where `tbl_matches`.`team_id_a` = '$id1' and `team_id_b` = '$id2';"."UPDATE `tbl_matches` SET `score_team_b` = '$score2'  where `tbl_matches`.`team_id_a` = '$id1' and `team_id_b` = '$id2'");

	header("Location: ../app/results.php");

	

}

?>



