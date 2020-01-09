<?php

require("libs/config.php");
$page = easy_decrypt($_GET["id"]);
$pageDetails = getPageDetailsByName($page);
include("header.php");
?>
<?php

	require_once("libs/constants.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}

	$username = $_GET['username'];
	$password = $_GET['password'];

	$sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);


	if ($result->num_rows ==0) {
		echo "<script language=\"JavaScript\">\n";
echo "alert('Username or Password was incorrect!');\n";
echo "window.location='log.html'";
echo "</script>";
	
		
	} else {
		echo "<script language=\"JavaScript\">\n";
echo "alert('Logged in Successfully');\n";
echo "window.location='trains.php'";
echo "</script>";
	}



?>


<?php
include("footer.php");
?>
