<?php

$username = $_POST['username'];
$password = md5($_POST['password']);

if($username && $password){
	
	$db = mysqli_connect('localhost', 'root', '', 'sundaysalts');

	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$query = mysqli_query($db, "SELECT * FROM users WHERE userName = '$username'");
	$numrows = mysqli_num_rows($query);
	
	if($numrows != 0){
		while($row = mysqli_fetch_assoc($query)){
			$dbusername = $row['userName'];
			$dbpass = $row['password'];		
		}
		if($username==$dbusername && $password==$dbpass){
			
			header("location: loggedIn.php");
			
		} else {
			echo "The username or password you have entered is incorrect!";
		}
		
		
	} else {
		echo "Sorry, You need to register first!";
	}
	
} else {
	echo "You have to type in a username and password!";
}

?>