<?php 
	session_start();
	include("connection.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $course = $_POST['course'];

    if (!empty($fullname) && !empty($email) && !empty($number) && !empty($course)) {
      $query = "insert into payment (fullname, email, number, course) values ('$fullname', '$email', '$number', '$course')";

      mysqli_query($con, $query);
      
      header("Location: notify.php");
      die;
    }else{
      echo "Please fill everything up. :>";
    }
  }
 ?>

 <!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" type="text/css" media="screen" href="paymnt-css.php">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Reservation</title>
     <link rel="icon" type="image/png" href="Favicon.png">
     <script type="text/javascript" src="reservation.js"></script>
   </head>
<body>
  <div class="container">
    <div class="title">
      
    </div>

    <div class="text-content">
    
    <p>
    
  
    Your appointment date is on Thursday, January 26 between 8:30 am to 3 pm. Please show your proof of payment to the registrar staff. Thank you.

    </p>

          <i class="far fa-check-circle"></i>

          <div class="ref-no"> 
            
          </div>


  </div>
  <div class="line"></div>
<div class="contact">
  <div class="ttle"> Pay through </div>
     

      <br>
     <p> Gcash: 
      <br>
      John B. Yan &nbsp; &nbsp;
      <b>0922-345-3678 </b></p><br>   

      <div class="ttle">OR</div> 
      <p> Pay at school cashier located at </p>




</div>
     <div class="button">
          <input type="submit" value="Done">
        </div>

    <div class="content">

      <!--  
      <form action="#" method="post">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" placeholder="Enter name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter email" required>
          </div>
          
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="number" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Course and Year</span>
            <input type="text" name="course" placeholder="Enter course" required>
          </div>

          <b>Please show Proof of Payment upon the scheduled date.</b> 
        <div class="button">
          <input type="submit" value="Submit">
        </div>
  -->
      </form>  
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="paymnt.js"></script>
</body>
</html>
