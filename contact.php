<html>
	<head>
		<meta charset = "UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<title>Welcome to Sunday Salts</title>
		<link type = "text/css" rel = "stylesheet" href = "css/sundaySalts.css"></link>
		<link type = "text/css" rel = "stylesheet" href = "css/contact.css"></link>
	</head>
	
	<body>
		<div id="header"><h2 id="fontSize" >Contact Information</h2></div>
			<?php require 'php/nav.php'; ?>
		<div id="mid">
			<div id="contactDiv">
					<p>Number: 555-555-5555</p>
					<p>Address: 10-10 phillip st</p>
					<p>City: oakland</p>
					<p>State: New Jersey</p>
					<p>Email: SundaySalts@gmail.com</p>
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
	</body>
<html>