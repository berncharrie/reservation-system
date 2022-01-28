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
	<title>Home</title>
    <link rel="icon" type="image/png" href="Favicon.png">
	<link rel="stylesheet" type="text/css" media="screen" href="styles.php">
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
                <li class="starbucks success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                   No Notification
               </li>
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
  
  
  
</div>



    <div class="home-container">

        <div class="box" >

            <div class="icon" >
                <img src="online-booking.png" >
            </div>

            <div class="content">
                <a href="form.php"><h3> Reserve document</h3></a>
            </div>

            
        </div>
        
        <div class="box">
            <div class="icon">
                <img src="calendar.png">
            </div>

            <div class="content">
                <a href="notify.php"><h3> Transactions</h3></a>
                <p></p>
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