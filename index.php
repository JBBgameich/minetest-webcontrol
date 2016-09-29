<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="lib/css/w3.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		
		<title>Minetest Server Web Login</title>
	</head>
	<body>
	<div id="navbar">
		<ul class="w3-navbar w3-card-2 w3-dark-grey">
			<li><a href=""><i class="fa fa-home w3-xlarge"></i> Minetest Server Web Control</a></li>
			<li class="w3-right"><a href="https://gamerbude.github.io">About</a></li>
		</ul>
	</div>
	<div style="width: 600px" class="w3-card-2 w3-padding w3-display-middle" id="login">
		
		<div class="w3-container w3-blue">
		<img class="w3-right" src="res/img/Minetest-logo.svg" height="60" alt="" ><h2>Login</h2>
		</div>
			
		<form class="w3-container">

		<label>Minetest Server Username</label>
		<input class="w3-input w3-border w3-round" type="text">

		<label>Minetest Server Passsword</label>
		<input class="w3-input w3-border w3-round" type="text">

		</form>
		<div class="w3-container w3-padding w3-center">
			<a class="w3-btn w3-blue" href="dashborad.php">Login</a> <!--Will be changed soon to php form-->
			<a class="w3-btn w3-blue" href="register.php">Register</a>
		</div>
	</div>
	</body>
</html>
