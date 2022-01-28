<?php 
	session_start();
	include("connection.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$idnumber = $_POST['idnumber'];
		$password = $_POST['password'];

		if (!empty($idnumber) && !empty($password)) {
			$query = "select * from signin where idnumber = '$idnumber' limit 1";

			$result = mysqli_query($con, $query);

			if ($result) 
			{
				if ($result && mysqli_num_rows($result) > 0) 
				{
					$user_data = mysqli_fetch_assoc($result);
					if ($user_data['password'] === $password) 
					{
						$_SESSION['idnumber'] = $user_data['idnumber'];
						header("Location: profile.php");
						die;
					}
				}
			}
			echo "Invalid Credentials :>";
			
		}else{
			echo "Please fill everything up. :>";
		}
	}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="signin-info.php">
	<link rel="icon" type="image/png" href="Favicon.png">
	<script src="reservation.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet">
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

	<!-- log in -->
<section class="bg-container">
	

	<div class="login-box">
		
		<h4> Welcome Back </h4>
		<p>Not a member? Register <a href="signin.php">here</a></p>

		 <form method="post">
		 	<p>ID number</p>
		 	<input type="text" name="idnumber" placeholder="ID number">
		 	<p>Password</p>
		 	<input type="password" name="password" placeholder="Password">
		 	<input type="submit" name="" value="Login" id="login">
		 	
	    </form>
	    <div class="fg"> <a href="">Forgot password?</a></div>
		
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