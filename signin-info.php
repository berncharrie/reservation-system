<?php header("Content-type: text/css"); ?>

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body{
	font-family: "Poppins", sans-serif;
	

}
:root{
	--el-color:  #333;
}
h1,h2,h3,h4,a,p {
	color:  var(--el-color);
}

a{
	text-decoration: none;
}

h3{
	font-weight: 600;
}
p{
	font-weight: 300;
}
i{
	color: #eb7620;
}

.container{
	width: 100%;
	margin: auto;
	text-align: center;

	
}


/*Header Section*/
header{
	
	position: -webkit-sticky;
	position: sticky;
    top: -20px;
	z-index: 1;
	
}
.container img{
	height: 100px;
	width: 100px;
	float: left;
	margin-top: 5px;
	margin-left: 35px;
}
.m-b{
	margin-bottom: 100px;
}
.m-t{
	margin-top: 50px;
}

nav{
	height: 80px;
	margin-top: 20px;
	background-color: #F7B41E;
	width: 85%;
	float: right;

}
nav h2{
	float: left;
	display: inline;
	line-height: 100px;


}
nav ul{
	
	float: right;
	line-height: 80px;
	
}
nav ul li{
	display: inline-block;
	margin: 0 10px;


}
nav i{
	color: white;
	margin:  10px;
	letter-spacing: 3px;
	


}
nav a{
	margin:  10px;
	font-weight: bold;
}
nav ul li a{

	text-transform: uppercase;
	font-weight: bold;
	justify-content: center;
	align-items: center;

}

nav ul li a i:hover{
	color: blue;


}

.bg-container{

	height: 100vh;
	background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("ustp.png");
	background-size: cover;
	background-repeat: no-repeat;
	border-bottom: 10px solid #eb7620;

}
/*login box*/

.login-box{



	width: 450px;
	height: 380px;
	background: #FCCC6B;
	color: #fff;
	top: 400px;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	border-radius: 5px;
	box-shadow: 1px 1px 5px grey;
}
h4{
	margin-top: 40px;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
	font-weight: 500;
}
p{
	text-align: center;
	font-size: 13px;
	margin-bottom: 10px;
}
.login-box input{
	width: 80%;
	margin-bottom: 20px;
	
}

form{

	
	display: flex;
	justify-content: center;
 	align-items: center;
 	flex-wrap: wrap;
}

.login-box input[type="text"], input[type="number"], input[type="password"]{


	padding: 10px 13px;
	margin: 5px;
	outline: none;
	height: 30px;
	color: #000;
	font-size: 13px;
	font-family: "Poppins";
	border: none;
	box-shadow: 1px 1px 3px grey;
	border-radius: 3px;



}

.login-box input[type="submit"]{

	background: #001933;
	color: #fff;
	font-size: 14px;
	font-family: "Poppins";
	margin: 10px 0 0 5px;
	padding: 5px 3px;
	border: none;
	outline: none;
	font-weight: bold;
	margin-bottom: 10px;
	transition: ease-out 0.3s;
	cursor: pointer;
	bottom: 10px
	
}



.login-box input[type="submit"]:hover{

	box-shadow: inset 350px 0 0 0 #F0AB28;
	cursor: pointer;
	color: #000;
}


.fg a{

	text-decoration: none;
	font-size: 13px;
	line-height: 20px;
	color: #030303;
	text-align: right;
	float: right;
	margin-right: 80px;

}
form p{

text-align: left;
	margin: 0 10px;
}

/*footer*/

.footer{
	
	height: auto;
	width: 100%;
	margin-top: 0px;
	background-color: #111;
	padding-top: 10px;
	color: #ffff;

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

