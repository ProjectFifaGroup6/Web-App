<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Results</title>
	<link rel="stylesheet" href="../style/main.css">

</head>
<body>
	<header>
        <h2>FIFA-Generator</h2>
        <h3>Results</h3>
    </header>
<div class="content">
    <div class="partone">
<table class="teams">

		<tr>
            <th>Team1:</th>
            <th>Scores</th>
            <th>Team2:</th>
	    </tr>

<?php

require("../database/databaseConnector.php");
require("../app/winners.php");




			$getitems = $database->query("SELECT * FROM `tbl_matches`");
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
            require("../app/totalscore.php");
            



?>
</div>











<div class="parttwo">
<?php
echo '<h2 id="Title2">Add scores :</h2>';
echo '<ul>';

 $getmatches = $database->query("SELECT * FROM `tbl_matches` WHERE `score_team_a` IS NULL and `score_team_b` IS NULL");
 $getmatches->execute();
 $av_matches = $getmatches->fetchAll();

foreach ($av_matches as $match ) {

    $findteam = $database->query("SELECT `name` From `tbl_teams` WHERE `id` = '".$match['team_id_a']."' "); 
    $findteam->execute();   
    $team = $findteam->fetchColumn();   
    $findteam2 = $database->query("SELECT `name` From `tbl_teams` WHERE `id` = '".$match['team_id_b']."' ");
    $findteam2->execute();   
    $team2 = $findteam2->fetchColumn();

echo '<li><a href="score.php?id1='.$match['team_id_a'].'&id2='.$match['team_id_b'].'">'.$team.' VS '.$team2.'</a></li>';
}
echo '</ul>';
echo '<br>';

//$sql = $database->query("SELECT COUNT(*) FROM `tbl_matches`");
//$sql->execute();
//$m_counts = $sql->fetchColumn();
//for($i = 0; $i < $m_counts; $i++){
//
//$gettotalscorea = $database->query("SELECT SUM(score_team_a) FROM tbl_matches WHERE team_id_a");
//$gettotalscorea = $database->query("SELECT SUM(score_team_b) FROM tbl_matches WHERE team_id_b");
//
//}
echo '<ul id="smallul">';
echo '<li><a href="reset.php">Reset DATA</a></li>';
echo '<li><a href="../public/teams.php">Back to teams edit</a></li>';
echo '<li><a href="../public/tree.php">Matches-Tree</a></li>';
echo '<li><a href="">Export All</a></li>';
echo '</ul>';
echo'</div>';



?>

</div>
<div class="footer">
        <h1>FIFA-Generator</h1>
        <p>Radius group 6</p>
        <div class="footer-names">
            <P>This project was created by:</P>
            <p id="Allaith">Allaith</p>
            <p id="Bas">Bas</p>
            <p id="Thijs">Thijs</p>
            <p id="Thomas">Thomas</p>
        </div>
    </div>
    
</body>
</html>