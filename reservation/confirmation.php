<?php 

    session_start();
    include("connection.php");
    include("functions.php");

  
 ?>


<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reservation</title>
	<link rel="stylesheet" type="text/css" media="screen" href="confirmation-css.php">

		<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	
	<link rel="icon" type="image/png" href="Favicon.png">

</head>
<body>


	<header>
		<div class="container">
			<img src="ustp_logo.jpg">
		<nav>
			
			<ul>
				<li><a href="home.php" class="home"><i class="fas fa-home">Home</i></a></li>
				
			</ul>
		</nav>
	</div>
	</header>

	<div class="background"></div>

<div class="content">

</div>

	<div class="text-content">
		
		<p>
		
		Your Reservation is Succefully saved. Just wait for the confirmation from the registrar. Thank you.

		</p>

          <i class="far fa-check-circle"></i>

          <div class="ref-no"> 
          	Reservation no. 123457556	<!-- by data    -->
          </div>


	</div>

		
          <div class="buttons">

          	<div class="btn"><a href="profile.php">Go back home</a></div> <br>
          	<div class="btn"><a href="profile.php">Log out</a></div>

          	
          </div>
                      

	



</body>
</html>