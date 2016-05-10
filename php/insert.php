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
	if($password != $secondPassword){
		die("Your passwords are not the same!");
	}
	mysqli_query($db, "INSERT INTO users(firstName, lastName, username, password, age, email) VALUES('$firstName','$lastName','$userName','$password','$age','$email')");
		
} else {
	
	echo "You did not fill out the entire form!";
	

};

mysqli_close($db);

?>

<html>
	<head>
		<meta charset = "UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<title>Welcome to Sunday Salts</title>
		<link type = "text/css" rel = "stylesheet" href = "../css/sundaySalts.css"></link>
	</head>
	<body>
		<div id="header"><h2 id="fontSize">Sunday Salts</h2></div>
			<?php include 'insertNav.php';?>
		<div id="mid">
			<div id="mainImgMove">
				<img src="../images/allSundaySalts" id="mainImgResize" />
			</div>
			<p class="center">Thank you for registering click a link above to continue onto the site!</p>
		
		
		</div>

			<div>
				<a href="register.php"><h4>Register</h4></a>
			</div>
		</div>
		<div class="dots" id="footer">&copy;Sunday Salts</div>
		<script src="jquery/highlight.js"></script>
	</body>
</html>