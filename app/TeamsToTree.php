<?php 

require("../database/databaseConnector.php");

$get_matches = $database->query("SELECT * FROM `tbl_matches`");
$get_matches->execute();
$matches = $get_matches->fetchAll();

foreach ($matches as $match) {
	


}
?>
