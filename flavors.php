<html>
	<head>
		<meta charset = "UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<title>Welcome to Sunday Salts</title>
		<link type = "text/css" rel = "stylesheet" href = "css/sundaySalts.css"></link>
		<link type = "text/css" rel = "stylesheet" href = "css/flavor.css"></link>
	</head>
	
	<body>
		<div id="header"><h2 id="fontSize">Sunday Salts</h2></div>
			<?php include 'php/nav.php';?>
		<div class="center">
			<div id="mid">
				<h3>Please choose a flavor to see more.</h3>
				<div>
					<a id="pistachio" href="#">Pistachio</a>
					<a id="strawberry" href="#">Strawberry</a>
					<a id="blueberry" href="#">Blueberry</a>
				</div>
				<div id="flavorPosition">
					<div id="flavorImgPosition">
						<div id="flavorImg"></div>
					</div>
					<div id="flavorDescription"></div>
				</div>
			</div>
		</div>
		<div class="dots" id="rightPanel">
			<h4>Login</h4>
			<div class="login">
				<form action="#" method="post">
					Username:<br/>
					<input class="highlight" type="text" name="username" size=10 /><br /><br />
					Password:<br/>
					<input class="highlight" type="password" name="password" size=10 /><br /><br />
					<input type="button" value="submit">
				</form>
			</div>
			<div>
				<a href="register.php"><h4>Register</h4></a>
			</div>
		</div>
		<div class="dots" id="footer">&copy;Sunday Salts</div>
		<script src="jquery/highlight.js"></script>
		<script src="jquery/flavorDescription.js"></script>
	</body>
<html>