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
						$query = $conn->query("SELECT * FROM `reserveinfo` WHERE `reservationID` = '$_REQUEST[reservationID]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
		
		<p>
		
		YOUR APPOINTMENT<br><br>
			Get the:<br><?php echo $fetch['document']?><br><?php echo $fetch['certification']?><br><br>Payment: <?php echo $fetch['price']?><br><br>
			Status: <?php echo $fetch['status']?>

		</p>

          <i class="far fa-check-circle"></i>

          <div class="ref-no"> 
          	
          </div>


	</div>

		
          <div class="buttons">

          	<div class="btn"><a href="transaction-list.php">Back</a></div> <br>
          	<div class="btn"><a href="logout.php">Logout</a></div>

          	
          </div>
                      

	



</body>
</html>