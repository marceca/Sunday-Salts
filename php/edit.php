<html>
	<head>
		<title>Edit profile</title>
	</head>
	<body>
	
	<h4>Edit user: <?php echo $_REQUEST['userName']; ?></h4>
	
	<form method="POST" action="change.php">
		<table border="0" width="60%">
		<tr><td width="10%">Name:</td><td><input type="text" name="newName" value="<?php echo $_REQUEST['userName']; ?>"></td></tr>
		
		<tr><td width="10%">Email:</td><td><input type="text" name="newEmail" value="<?php echo $_REQUEST['email']; ?>"></td></tr>
		
		<tr><td width="10%">Password:</td><td><input type="password" name="newPassword" value=""></td></tr>
		<tr><td width="10%">Resubmit password:</td><td><input type="password" name="resubmitPassword" value=""></td></tr>
		</table>
		
		<br />
		
		<input type="submit" value="Save & Update" />
		<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" />
		
		</form>
		
	
	</body>
</html>