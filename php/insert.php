<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['username'];
$password = $_POST['password'];
$secondPassword = $_POST['passwordresubmit'];
$age = $_POST['age'];
$email = $_POST['email'];

$db = mysqli_connect('localhost', 'root', '', 'sundaysalts');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if($firstName && $lastName && $userName && $password && $secondPassword && $age && $email){
	
	mysqli_query($db, "INSERT INTO users(firstName, lastName, username, password, age, email) VALUES('$firstName','$lastName','$userName','$password','$age','$email')");
	
	$registered = mysqli_affected_rows($db);
	
	echo $registered;
	
} else {
	
	echo "You did not fill out the entire form!";
	

};

mysqli_close($db);


?>