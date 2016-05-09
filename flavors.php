<?php

include_once('Database/db.php');

$query = "SELECT * FROM flavors WHERE amount = 1";

if($result = mysqli_query($db, $query)){

	while($row = mysqli_fetch_assoc($result)){
		printf("%s (%s)\n", $row["flavor"], $row["description"]);
		echo "<br />";
		global $pistachioFlavor;
		global $pistachioDescription;
		$pistachioFlavor = $row["flavor"];
		$pistachioDescription = $row["description"];
		printf($pistachioFlavor);
	};
	mysqli_free_result($result);
};

echo "<br />".$pistachioFlavor;
echo "<br />".$pistachioDescription;
?>