
<?php 
	error_reporting(0);
	require("../treestyle/getteams.php");
	require("../app/getwinners.php");

	for($i = 0; $i < 4;$i++){
	$poule= $database->query("UPDATE `tbl_teams` SET `poule_id` = '1' WHERE `tbl_teams`.`name` = '".$Team[$i + 1]."'"); 
	$poule2= $database->query("UPDATE `tbl_teams` SET `poule_id` = '2' WHERE `tbl_teams`.`name` = '".$Team[$i]."'"); 
	}

	for($i = 0; $i < 7; $i++){

	if(is_null($Team_a[$i])){
		$Team_a[$i] = "winner";
	}

	if(is_null($Team_b[$i])){
		$Team_b[$i] = "winner";
	}
	}

	

?>

<div class="tree" id="c1">

<div class="teams_part" id="part1">
	<?php 
echo'<h4>'.$Team[0].'</h4>';
echo'<h5>VS</h5>';
echo'<h4>'.$Team[1].'</h4>';
	?>	
</div>

<div class="teams_part" id="part2">
	<?php 
echo'<h4>'.$Team[2].'</h4>';
echo'<h5>VS</h5>';
echo'<h4>'.$Team[3].'</h4>';
?>
</div>

<div class="teams_part" id="part3">
<?php 
echo'<h4>'.$Team[4].'</h4>';
echo'<h5>VS</h5>';
echo'<h4>'.$Team[5].'</h4>';
?>	
</div>

<div class="teams_part" id="part4">
	<?php 
echo'<h4>'.$Team[6].'</h4>';
echo'<h5>VS</h5>';
echo'<h4>'.$Team[7].'</h4>';
	?>	
</div>

</div>


	
<div id="c2">
<div class="teams_part" id="part1">
<?php 
echo '<h4>'.$Team_a[4].'</h4>';
echo '<h5>vs</h5>';
echo '<h4>'.$Team_b[4].'</h4>';
?>
</div>	
<div class="teams_part" id="part2">
<?php 
echo '<h4>'.$Team_a[5].'</h4>';
echo '<h5>vs</h5>';
echo '<h4>'.$Team_b[5].'</h4>';
?>
</div>
</div>

<div  id="c3">
<div class="teams_part" id="part1">
<?php
echo '<h4>'.$Team_a[6].'</h4>';
echo '</div>';	
echo '<h5>vs</h5>';
echo '<div class="teams_part" id="part2">';
echo '<h4>'.$Team_b[6].'</h4>';
?>
</div>
</div>

<?php 
$teamscount = 8;
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

