<?php


require("../database/databaseConnector.php");

$player = $_GET['id'];
$delete = "UPDATE `tbl_players` SET `team_id` = NULL WHERE `tbl_players`.`id` = '$player' ";
$database->query($delete);

header("Location: ../public/teams.php");







?>