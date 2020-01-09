
<?php

	$mysqli = new mysqli('localhost', 'root', '', 'simple-website');

	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}


	$PNR	= $_GET['PNR'];
	
	
		$sql = "DELETE FROM `reservations` WHERE pnr=$PNR";

		if ($mysqli->query($sql)) {
				echo "<script language=\"JavaScript\">\n";
echo "alert('Cancelled Successfully');\n";
echo "window.location='trains.php'";
echo "</script>";
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}

    mysqli_close($link);

    ?>


