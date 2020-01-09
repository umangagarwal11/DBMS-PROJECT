<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
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
                <h1>Print Your Ticket</h1>
				            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
<?php
require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);
include("header.php");
?>

    
<div>
<form style="font-size:30px;font-family:Rockwell;" action="display2.php" method="GET">

Username: <input style="padding: 20px;
  border: solid 8px #c9c9c9;
  transition: border 0.3s;"type="text" name="username" /><br><br>

<input style="padding: 10px 24px;background-color: #008CBA;font-size:30px;font-family:Rockwell" type="submit" value="Get Details" />


</form>
</div>


<?php
include("footer.php");
?>
