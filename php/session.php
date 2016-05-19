<?php
session_start();

if(!isset($_SESSION['username'])){
	
	echo "Access denied!";
	header("refresh:3; url=index.php");
	exit;
	
}else{
	
	echo $_SESSION['name']."'s profile<br /><a href='logout.php'>Logout</a>";
	
}

?>