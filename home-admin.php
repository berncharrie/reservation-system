<!DOCTYPE html>
<?php
  require_once 'checkuser.php';
  require 'userinfo.php';
  include "connection.php";
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
    <link rel="icon" type="image/png" href="Favicon.png">
	<link rel="stylesheet" type="text/css" media="screen" href="home-admin-css.php">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".profile .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			  $(".notifications").removeClass("active");
			});

			$(".notifications .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			   $(".profile").removeClass("active");
			});

			$(".show_all .link").click(function(){
			  $(".notifications").removeClass("active");
			  $(".popup").show();
			});

			$(".close").click(function(){
			  $(".popup").hide();
			});
		});
	</script>

    <style type="text/css">
        

        table{

                font-size: 15px;
                border-collapse: collapse;
                width: 100%;
                color: black;
                font-family: monospace;
                text-align: center;
                top: 20px;
                position: relative;

}
    </style>
</head>
<body>

<div class="wrapper">
  <div class="navbar">
    <div class="navbar_left">
      <div class="logo">
        <a href="#">Reservation System</a>
      </div>
    </div>

    <div class="navbar_right">
      <div class="notifications">
        
        
        <div class="notification_dd">
            <ul class="notification_ul">
                
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                     
            </ul>
        </div>
        
      </div>

      <!-- profile -->
      <div class="profile">
        <div class="icon_wrap">
          <img src="user.png" alt="profile_pic">
          <span class="name"><?php echo $fullname?></span>
          <i class="fas fa-chevron-down"></i>
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li class="profile_li"><a class="profile" ><span class="picon"><i class="fas fa-user-alt"></i>
                </span>Profile</a>
              <div class="btn"><a href="profile.html">My Account</a></div>
            </li>
            <li><a class="address" href="#"><span class="picon"><i class="fas fa-map-marker"></i></span>Address</a></li>
            <li><a class="settings" href="#"><span class="picon"><i class="fas fa-cog"></i></span>Settings</a></li>
            <li><a class="logout" href="logout.php"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="popup">
    <div class="shadow"></div>
    <div class="inner_popup">
        
               
        </div>
    </div>
  </div>


<div class="buttons">
    <a href="confirm3.php"><button>CONFIRMED RESERVATIONS</button></a><br>
<a href="decline3.php"><button>DECLINED RESERVATIONS</button></a><br>

</div>

    <div class="home-container">

        <div class="box" >

           <div>
               

          <table>   
      <tr>
        <th>Reservation ID</th>
        <th>Student ID</th>
        <th>Fullname</th>
        <th>Course</th>
        <th>Year</th>
        <th>Document</th>
        <th>Certification</th>
        <th>Purpose</th>
        <th>Action</th>
      </tr>
      <tbody>
          <?php
            require 'connection.php';
            $query = $conn->query("SELECT *  FROM `reserveinfo`;") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
          ?>
            <tr>
              <td><?php echo $fetch['reservationID']?></td>
              <td><?php echo $fetch['idnumber']?></td>
              <td><?php echo $fetch['fullname']?></td>
              <td><?php echo $fetch['course']?></td>
              <td><?php echo $fetch['year']?></td>
              <td><?php echo $fetch['document']?></td>
              <td><?php echo $fetch['certification']?></td>
              <td><?php echo $fetch['purpose']?></td>
              <td><center><a href = "confirm.php?reservationID=<?php echo $fetch['reservationID']?>"><i></i>SEE DETAILS</a></center></td> 
  </tr>
           <?php
            }
          ?>  
          </tbody>
    </table>

           </div>

            
        

        </div>
    </div>
    



<!-- footer -->

    <div class="footer">
        
        
        <div class="footer-bottom">
            <h3> Reservation System</h3>
            <p>copyright &copy;2021 reservationSystem</p>
        </div>
    </div>

</body>
</html>