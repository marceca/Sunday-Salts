<?php

include_once '../database/db.php';
include_once 'session.php';

$user = mysqli_query($db, "SELECT * FROM users WHERE username = '".$_SESSION['username']."'");

echo "<table width='90%' align=center border=2>";
echo "<tr><td width='40%' align=center bgcolor='FFFF00'>ID</td>
	  <td width='40%' align=center bgcolor='FFFF00'>NAME</td>
	  <td width='40%' align=center bgcolor='FFFF00'>EMAIL</td>
	  <td width='40%' align=center bgcolor='FFFF00'>PASSWORD</td>";


while($row = $user->fetch_assoc()){
	$id       = $row['id'];
	$name     = $row['userName'];
	$email    = $row['email'];
	$password = $row['password'];
	
	echo "<tr><td align=center>
		  <a href=\"edit.php?id=$id&userName=$name&email=$email&password=$password\">$id</a></td>
		  <td>$name</td><td>$email</td><td>$password</td></tr>";
	$user = mysqli_query($db, "SELECT * FROM users WHERE username = '".$id."'");
}

echo "</table>";

mysqli_close($db);
?>