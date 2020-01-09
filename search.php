<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
border-collapse: separate;
    border-spacing: 10px 50px;
	font-family:Rockwell;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Train Availability</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Train Availability"/>
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body style="font-size:20px; font-family:Rockwell;">
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                                <span class="right">
                                    </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Train Availabilty</h1>
				            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
<?php
require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);
include("header.php");
?>
<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "simple-website");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     
	$query = $_GET['query']; 
	$query2 = $_GET['query2'];
    // Attempt select query execution

    $sql = "SELECT * FROM trains where FromStation='$query' and ToStation='$query2'";
    if($result = mysqli_query($link, $sql)){

        if(mysqli_num_rows($result) > 0){


echo "<table>";                
				echo "<tr>";

                    echo "<th>TrainNo</th>  ";

                    echo "<th>TrainName   </th>  ";

                    echo "<th>FromStation  </th>  ";

                    echo "<th>ToStation  </th>  ";
                    echo "<th>Departure  </th>  ";
                    echo "<th>Arrival  </th>  ";
                    echo "<th>Distance </th>  ";
                    echo "<th>Seats Available </th>  ";
                    echo "<th>1A </th>  ";
                    echo "<th>2A </th>  ";
                    echo "<th>3A </th>  ";
                    echo "<th>SL </th>  ";

                echo "</tr>";

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                    echo "<td>" . $row['TrainNo'] .   "</td>";

                    echo "<td>" . $row['TrainName'] .   "</td>";

                    echo "<td>" . $row['FromStation'] .  "</td>";

                    echo "<td>" . $row['ToStation'] .   "</td>";

				echo "<td>" .$row['Departure']. "</td>";
				echo "<td>" .$row['Arrival']. "</td>";
				
				echo "<td>" .$row['Distance']. "</td>";
			echo "<td>" .$row['SeatsAvailable']."</td>";
			echo "<td>" .$row['1A']."</td>";
			echo "<td>" .$row['2A']."</td>";
			echo "<td>" .$row['3A']."</td>";
			echo "<td>" .$row['SL']."</td>";
				
                echo "</tr>";

            }

            echo "</table>";

            // Close result set

            mysqli_free_result($result);

        } else{

            echo "No records matching your query were found.";

        }

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // Close connection

    mysqli_close($link);

    ?>






<?php
include("footer.php");
?>
