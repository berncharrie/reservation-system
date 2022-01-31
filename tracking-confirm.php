<!DOCTYPE html>
<?php
  require_once 'checkuser.php';
  require 'userinfo.php';
  include "connection.php";
?>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reservation</title>
	<link rel="stylesheet" type="text/css" href="confirmation.css">

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
				<li><a href="home-account.php" class="home"><i class="fas fa-home">Home</i></a></li>
				
			</ul>
		</nav>
	</div>
	</header>

	<div class="background"></div>

<div class="content">

</div>

	<div class="text-content">
		<?php
						require 'connection.php';
						$query = $conn->query("SELECT * FROM `confirmed` WHERE `confirmedID` = '$_REQUEST[confirmedID]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
		
		<p>
		
		YOUR APPOINTMENT<br><br>
		Status: <?php echo $fetch['status']?><br><br>
			Get the <?php echo $fetch['document']?><br><?php echo $fetch['certification']?> on <?php echo $fetch['appointmentdate']?> (YY--MM-DD) at <?php echo $fetch['appointmenttime']?>.<?php echo $fetch['message']?>Please prepare your receipt paying an amount of <?php echo $fetch['price']?> PHP
			

		</p>

          <i class="far fa-check-circle"></i>

          <div class="ref-no"> 
          	
          </div>


	</div>

		
          <div class="buttons">

          	<div class="btn"><a href="user-confirm.php">Back</a></div> <br>
          	<div class="btn"><a href="logout.php">Logout</a></div>

          	
          </div>
                      

	



</body>
</html>