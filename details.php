<!DOCTYPE html>
<?php
  require_once 'checkuser.php';
  require 'userinfo.php';
  include "connection.php";
?>

 <!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" type="text/css" media="screen" href="details-css.php">
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
    
  
    <?php
            require 'connection.php';
            $query = $conn->query("SELECT * FROM `confirmed` WHERE `confirmedID` = '$_REQUEST[confirmedID]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
          ?>
    
    <p>
    
    YOUR APPOINTMENT<br><br>
    Status: <?php echo $fetch['status']?><br><br>
      Get the <?php echo $fetch['document']?><br><?php echo $fetch['certification']?> <br> Date: <?php echo $fetch['appointmentdate']?> February 1, 2022 <br>Time: 8am to 3pm <?php echo $fetch['appointmenttime']?><?php echo $fetch['message']?> 
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
          <a href="user-confirm.php">Back</a>
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
