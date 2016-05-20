<?php
require_once "../database/db.php";


$id               = $_REQUEST['id'];
$newName          = $_REQUEST['newName'];
$newEmail         = $_REQUEST['newEmail'];
$newPassword      = $_REQUEST['newPassword'];
$resubmitPassword = $_REQUEST['resubmitPassword'];

if($newName && $newEmail && $newPassword){
	if($newPassword==$resubmitPassword){
		if(strlen($newPassword) > 4){
			$md5 = md5($newPassword);
			mysqli_query($db, "UPDATE users SET userName='$newName', email='$newEmail', password='$md5'  WHERE id='$id'");
			echo "changes made";
			header("refresh:3, url=../loggedIn.php");
		}else{
			echo "Your passwords is less then 5 charachters long. Please try again.";
			header("refresh:3 url=../loggedIn.php");
		}
	}else{
		echo "Your passwords do not match! Please try again.";
		header("refresh:3, url=../loggedIn.php");
	}
}else{
	echo "Please fill out the form and try again";
	header("refresh:3, url=../loggedIn.php");
}

mysqli_close($db);

?>