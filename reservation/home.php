<?php 

    session_start();
    include("connection.php");
    include("functions.php");

  
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reservation System</title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="home-css.php">
	<link rel="icon" type="image/png" href="Favicon.png">
	<script type="text/javascript" src="reservation.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="logo">
		<!--<p>University of Science and Technology of Southern Philippines</p>-->
		<img src="img/ustp-header.png">
	</div>
	<div id="home"></div>
	<header >
		<div class="container">
		<nav>  
			<h2>Reservation System</h2>
			<ul>
				<li><a href="#home" data-toggle="tab">Home</a></li>
				<li><a href="#about-us" class="active">About us</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="#" >Contact</a></li>
				
			</ul>
		</nav>
	</div>
	</header>

	<!-- Showcase-->
	<section class="showcase">

	  <div class="showcase-caption">
        <h1> Reservation System</h1>

        <p>Assesses and evaluates students' subject credits, as well as prepares and releases students' academic records. <br>
        	Ground floor of the LRC Building. 
        </p>
     </div>
		<div class="showcase-content">


           <div class="showcase-signin">
           	<p> Create Account</p>
			<img src="img/pencil.png">
			<a class="btn" href="signin.php" >Sign Up</a>

           </div>
           <div class="showcase-calendar">
			<p>Look for available slots</p>
			<img src="calendar.png" >
			<a href="calendar.php" class="btn">Slots</a>
			
		   </div>
	    </div>	
	
	</section>



	<!-- About Section -->
	<section class="about m-t" >
		<div class="container-about" >
			<h2 id="about-us">About Us</h2>
			<div class="about-wrapper">
				<div class="about-img">
					<img src="about-us.png" alt="">
				</div>
				<div class="about-content">
					<h2>Our website's Mission</h2>
					<div class="line"></div>
					<p>The Registrar system is committed to the University’s strategic priorities of student success, community, accountability and excellence in fulfilling its primary responsibility to facilitate and effectively release all the documents, to fulfill the students, allumnis, returnis, and upcoming freshman there problems about the slow transactions for there documents.
					</p>

					<ul class="fa-ul">
						<li>
							<span class="fa-li"><i class="fas fa-circle-notch"></i></span>
							Easy and fast transaction
						</li>
						<li>
							<span class="fa-li"><i class="fas fa-circle-notch"></i></span>
							Hassle-free of getting documents.
						</li>
						<li>
							<span class="fa-li"><i class="fas fa-circle-notch"></i></span>
							Get document on time.
						</li>
					</ul>
					<div class="social-icon">
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-twitter-square"></i></a>
						<a href="#"><i class="far fa-envelope"></i></i></a>
					</div>
				</div>
			</div>
		</div>			
	</section>

	<!-- footer -->

	<section class="footer">
		
		
		<div class="footer-bottom">
			<h3> Reservation System</h3>
			<p>copyright &copy;2021 reservationSystem</p>
		</div>
	</section>


</body>
</html>