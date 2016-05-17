<?php

if(isset($_FILES['image'])){
	$name = $_FILES['image']['name'];
	$tmpName = $_FILES['image']['tmp_name'];

	move_uploaded_file($tmpName, "../userImages/".$name);

}
	include "insertNav.php";
?>