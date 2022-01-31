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
    <div class="title">Confirm Reservation
    </div>

    <div class="content">

      <form method = "POST">
        <br>
      <div class="title"><p>Details of Confirmation</p></div>
      <div class="select-container"> 
        <?php
            require 'connection.php';
            $query = $conn->query("SELECT * FROM `reserveinfo` WHERE `reservationID` = '$_REQUEST[reservationID]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
          ?>
        Reservation ID: <?php echo $fetch['reservationID']?><br>
        Student ID: <?php echo $fetch['idnumber']?><br>
        Fullname: <?php echo $fetch['fullname']?><br>
        Course: <?php echo $fetch['course']?><br>
        Year: <?php echo $fetch['year']?><br>
        Document: <?php echo $fetch['document']?><br>
        Certification: <?php echo $fetch['certification']?><br>
        Purpose: <?php echo $fetch['purpose']?><br><br>
      
        <div>
        <br><a href = "confirm2.php?reservationID=<?php echo $fetch['reservationID']?>"><i></i>Proceed...</a>
        </div>
        <div>
        <br><a href = "decline2.php?reservationID=<?php echo $fetch['reservationID']?>"><i></i>Decline--></a>
        </div>
       
      </div>
          </form>
    </div>
  </div>

</body>
</html>
