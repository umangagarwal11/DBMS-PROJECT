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
    <body style="font-size:20px;">
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                                <span class="right">
                                    </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                
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


	$username	= $_GET['username'];
	


    $sql = "SELECT * FROM reservations where username='$username'";    
if($result = mysqli_query($link, $sql)){

        if(mysqli_num_rows($result) > 0){


echo "<table>";                
				echo "<tr>";

                    echo "<th>Name</th>  ";
		
                    echo "<th>Age  </th>  ";

                    echo "<th>Gender </th>  ";

                    echo "<th>Berth </th>  ";
                    echo "<th>Class</th>  ";

                    echo "<th>Senior Citizen</th>  ";

                    echo "<th>Nationality </th>  ";

                    echo "<th>Train Number </th>  ";
				
				 echo "<th>Train Name</th>  ";

                    echo "<th>PNR Number </th>  ";

                    

                echo "</tr>";

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                    echo "<td>" . $row['Name'] .   "</td>";

                    echo "<td>" . $row['Age'] .   "</td>";

                    echo "<td>" . $row['Gender'].  "</td>";

                    echo "<td>" . $row['BirthPreference'] .   "</td>";
echo "<td>" . $row['Class'].  "</td>";


echo "<td>" . $row['SeniorCitizen'].  "</td>";


echo "<td>" . $row['Nationality'].  "</td>";


echo "<td>" . $row['TrainNumber'].  "</td>";

echo "<td>" . $row['TrainName'].  "</td>";
echo "<td>" . $row['pnr'].  "</td>";






				

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



