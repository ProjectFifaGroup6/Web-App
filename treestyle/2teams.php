<head><link rel="stylesheet" href="../style/main.css">
</head>
<div  id="c3">

	<?php 

	require("../treestyle/getteams.php");
	
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


<div id="winnar">
	<h4>Winner</h4>
</div>







