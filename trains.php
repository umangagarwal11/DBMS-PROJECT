<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>speed post</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Train Availability"/>
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                                <span class="right">
                                    </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Speed Post</h1>
				            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                        
<?php
require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);
include("header.php");
?>


<p style="font-size:30px; color:green;font-family:Impact"><?php echo "Available Stations"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Chennai"; ?> </p>
<h1>
<p style="font-size:20px; color:blue;"><?php echo "Bengaluru"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Kodaikanal"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Hyderabad"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Trichy"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Madurai"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Coimbatore"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Kanyakumari"; ?> </p>
<p style="font-size:20px; color:blue;"><?php echo "Bhubaneshwar"; ?> </p>





<br>
<br>
    

<div>

<form action="search.php" method="GET">
<p style="font-family:Impact; font-size:30px; color:red;">From Station: </p><input style="padding: 10px;
  border: solid 5px #c9c9c9;
  transition: border 0.3s;"type="text" name="query" /><br><br>


<p style="font-family:Impact; font-size:30px; color:red;">To Station: </p><input style=" padding: 10px;
  border: solid 5px #c9c9c9;
  transition: border 0.3s;"type="text" name="query2" /><br><br>

<p style="font-family:Impact; font-size:30px; color:red;">Date: </p><input style="padding: 10px;
  border: solid 5px #c9c9c9;
  transition: border 0.3s;"type="text" name="query3" /><br><br>



<input style="padding: 10px 24px;background-color: #008CBA;"type="submit" value="Search" />
</form>

</div>


<?php
include("footer.php");
?>