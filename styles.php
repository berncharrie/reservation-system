
<?php header("Content-type: text/css"); ?>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Trade+Winds&display=swap');

*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  font-family: 'Montserrat';
}

body{
    background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("ustp.png");
    background-attachment: fixed;
    background-repeat: no repeat;
    background-size: cover;
   
    

}

a{
   color: #7f8db0;
}

.wrapper{
  width: 100%;
  height: 100%;
}

.navbar{
  background: #F7B41E;
  width: 100%;
  height: 60px;
  padding: 0 25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.navbar .navbar_left .logo a{
   font-family: 'Trade Winds';
   font-size: 20px;
}

.navbar .navbar_right{
   display: flex;
}

.navbar .navbar_right img{
  width: 35px;
}

.navbar .navbar_right .icon_wrap{
  cursor: pointer;
}

.navbar .navbar_right .notifications{
  margin-right: 25px;
}

.navbar .navbar_right .notifications .icon_wrap{
  font-size: 28px;
}

.navbar .navbar_right .profile,
.navbar .navbar_right .notifications{
  position: relative;
}

.navbar .profile .profile_dd,
.notification_dd{
  position: absolute;
  top: 48px;
  right: -15px;
  user-select: none;
  background: #fff;
  border: 1px solid #c7d8e2;
  width: 350px;
  height: auto;
  display: none;
  border-radius: 3px;
  box-shadow: 10px 10px 35px rgba(0,0,0,0.125),
              -10px -10px 35px rgba(0,0,0,0.125);
  z-index: 1000;
}

.navbar .profile .profile_dd:before,
.notification_dd:before{
    content: "";
    position: absolute;
    top: -20px;
    right: 15px;
    border: 10px solid;
    border-color: transparent transparent #fff transparent;
}

.notification_dd li {
    border-bottom: 1px solid #f1f2f4;
    padding: 10px 20px;
    display: flex;
    align-items: center;
}

.notification_dd li .notify_icon{
  display: flex;
}

.notification_dd li .notify_icon .icon{
  display: inline-block;
  background: url('Favicon.png') no-repeat 0 0;
	width: 40px;
	height: 42px;
}

.notification_dd li.baskin_robbins .notify_icon .icon{
  background-position: 0 -43px;
}

.notification_dd li.mcd .notify_icon .icon{
  background-position: 0 -86px;
}

.notification_dd li.pizzahut .notify_icon .icon{
  background-position: 0 -129px;
}

.notification_dd li.kfc .notify_icon .icon{
  background-position: 0 -178px;
}

.notification_dd li .notify_data{
  margin: 0 15px;
  width: 185px;
}

.notification_dd li .notify_data .title{
  color: #000;
  font-weight: 600;
}

.notification_dd li .notify_data .sub_title{
  font-size: 14px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-top: 5px;
}

.notification_dd li .notify_status p{
  font-size: 12px;
}

.notification_dd li.success .notify_status p{
  color: #47da89;
}

.notification_dd li.failed .notify_status p{
  color: #fb0001;
}

.notification_dd li.show_all{
  padding: 20px;
  display: flex;
  justify-content: center;
}

.notification_dd li.show_all p{
  font-weight: 700;
  color: #3b80f9;
  cursor: pointer;
}

.notification_dd li.show_all p:hover{
  text-decoration: underline;
}

.navbar .navbar_right .profile .icon_wrap{
  display: flex;
  align-items: center;
}

.navbar .navbar_right .profile .name{
  display: inline-block;
  margin: 0 10px;
}

.navbar .navbar_right .profile .name:hover{
   color: #3b80f9;
}
.navbar .navbar_right .icon_wrap:hover,
.navbar .navbar_right .profile.active .icon_wrap i,
.navbar .navbar_right .notifications.active .icon_wrap i{

  color: #3b80f9;
}
 



.navbar .profile .profile_dd{
  width: 225px;
}
.navbar .profile .profile_dd:before{
  rigth: 10px;
}

.navbar .profile .profile_dd ul li {
    border-bottom: 1px solid #f1f2f4;
}

.navbar .profile .profile_dd ul li  a{
    display: block;
    padding: 15px 35px;
    position: relative;
}

.navbar .profile .profile_dd ul li  a .picon{
  display: inline-block;
  width: 30px;
}

.navbar .profile .profile_dd ul li  a:hover{
  color: #3b80f9;
  background: #f0f5ff;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.navbar .profile .profile_dd ul li.profile_li a:hover {
    background: transparent;
    cursor: default;
    color: #7f8db0;
}

.navbar .profile .profile_dd ul li .btn{
    height: 32px;
    padding: 7px 10px;
    color: #fff;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    background: #3b80f9;
    width: 125px;
    margin: 5px auto 15px;
}
.navbar .profile .profile_dd ul li .btn a{
    
    
    text-align: center;
    padding: 0;
    color: #fff;

    
}

.navbar .profile .profile_dd ul li .btn a:hover{
  color: black;
  cursor: pointer;

}
.navbar .profile .profile_dd ul li .btn:hover{
  background: #6593e4;
  
}

.navbar .profile.active .profile_dd,
.navbar .notifications.active .notification_dd{
  display: block;
}

.popup {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: all 0.2s ease;
    display: none;
    z-index: 1000;
}

.popup .shadow {
    width: 100%;
    height: 100%;
    background: #000;
    opacity: 0.5;
}

.popup .inner_popup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
    height: auto;
}

.popup .notification_dd{
  display: block;
  position: static;
  margin: 0 auto;
  height: 357px;
  overflow: auto;
}

.popup .notification_dd:before{
   display: none;
}

.popup .notification_dd li.title{
  font-weight: 700;
  color: #3b80f9;
  display: flex;
  justify-content: center;
  position: relative;
}

.popup .notification_dd li.title .close{
  position: absolute;
  top: 2px;
  right: 10px;
  font-size: 20px;
  cursor: pointer;
}

.popup .notification_dd li.title .close:hover{
  opacity: 0.5;
}

/* reservation */


/*box*/ 
.home-container{

  
  height: 300px;
  width:  805px;
  position: relative;
  margin: auto;

  }
.home-container .box{
  height: calc(300px - 30px);
  width:  calc(400px - 30px);
  float: left;
  
  position: relative;
  margin: 150px 15px 0 15px;
  box-sizing: border-box;
  overflow: hidden;
  border-radius: 10px;

}
.home-container .box .icon{

  position: absolute;
  top: 0;
  left: 0;
  width:  100%;
  height:  100%;
  transition: 0.5s;
  z-index: 1;
  background: #f00;
}

.home-container .box:hover .icon{

  top: 20px;
  left: calc(50% - 75px);
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
.home-container .box .icon img{

  position: absolute;
  width:  100px;
  height:  100px;
  top:  50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 80px;
  transition: 0.5s;
  color:  #fff;

}
.home-container .box .content{

  position: absolute;
  top: 100%;
  height: calc(100% - 100px);
  width: 100%;
  text-align: center;
  padding: 20px;
  box-sizing: border-box;
  opacity: 0;
  transition: 0.5s;
}
.home-container .box:hover .content{
  top: 170px;
  opacity: 1;
}
.home-container .box .content h3{
  margin: 0;
  padding: 0;
  color: #000;
}
.home-container .box .content p{
  margin: 0;
  padding: 0;
  color: #fff;

}
.home-container .box:nth-child(1) .icon{
  background: #d68b00;

}
.home-container .box:nth-child(1) {
  background: #f2a311;
}
.home-container .box:nth-child(2) .icon{
  background: #d68b00;
}
.home-container .box:nth-child(2) {
   background: #f2a311;
}

/*footer*/

.footer{
  
  height: auto;
  width: 100%;
  margin-top: 400px;
  background-color: #111;
  padding-top: 10px;
  color: #ffff;
  border-top: 10px solid #eb7620;

}

.footer-bottom{

  text-align: center;
  justify-items: center;
  display: flex;
  align-items: center;
  flex-direction: column;

}

.footer-bottom p, h3{
  color: #fff;
  margin: 5px;
}


.home-details{

  height: 300px;
  width:  805px;
  position: relative;
  margin: auto;
   background-color: white;
   margin-top: 250px;
}
.home-details .box-details{

 

}


table{

                font-size: 16px;
                border-collapse: collapse;
                width: 100%;
                color: black;
                font-family: monospace;
                text-align: center;
                top: 20px;
                position: relative;
               

}

.price{

  position: absolute;
  top: 0;
  background-color: rgba(0,0,0,0.7);
  width: 100%;
  height: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-content: center;
  visibility: hidden;
  z-index: 1000;

}
.modal{
  z-index: 1px;
  background-color: white;
  width: 500px;
  height: 300px;
  position: relative;

}
.close{
  position: absolute;
  top: 0;
  right: 14px;
  transform: rotate(45deg);
  cursor: pointer;
  font-size: 30px;
}
.close label{
  cursor: pointer;
}


.details{
  position: absolute;
  top: 170px;
  color: white;
  left: 230px;
  cursor: pointer;
  z-index: 1;
}
.details label{
    cursor: pointer;
}
.details input[type = "checkbox"]{
  display: none;
}

