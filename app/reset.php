<?php
require("../database/databaseConnector.php");
$database->query("DELETE FROM `tbl_winners`;"."DELETE FROM `tbl_matches`;"."DELETE FROM `tbl_teams`;");
header("Location: ../app/results.php");


?>