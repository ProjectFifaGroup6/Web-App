<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FIFA-Generetor</title>
	<link rel="stylesheet" href="../style/main.css">
</head>
<body>
	<header>
		<h2>FIFA-Generator</h2>
		<h3>HomePage</h3>
	</header>
	<div class="intro">
	<h1 id="Title">Welcome to FIFA-Generator</h1>

	<img class="homeimg" src="../img/home.jpg" alt="home">
	<div class="description">
	<h2 id="Title2">Create and mangement your own tournaments</h2>
	<h3 id="Title2">what are you waiting for!? start now</h3>
	<form action="" method="post">
		<input class="username" type="text" placeholder="Username" name="user" id="user">
		<br>
		<input class="password" type="password" placeholder="Enter Your Password" name="password" id="password">
		<br>
		<input class="loginbtn" type="submit" value="login" name="sub" id="sub">
	</form>
	</div>
	<p></p>
	<a class="nonuser" href="tree.php">or check the old tournaments</a>
	</div>

<h1 class="footerpush2"></h1>
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




if(isset($_POST['sub'])){

	$user = $_POST['user'];
	$password = $_POST['password'];

	if(empty($password) || empty($user)){

		echo 'please enter a password and a username to go further';
		
	}else{

		if($user == 'admin' && $password == 'admin'){

			$_SESSION['loggedin'] = true;
			header("Location: adminpanel.php");

		}else{

			echo 'Wrong password or username';
		}
	}


}








?>


