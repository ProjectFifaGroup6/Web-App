 <?php 
	error_reporting(0);
	echo '<div  id="c3">';
	require("../treestyle/getteams.php");

	for($i = 0; $i < 1; $i++){

	if(is_null($Team_a[$i])){
		$Team_a[$i] = "winner";
	}

	if(is_null($Team_b[$i])){
		$Team_b[$i] = "winner";
	}

	}

	
	$poule= $database->query("UPDATE `tbl_teams` SET `poule_id` = '1' WHERE `tbl_teams`.`name` = '".$Team[0]."'"); 
	$poule2= $database->query("UPDATE `tbl_teams` SET `poule_id` = '2' WHERE `tbl_teams`.`name` = '".$Team[1]."'");

	echo '<div class="teams_part" id="part1">';
	echo '<h4>'.$Team[0].'</h4>';
	echo '</div>	';
	echo '<h5>vs</h5>';
	echo '<div class="teams_part" id="part2">';
	echo '<h4>'.$Team[1].'</h4>';
	echo '</div>';
	?>

</div>


<?php 
$teamscount = 2;
require("../app/getlastwinner.php");
?>

<div id="winnar">
	<?php
	echo '<h4>'.$lastwinner.'</h4>';
	?>
</div>

<?php
        require("../app/totalscore.php");
?>
	<h1 class="footerpush"></h1>







