<?php
session_start();

if($_POST){
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = md5($_POST['password']);

if($_SESSION['username'] && $_SESSION['password']){
	
	$db = mysqli_connect('localhost', 'root', '', 'sundaysalts');

	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$query = mysqli_query($db, "SELECT * FROM users WHERE userName = '".$_SESSION['username']."'");
	$numrows = mysqli_num_rows($query);
	
	if($numrows != 0){
		while($row = mysqli_fetch_assoc($query)){
			$dbusername = $row['userName'];
			$dbpass = $row['password'];		
		}
		if($_SESSION['username']==$dbusername && $_SESSION['password']==$dbpass){
			
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
}else{
	echo "Access denied!";
	exit;
}
?>