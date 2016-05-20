<?php

include "php/session.php";

?>

<html>
	<head>
		<title>Welcome to your profile!</title>
		<link type = "text/css" rel = "stylesheet" href = "css/sundaySalts.css"></link>
	</head>
	<body>
	<div id="header"><h2 id="fontSize">Sunday Salts</h2></div>
	<center>
	<?php include "php/loggedInNav.php"; ?>
	</center>
	<div id="mid">
		<form action="php/profilePic.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="image" />
			<input type="submit"/>
		</form>
		<a href="php/logout.php">Logout</a>
	</div>
	<div id="rightPanel"></div>
	<div id="footer">&copy;Sunday Salts</div>
	<script type = "text/javascript" src="jquery/highlight.js"></script>
	</body>
</html>