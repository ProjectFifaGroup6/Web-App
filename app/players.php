<form action="" method="post">

<?php 
 for ($i = 0; $i < 5; $i++){

?>

<select name="playersid[]" >
  <option value="" disabled selected>Select a player</option>
  <?php
  $getplayers = $database->query("SELECT * FROM `tbl_players` where `team_id` is NULL");
    $getplayers->execute();
    $players = $getplayers->fetchAll();
    foreach($players as $player){
    echo '<option value="'. $player['first_name'] .'" >  '. $player['first_name'].'</option>';
    }
   ?>
</select>
<?php  }  ?>

<select name="playersid[]" >
  <option value="" disabled selected>Select a reserve</option>
  <?php
  $getplayers = $database->query("SELECT * FROM `tbl_players` where `team_id` is NULL");
    $getplayers->execute();
    $players = $getplayers->fetchAll();
    foreach($players as $player){
    echo '<option value="'. $player['first_name'] .'" >  '. $player['first_name'].'</option>';
    }
   ?>
</select>



<input type="submit" name="apply" id="apply" value="apply">
</form>



<?php



//require("../app/players.php");


if(isset($_POST['apply']) && !empty($_POST['playersid'])){


foreach ($_POST['playersid'] as $playerid) {

  
  $sql = "UPDATE `tbl_players` SET `team_id` = '$teamid' WHERE `tbl_players`.`first_name` = '$playerid' ";
  $database->query($sql);
}



}


?>




