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
    <div class="title">Decline Appointment
    </div>

    <div class="content">
     <?php
            $query = $conn->query("SELECT * FROM `declined` WHERE `declinedID` = '$_REQUEST[declinedID]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
          ?>

      <form method = "POST">
        <br>
      Decline ID: <?php echo $fetch['declinedID']?><br><br>
      <div class="title"><p>Enter needed details</p></div>
      <div class="select-container"> 

      <div>
      <label>State the reason: </label>
                    <input type="text" name="reason" placeholder="reason" id="reason">
      </div>

     
      <br><button name = "submit"><i></i> SUBMIT</button>
            </div>
          </form><br>
          <?php require_once 'decline-update.php'?>
</body>
</html>
