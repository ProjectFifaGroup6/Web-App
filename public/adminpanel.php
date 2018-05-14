<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin-panel</title>
	<link rel="stylesheet" href="../style/main.css">
</head>
<body>
	<h1>Admin:</h1>
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="../app/results.php">Results</a></li>
	<li><a href="tree.php">scores</a></li>
	<li><a href="teams.php">Teams</a></li>
	<li><a href="tree.php">MatchesTree</a></li>

	</ul>
	<form action="" method="post">
	<input type="submit" value="logout" name="logout">
	</form>
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