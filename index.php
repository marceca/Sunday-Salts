<html>
	<head>
		<meta charset = "UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<title>Welcome to Sunday Salts</title>
		<link type = "text/css" rel = "stylesheet" href = "css/sundaySalts.css"></link>
	</head>
	
	<body>
		<?php require 'database/db.php'; ?>
		<div id="header"><h2 id="fontSize">Sunday Salts</h2></div>
			<?php include 'php/nav.php';?>
		<div id="mid">
			<div id="mainImgMove">
				<img src="images/allSundaySalts" id="mainImgResize" />
			</div>
			<p class="center">This is center stage</p>
		
		
		</div>
		<div class="dots" id="rightPanel">
			<h4>Login</h4>
			<div class="login">
				<form action="login.php" method="post" >
					Username:<br/>
					<input class="highlight" type="text" name="username" size=10 /><br /><br />
					Password:<br/>
					<input class="highlight" type="password" name="password" size=10 /><br /><br />
					<input type="submit" value="login">
				</form>
			</div>
			<div>
				<a href="register.php"><h4>Register</h4></a>
			</div>
		</div>
		<div class="dots" id="footer">&copy;Sunday Salts</div>
		<script src="jquery/highlight.js"></script>
	</body>
<html>