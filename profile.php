<!DOCTYPE html>
<?php
  require_once 'checkuser.php';
  require 'userinfo.php';
  include "connection.php";
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="icon" type="image/png" href="Favicon.png">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- add style css  -->
    <link rel="stylesheet" type="text/css" media="screen" href="profile.css">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.php">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudfare.com.ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- navigation Bar -->





<header class="wrapper">
  <div class="navbar">
    <div class="navbar_left">
      <div class="logo">
        <a href="#">Reservation System</a>
      </div>
    </div>

    <div class="navbar_right">
      <div class="notifications">
        <div class="home-icon"> <!--   -->
            <a href="home-account.php" style="color: black;"><i class="fas fa-home"></i></a></div>
        <div class="icon_wrap">

        </div>
        
        <div class="notification_dd">
            <ul class="notification_ul">
                <li class="starbucks success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                           <a href="details.php">Hi,  <?php echo $fullname?>!</a>
                        </div>
                        <div class="sub_title">
                        
                             You may now get your document in the school registrar located at Ground Floor LRC Bldg.
                        
                         
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>  
                <li class="baskin_robbins failed">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Reservation Update
                        </div>
                        <div class="sub_title">
                          We didn't able to process your document for lacking requirements.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Failed</p>  
                    </div>
                </li> 
           
                    
                </li> 
              
                <li class="show_all">
                    <p class="link">Show All Activities</p>
                </li> 
            </ul>
        </div>
        
      </div>

      <!-- profile -->
      <div class="profile">
        <div class="icon_wrap">
          <img src="user.png" alt="profile_pic">
          <span class="name"> <?php echo $fullname?> </span>
          <i class="fas fa-chevron-down"></i>
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
           
            
            <li><a class="settings" href="#"><span class="picon"><i class="fas fa-cog"></i></span>Settings</a></li>
            <li><a class="logout" href="home.php"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="popup">
    <div class="shadow"></div>
    <div class="inner_popup">
        <div class="notification_dd">
            <ul class="notification_ul">
                <li class="title">
                    <p>Reservation Update</p>
                    <p class="close"><i class="fas fa-times" aria-hidden="true"></i></p>
                </li> 
                <li class="starbucks success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Hi,  <?php echo $fullname?>!
                        </div>
                        <div class="sub_title">
                          You may now get your document in the school registrar located at Ground Floor LRC Bldg.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p><a href="paymnt.php"></a>Success</p>  
                    </div>
                </li>  
           
      
              
            </ul>
        </div>
    </div>
  </div>
  
</header>


<!-- END OF NAVIGATION BAR -->




<div class="container bootstrap snippets bootdey">
    <div class="row">
        <!-- BEGIN USER PROFILE -->
        <div class="col-md-12">
            <div class="grid profile">
                <div class="grid-header">
                    <div class="col-xs-2">
                        <img src="user.png" class="img-circle" alt="logo">
                    </div>
                    <div class="col-xs-7">
                        <h3><?php echo $fullname?></h3>
                        <p><?php echo $email?></p>

                        
                        <p> <?php echo $course?>  <?php echo $year?>


                    year <b><?php echo $role?></b></a></p>
                        <p> <?php echo $address?></a></p>
                    </div>
                   
                </div>
                <div class="grid-body">
                    <ul class="nav nav-tabs">
                        
                        <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                        <li class=""><a href="#settings" data-toggle="tab">Edit Info</a></li>
                      
                    </ul>

                    <div class="tab-content">

                        <!-- BEGIN PROFILE -->
                        <div class="tab-pane active" id="profile">
                            <p class="lead">My Profile</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Email:</strong> <a href=""><?php echo $email?></a></p>
                                    <p><strong>Birthday:</strong> <a href=""></a><em>Not set</em></p>
                                    <p><strong>Course:</strong> <?php echo $course?> <?php echo $role?></p>
                                    <p><strong>Schoold ID:</strong> <?php echo $idnumber?></p>
                                  
                                    
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Address:</strong> <?php echo $address?> </p>
                                    <p><strong>Phone:</strong> <?php echo $phone?></p>
                                    
                                   
                                    
                                </div>
                            </div>
                        <div class="row">
                            
                        </div>
                    </div>
                    <!-- END PROFILE -->


                <!-- BEGIN SETINGS -->
                        <div class="tab-pane" id="settings">
                            <p class="lead">Edit Profile</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Email:</strong> <a href=""><?php echo $email?></a></p>
                                    <p><strong>Birthday:</strong> <a href=""><em>Edit</em></a></p>
                                    <p><strong>Course:</strong> <em>Edit</em> </p>
                                    <p><strong>Schoold ID:</strong> <?php echo $idnumber?></p>
                                    <p><strong>Hobbies:</strong><em>Edit</em></p>
                                    
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Address:</strong> <em>Edit</em> </p>
                                    <p><strong>Phone:</strong><em>Edit</em></p>
                                    <p><strong>Phone + Ext:</strong> <em>Edit</em></p>
                                 
                                    
                                </div>

                              
                            </div>
                        <div class="row">
                              <div class="submit" style="margin-left: 1000px; " >
                                    <input type="submit" name="Submit" id="" 
                                                          style="   background: linear-gradient(135deg, #71b7e6, #102f47);  
                                                                    border-radius: 5px;
                                                                    border: none;
                                                                   color: #fff;
                                                                   font-size: 14px;
                                                                   font-weight: 500;
                                                                   letter-spacing: 1px;
                                                                   cursor: pointer;
                                                                   padding: 5px;
                                                                   transition: all 0.3s ease;">
                                </div>
                        </div>
                    </div>
                    <!-- END SETTINGS -->
                
               
                </div>
            </div>
        </div>
    </div>
    <!-- END USER PROFILE -->
</div>
</div>
<!-- footer -->

    <section class="footer-profile">
        
        
        <div class="footer-bottom">
            <h3> Reservation System</h3>
            <p>copyright &copy;2021 reservationSystem</p>
        </div>
    </section>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="timeline.js"></script>
</body>
</html>