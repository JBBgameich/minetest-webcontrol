<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="lib/css/w3.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="lib/css/login.css">
		<link rel="stylesheet" href="lib/css/page.css">

		<title>Minetest Server Web Login</title>
	</head>
	
	<body class="bg-wallpaper">
	<div id="navbar">
		<ul class="w3-navbar w3-card-2 w3-dark-grey">
			<li><a href=""><i class="fa fa-home w3-xlarge"></i> Minetest Server Web Control</a></li>
			<li class="w3-right"><a href="https://gamerbude.github.io">About</a></li>
		</ul>
	</div>
	
	<div class="w3-padding-128">
		<div class="w3-card-2 w3-padding w3-white login-center" id="login">
			
			<div class="w3-container w3-blue">
			<img class="w3-right" src="res/img/Minetest-logo.svg" height="60" alt=""><h2>Login</h2>
			</div>
				
			<form class="w3-container" action="passwd.php" method="post">
			Minetest Server Admin Username: <input class="w3-center w3-input w3-border w3-round" type="text" name="username">
			Minetest Server Passsword: <input class="w3-input w3-border w3-round" type="password" name="pwd">
			
			<div class="w3-container w3-padding w3-center">
			
			<input class="w3-btn w3-blue" type="submit" name="login" value="Login">
			<a class="w3-btn w3-blue" href="register.php">Register</a>
			
			</form>
				
			</div>
		</div>
	</div>
	</body>
</html>
