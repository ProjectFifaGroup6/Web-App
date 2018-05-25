
<head>
	<title>Matches-Tree</title>
	<link rel="stylesheet" href="../style/main.css">
</head>
<header>
		<h2>FIFA-Generator</h2>
		<h3>Matches-Tree</h3>
</header>

<?php 



require("../database/databaseConnector.php");

$sql = $database->query("SELECT COUNT(*) FROM `tbl_teams`");
$sql->execute();


$teams_number = $sql->fetchColumn(); ;


if($teams_number == 8){
include('../treestyle/8teams.php');
}else if ($teams_number == 6){
include('../treestyle/6teams.php');	
}else if ($teams_number == 4){
include('../treestyle/4teams.php');			
}else if ($teams_number == 2){
include('../treestyle/2teams.php');	
}else{
	echo 'Add teams first';
}


?>

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