<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['userName'];
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
	
	if(strlen($password) > 4){
		if($password === $secondPassword){

			
			$userNameCheck = mysqli_query($db, "SELECT userName FROM users WHERE username='$userName'");
			$count = mysqli_num_rows($userNameCheck);
		
			$emailCheck = mysqli_query($db, "SELECT email FROM users WHERE email='$email'");
			$emailCount = mysqli_num_rows($emailCheck);

				if($emailCount != 0){
					
					echo "That email is already taken! Please type another name.";
				}else{
			
					if($count != 0){
						
						echo "That username is already taken! Please type another name.";	
						
					} else {

							$passmd5 = md5($password);
							mysqli_query($db, "INSERT INTO users(firstName, lastName, userName, password, age, email) VALUES('$firstName','$lastName','$userName','$passmd5','$age','$email')");
							echo "Thank you for registering! You may now login!";
							header("refresh:2, url=index.php");
					
					}
				}
			

			} else {
				
			echo "The passwords you have entered do not match!";
		}
	} else {
		echo "The password you entered is to short! Plese enter a password between 5 and 15 charachters long.";
	}
} else {
	
	echo "You did not fill out the entire form!";

};

mysqli_close($db);
?>