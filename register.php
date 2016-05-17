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
				<form id = "formID"  ENCTYPE="multipart/form-data" action="insert.php" method="post">
					<table id="tableID">
						<tr><td width="10%">First name:</td><td> <input type="text" name="firstName" maxlength= "15" /></td></tr>
						<tr><td width="10%">Last name:</td><td> <input type="text" name="lastName" maxlength= "15" /></td></tr>
						<tr><td width="10%">Username:</td><td> <input type="text" name="userName" maxlength= "15" /></td></tr>
						<tr><td width="10%">Password:</td><td> <input type="password" name="password" maxlength= "15" /></td></tr>
						<tr><td width="10%">Resubmit Password :</td><td> <input type="password" name="passwordresubmit" maxlength= "15" /></td></tr>
						<tr><td width="10%">Age: </td><td><input type="text" name="age" maxlength= "15" /></td></tr>
						<tr><td width="10%">Email: </td><td><input type="email" name="email" maxlength= "50" /></td></tr>
					</table>
					<br />
					<br />
						<input id="inputID" type="submit" name="submit" value="Submit!" />
				</form>
			</div>
		</div>
		<div id="rightPanel"></div>
		<div id="footer">&copy;Sunday Salts</div>
		<script type = "text/javascript" src="jquery/highlight.js"></script>
	</body>
</html>