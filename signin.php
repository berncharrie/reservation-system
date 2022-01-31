<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="signin-css.php">
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
				<li><a href="home.php" class="home"><i class="fas fa-home">Back</i></a></li>
				
			</ul>
		</nav>
	</div>
	</header>

	<!-- log in -->
<section class="bg-container">

	<div class="login-box" id="prof">
		
		<h4> Sign Up</h4>
		<p>Already a member? Login <a href="login.php">here</a></p>

		 <form action="signin2.php" method="POST">
		 	<div class="input-box-first">
		 			<input type="text" name="fullname" placeholder="Fullname" id="fullname">

		 	</div>
		 	<div class="input-box-first">
		 			<input type="text" name="phone" placeholder="Phone Number" id="phone">
		 	</div>
		 	
		 		<input type="text" name="address" placeholder="Adrress" id="address">
		 	
		 	<div class="input-box">
		 		<input type="text" name="course" placeholder="Course" id="course"> 

		 	</div>
		 	<div class="input-box">
		 		
		 		<input type="text" name="year" placeholder="Year" id="year">

		 	</div>
		 	

		 <div class="gender-details">
	          <input type="radio" name="gender"	value="Male" id="dot-1" id="Male">
	          <input type="radio" name="gender" value="Female" id="dot-2" id="Female">
	          <input type="radio" name="gender" value="Others" id="dot-3" id="Others">
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


	      	<input type="text" name="email" placeholder="Email" id="email">
		 	<input type="text" name="idnumber" placeholder="ID number" id="idnumber">
		 	<input type="password" name="password" placeholder="Password" id="password">
		 	<input type="submit" name="submit" class="submit" value="Register" id="signin">
		 	
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