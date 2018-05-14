<?php 
	require("../treestyle/getteams.php");
	for($i = 0; $i < 8;$i++){
	$poule= $database->query("UPDATE `tbl_teams` SET `poule_id` = '1' WHERE `tbl_teams`.`name` = '".$Team[$i]."'"); 
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
<h4>Winner</h4>
<h5>vs</h5>
<h4>Winner</h4>
</div>	
<div class="teams_part" id="part2">
<h4>Winner</h4>
<h5>vs</h5>
<h4>Winner</h4>
</div>
</div>

<div  id="c3">
<div class="teams_part" id="part1">
<h4>Winner</h4>
</div>	
<h5>vs</h5>
<div class="teams_part" id="part2">
<h4>Winner</h4>
</div>
</div>


<div id="winnar">
	<h4>Winner</h4>
</div>

