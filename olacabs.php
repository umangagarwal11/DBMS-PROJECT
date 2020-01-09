
<?php
## connect mysql server
	$mysqli = new mysqli('localhost', 'root', '', 'simple-website');
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
## query database
	# prepare data for insertion
	$query	= $_GET['query'];
	$query2	= $_GET['query2'];
	$query3	= $_GET['query3'];
	$query4	= $_GET['query4'];
	$query5	= $_GET['query5'];
	# check if username and email exist else insert
		$sql = "INSERT  INTO `OLA` (`userid`,`mobile`,`city`,`date`,`address`) 	VALUES ('{$query2}',{$query3},'{$query}','{$query4}','{$query5}')";

		if ($mysqli->query($sql)) {
			//echo "New Record has id ".$mysqli->insert_id;
			echo "<script language=\"JavaScript\">\n";
echo "alert('Booked Successfully! You Will get a call on the pickup date');\n";
echo "window.location='Indian Bank.htm'";
echo "</script>";
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}


    // Close connection

    mysqli_close($link);

    ?>






<?php
include("footer.php");
?>


