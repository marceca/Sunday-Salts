<html>
	<head>
		<meta charset = "UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<title>Register</title>
		<link type = "text/css" rel = "stylesheet" href = "css/register.css"></link>
	</head>
	
	<body>
		<div id="header"><h2 id="fontSize">Sunday Salts</h2></div>
			<?php include 'php/nav.php';?>
		<div id="topRightBlock"></div>
		<div id="mid">
			<h2 class="center">Please fill out the information below</h2>
			<div id= "registerForm">
				<form action="php/insert.php" method="post">
					First name: <input type="text" name="firstName" /><br /><br />
					Last name: <input type="text" name="lastName" /><br /><br />
					Username: <input type="text" name="username" /><br /><br />
					Password: <input type="password" name="password" /><br /><br />
					Resubmit Password <input type="password" name="passwordresubmit" /><br /><br />
					Age: <input type="text" name="age" /><br /><br />
					Email: <input type="email" name="email" /><br /><br />
					<input type="submit" value="Submit!" />
				</form>
			</div>
		</div>
		<div id="rightPanel"></div>
		<div id="footer">&copy;Sunday Salts</div>
		<script type = "text/javascript" src="jquery/highlight.js"></script>
	</body>
</html>