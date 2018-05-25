<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin-panel</title>
	<link rel="stylesheet" href="../style/main.css">
</head>
<body>
	<header>
		<h2>FIFA-Generator</h2>
		<h3>Admin</h3>
	</header>
	
	<h1 id="Title" class="smalltitle">Control-Panel:</h1>
	<div class="panel">	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="../app/results.php">Results</a></li>
	<li><a href="teams.php">Teams</a></li>
	<li><a href="tree.php">MatchesTree</a></li>
	</ul>
	</div>
	<form action="" method="post">
	<input class="loginbtn"	type="submit" value="logout" name="logout">
	</form>
	<h1 class="footerpush"></h1>
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



<?php 

session_start();



if (isset($_POST['logout'])) {
$_SESSION['loggedin'] = false;
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

}else{
   header("Location: index.php");
}


?>