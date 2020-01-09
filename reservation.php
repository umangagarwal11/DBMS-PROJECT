
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
	$name	= $_GET['name'];
	$age	= $_GET['age'];
	$gender	= $_GET['gender'];
	$berth	= $_GET['berth'];
	$class	= $_GET['class'];
	
	$nationality	= $_GET['nationality'];
	$trainno	= $_GET['trainno'];
	$trainame = $_GET['trainame'];
	$username = $_GET['username'];
	# check if username and email exist else insert
		$sql = "INSERT  INTO `reservations` (`Name`,`Age`,`Gender`,`BirthPreference`,`Class`,`Nationality`,`TrainNumber`,`TrainName`,`username`) 	VALUES ('{$name}',{$age},'{$gender}','{$berth}','{$class}','{$nationality}','{$trainno}','{$trainame}','{$username}')";

		if ($mysqli->query($sql)) {
			//echo "New Record has id ".$mysqli->insert_id;
			echo "<script language=\"JavaScript\">\n";
echo "alert('Registered Successfully');\n";
echo "window.location='ola.php'";
echo "</script>";
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}
	

$sql = "UPDATE `trains` SET SeatsAvailable=SeatsAvailable-1 WHERE TrainNo={$trainno}";
$mysqli->query($sql);


    // Close connection

    mysqli_close($link);

    ?>



<?php
include("footer.php");
?>

