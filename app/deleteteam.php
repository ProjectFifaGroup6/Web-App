<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>delete</title>
</head>
<body>
	<a href="../public/teams.php"></a>
</body>
</html>


<?php
require("../database/databaseConnector.php");

$team = $_GET['id'];
$updateplayers = "UPDATE `tbl_players` SET `team_id` = NULL WHERE `tbl_players`.`id` = '$team'";
$delete = "DELETE FROM `tbl_teams` WHERE `id` = '$team'";
$database->query($updateplayers);
$database->query($delete);

header("Location: ../public/teams.php");


?>