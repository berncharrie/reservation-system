<?php 
    session_start();
    include("connection.php");
    include("functions.php");
    

    $user_data = check_login($con);

     
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Details</title>
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

                font-size: 20px;
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
        <div class="icon_wrap"><i class="far fa-bell"></i></div>
        
        <div class="notification_dd">
            <ul class="notification_ul">
                
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                     <p>No notification</p>
            </ul>
        </div>
        
      </div>

      <!-- profile -->
      <div class="profile">
        <div class="icon_wrap">
          <img src="user.png" alt="profile_pic">
          <span class="name"><?php echo $user_data['fullname']; ?></span>
          <i class="fas fa-chevron-down"></i>
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li class="profile_li"><a class="profile" ><span class="picon"><i class="fas fa-user-alt"></i>
                </span>Profile</a>
              <div class="btn"><a href="profile.php">My Account</a></div>
            </li>
            <li><a class="address" href="#"><span class="picon"><i class="fas fa-map-marker"></i></span>Address</a></li>
            <li><a class="settings" href="#"><span class="picon"><i class="fas fa-cog"></i></span>Settings</a></li>
            <li><a class="logout" href="#"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
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






    <div class="home-container">

        <div class="box" >

           <div class="details">

                <p> <b>Student Name: </b>  
                           </p><div class="name"> reserb system </div> 
                <p><b>Student ID: </b> 
                   </p> <div class="name"> 135457</div>
                <p><b>Reserved Document:</b></p>
                        <div class="doc"> 
                            TOR <br>
                            Form 137


                        </div>
                <p>
                    <b>Total Amount: </b>
                      
                </p>  <div class="doc">
                            P 180.00
                        </div>
            </div>

<div class="date">
   <p>Enter schedule: </p> <input type="date" name="">
</div>
<div class="button"> 


    <input type="button" name="Confirm" value="Confirm">
    <input type="button" name="Decline" value="Decline">
</div>
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