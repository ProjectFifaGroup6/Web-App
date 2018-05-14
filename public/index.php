<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FIFA-Generetor</title>
	<link rel="stylesheet" href="../style/main.css">
</head>
<body>
	
	<div class="intro">
	<h1>Welcome to FIFA-Generator</h1>
	<h2>Create and mangement your own tournaments</h2>
	<h3>what are you waiting for!? start now</h3>
	<form action="" method="post">
		<input type="text" placeholder="Username" name="user" id="user">
		<input type="password" placeholder="Enter Your Password" name="password" id="password">
		<input type="submit" value="login" name="sub" id="sub">
	</form>
	<p></p>
	<a href="">or check the old tournaments</a>
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


