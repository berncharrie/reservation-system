<?php

	session_start();
	include("connection.php");
	include("functions.php");

	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$fullname = $_POST['fullname'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];		
		$course = $_POST['course'];
		$year = $_POST['year'];
		$gender = $_POST['gender'];
		$idnumber = $_POST['idnumber'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if ( !empty($fullname) && !empty($phone) && !empty($address) && !empty($course) && !empty($year) && !empty($gender) && !empty($idnumber) && !empty($email) && !empty($password) ) {

			$query = "insert into signin (fullname, phone, address, course, year, gender, email, idnumber, password) values ('$fullname', '$phone', '$address', '$course', '$year', '$gender',  '$email', '$idnumber', '$password')";

			mysqli_query($con, $query);
			
			header("Location: login.php");
			die;
		}else{
			echo "Invalid Credentials :>";
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="signin.css">
	<link rel="icon" type="image/png" href="Favicon.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet">

<script>
	
	



</script>
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

	<div class="login-box" id="prof">
		
		<h4> Sign Up</h4>
		<p>Already a member? Login <a href="login.php">here</a></p>

		 <form method="post">
		 	<div class="input-box-first">
		 			<input type="text" name="fullname" placeholder="Fullname">

		 	</div>
		 	<div class="input-box-first">
		 			<input type="number" name="phone" placeholder="Phone number">
		 	</div>
		 	
		 		<input type="text" name="address" placeholder="Adrress">
		 	
		 	<div class="input-box">
		 		<input type="text" name="course" placeholder="Course"> 

		 	</div>
		 	<div class="input-box">
		 		
		 		<input type="text" name="year" placeholder="Year">

		 	</div>
		 	

		 <div class="gender-details">
	          <input type="radio" name="gender"	value="Male" id="dot-1">
	          <input type="radio" name="gender" value="Female" id="dot-2">
	          <input type="radio" name="gender" value="Others" id="dot-3">
	          <span class="gender-title">Gender</span>

	          <div class="category">
	            <label for="dot-1">
	            <span class="dot one"></span>
	            <span class="gender">Male</span>
	          </label>
	          <label for="dot-2">
	            <span class="dot two"></span>
	            <span class="gender">Female</span>
	          </label>
	          <label for="dot-3">
	            <span class="dot three"></span>
	            <span class="gender">Prefer not to say</span>
	            </label>
	          </div>
	      </div>


	      	<input type="text" name="email" placeholder="Email">
		 	<input type="number" name="idnumber" placeholder="ID number">
		 	<input type="password" name="password" placeholder="Password">
		 	<input type="submit" name="" value="Register" id="signin">
		 	
	    </form>
	    
		
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