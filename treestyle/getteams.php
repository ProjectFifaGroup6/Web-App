<?php 

require("../database/databaseConnector.php");

for ($i = 0;$i < 8 ; $i++){

		
		$sql = $database->query("SELECT `name` FROM `tbl_teams` LIMIT 1 OFFSET " . $i);
		$sql->execute();
		$Team[$i] = $sql->fetchColumn();

	}
?>