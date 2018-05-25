
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teams</title>
	<link rel="stylesheet" href="../style/main.css">
</head>
<body>
<header>
		<h2>FIFA-Generator</h2>
		<h3>Teams</h3>
</header>	
<form action="" method="post">
  <input type="text" name="teamname" id="teamname" placeholder="teamname">
  <input type="submit" name="addteam" id="addteam" value="Add">
</form>


<?php

require("../database/databaseConnector.php");

if(isset($_POST['addteam'])){




$teamname = $_POST['teamname'];

if (!empty($teamname)){
$sql = "INSERT INTO `tbl_teams` ( `poule_id`, `name`, `created_at`, `deleted_at`) VALUES ('1', '$teamname', CURRENT_TIMESTAMP, NULL)";
$database->query($sql);
}
}


echo '<table id="teamsedit">';
echo '<tr>';
echo '<th>Teams:</th>';
echo '<th>Delete team:</th>';
echo '</tr>';
$getitems = $database->query("SELECT * FROM `tbl_teams`");
$getitems->execute();
$items = $getitems->fetchAll();

foreach($items as $item){
echo '<tr>';
echo '<td> <a href="../app/teamsedit.php?name='.$item['name'].'&id='.$item['id'].'">'. $item['name'] .'</a></td>';
echo '<td> <a href="../app/deleteteam.php?id='.$item['id'].'">Delete</a></td>';
echo '</tr>';
}
echo '</table>';

if(isset($_POST['done'])){

	$sql = $database->query("SELECT COUNT(*) FROM tbl_teams");
	$sql->execute();
	$count = $sql->fetchColumn();
	if($count % 2 == 0 && $count < 9 && $count > 1){
	require("../app/makematches.php");
	header("Location: ../app/results.php");
	}else{
		echo 'Teams number should be 2,4,6,8';
	}
}

?>
<form method="post">
	<input type="submit" name="done" id="done" value="done">
</form>

    
</body>
</html>


