<!DOCTYPE html>
<?php
  require_once 'checkuser.php';
  require 'userinfo.php';
  include "connection.php";
?>
<html>
  <head>
    <meta charset="UTF-8">
    
   <link rel="stylesheet" type="text/css" media="screen" href="form-css.php">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form</title>
     <link rel="icon" type="image/png" href="Favicon.png">
     <script type="text/javascript" src="form.js"></script>
   </head>
<body>




  <div class="container">
    <div class="title">Schedule Appointment
    </div>

    <div class="content">
     <?php
            $query = $conn->query("SELECT * FROM `confirmed` WHERE `confirmedID` = '$_REQUEST[confirmedID]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
          ?>

      <form method = "POST">
        <br>
      Confirm ID: <?php echo $fetch['confirmedID']?><br><br>
      <div class="title"><p>Enter needed details</p></div>
      <div class="select-container"> 

      <div>
      <label>Pick the appointment date: </label>
                    <input type="date" name="appointmentdate"  id="appointmentdate">
      </div><br>

      <div>
      <label>Pick appointment time: </label>
          <input type="text" name="appointmenttime" placeholder="appointment time" id="fullname">
      </div><br>

      <div>
      <label>Input additional message:</label>
                    <input type="text" name="message" placeholder="message" id="message">
      </div>

     
      <br><button name = "submit"><i></i> SUBMIT</button>
            </div>
          </form><br>
          <?php require_once 'confirm-update.php'?>
</body>
</html>
