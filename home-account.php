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


    function show(){
            var close = document.getElementById("button");
            var text = document.getElementById("modals");
            

        if (close.checked == true){
             text.style.visibility = "visible";
                    } else {
            text.style.visibility= "hidden";
    }
}

      
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
        <div class="icon_wrap"></i></div>
        
        <div class="notification_dd">

                <li class="starbucks success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
               </li>
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
            <li class="profile_li"><a class="profile.php" ><span class="picon"><i class="fas fa-user-alt"></i>
                </span>Profile</a>
              <div class="btn"><a href="profile.php">My Account</a></div>
            </li>
            <li><a class="logout" href="logout.php"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  
  
</div>

<div class="details">
  <input type="checkbox" name="" id="button" onclick="show()">

  <label for="button">  Price List </label>
  
</div>

<div class="price" id="modals">
        
        <div class="modal" >
               <div class="close">
<label for="button">+</label>
</div>

               <table>
    
        <tr>
            <th>Price</th>
            <th> Document</th>
            
            <th> </th>
        </tr>
<?php
    $conn = mysqli_connect("localhost", "root", "", "reservation");

    if($conn-> connect_error){

        die("connection failed". $conn-> connection_error);
    }

$sql = "SELECT type_docu, pricelist from document";
$result = $conn-> query($sql);

if($result-> num_rows > 0 ){

    while($row = $result-> fetch_assoc()){


        echo "<tr><td>". $row["type_docu"] ."</td><td>" .$row["pricelist"]."</td></tr>" ;
}

         echo "</table>";
}
else{

    echo "0 result";
}
$conn-> close();
?>

</table>

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
                <a href="transaction-list.php"><h3> Transactions</h3></a>
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