<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Results</title>
	<link rel="stylesheet" href="../style/main.css">

</head>
<body>
	
<h1>Results:</h1>

<table class="teams">

		<tr>
            <th>Team1:</th>
            <th>Scores</th>
            <th>Team2:</th>
	    </tr>

<?php

require("../database/databaseConnector.php");





			$getitems = $database->query("SELECT * FROM `tbl_matches` ORDER BY `tbl_matches`.`team_id_a` ASC");
            $getitems->execute();
            $items = $getitems->fetchAll();



            foreach($items as $item){

            	$findteam = $database->query("SELECT `name` From `tbl_teams` WHERE `id` = '".$item['team_id_a']."' "); 
            	$findteam->execute();   
            	$team = $findteam->fetchColumn();   
            	$findteam2 = $database->query("SELECT `name` From `tbl_teams` WHERE `id` = '".$item['team_id_b']."' "); 
            	$findteam2->execute();   
            	$team2 = $findteam2->fetchColumn();  

                echo '<tr>';
                echo '<td>' . $team . '</td>';
                echo '<td>' . $item['score_team_a'] . ' - ' . $item['score_team_b'] . '</td>';
                echo '<td>' . $team2 . '</td>';
                echo '</tr>'; 
            }
            echo'</table>';

            require("../app/Timelist.php");
?>

<h1></h1>











<?php
echo '<h2>Add scores :</h2>';
echo '<ul>';
foreach ($items as $item ) {

    $findteam = $database->query("SELECT `name` From `tbl_teams` WHERE `id` = '".$item['team_id_a']."' "); 
    $findteam->execute();   
    $team = $findteam->fetchColumn();   
    $findteam2 = $database->query("SELECT `name` From `tbl_teams` WHERE `id` = '".$item['team_id_b']."' ");
    $findteam2->execute();   
    $team2 = $findteam2->fetchColumn();

echo '<li><a href="score.php?id1='.$item['team_id_a'].'&id2='.$item['team_id_b'].'">'.$team.' VS '.$team2.'</a></li>';
}
echo '</ul>';

?>
</body>
</html>