<html>
<head>

<?php

require("libs/config.php");
$page = easy_decrypt($_GET["id"]);
$pageDetails = getPageDetailsByName($page);
include("header.php");
?>
<div>
<img src='train.jpg' height=600 width=800 align="left">
</div>



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
	$usernamesignup	= $_GET['usernamesignup'];
	$emailsignup = $_GET['emailsignup'];
	$passwordsignup	= $_GET['passwordsignup'];
	$passwordsignup_confirm = $_GET['passwordsignup_confirm'];


	# check if username and email exist else insert
	$exists = 0;
	$result = $mysqli->query("SELECT username from users WHERE username = '{$usernamesignup}' LIMIT 1");
	if ($result->num_rows == 1) {
		$exists = 1;
		$result = $mysqli->query("SELECT email from users WHERE email = '{$emailsignup}' LIMIT 1");
		if ($result->num_rows == 1) $exists = 2;	
	} else {
		$result = $mysqli->query("SELECT email from users WHERE email= '{$emailsignup}' LIMIT 1");
		if ($result->num_rows == 1) $exists = 3;
	}

	if ($exists == 1) {	echo "<script language=\"JavaScript\">\n";
echo "alert('Username already exists!');\n";
echo "window.location='log.html#toregister'";
echo "</script>";
;}
	else if ($exists == 2){	echo "<script language=\"JavaScript\">\n";
echo "alert('Username and email already exists!');\n";
echo "window.location='log.html#toregister'";
echo "</script>";
}	else if ($exists == 3){	echo "<script language=\"JavaScript\">\n";
echo "alert('Email Already Exists!');\n";
echo "window.location='log.html#toregister'";
echo "</script>";
} 	else {
		# insert data into mysql database
		$sql = "INSERT  INTO `users` (`id`, `username`, `password`,`email`) 
				VALUES (NULL, '{$usernamesignup}', '{$passwordsignup}', '{$emailsignup}')";

		if ($mysqli->query($sql)) {
			//echo "New Record has id ".$mysqli->insert_id;
			echo "<script language=\"JavaScript\">\n";
echo "alert('Registered Successfully');\n";
echo "window.location='log.html'";
echo "</script>";
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}
	}

?>

<?php
include("footer.php");
?>
		
</body>
</html>