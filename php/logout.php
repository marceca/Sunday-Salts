<?php

session_start();

session_destroy();

echo "session over";

header("refresh:3; url=../index.php");


?>