<?php header("Content-type: text/css"); ?>

*,
*:before,
*:after{
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
h1{
	font-size: 2.5rem;
}
h2{
	font-size: 2rem;
	text-transform: uppercase;
	font-weight: 600;
	letter-spacing: 1px;

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
.m-t{
	margin-top: 50px;
}
.m-b{
	margin-bottom: 100px;
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
	z-index: 1000;
}
.logo img{
	height: 80px;
	width: 100%;
}
nav{
	height: 100px;
	background-color: #F7B41E;
	width: 100%;

}
nav h2{
	float: left;
	display: inline;
	line-height: 100px;
	text-shadow: 1px 1px 10px grey;

}
nav ul{
	
	float: right;
	line-height: 100px;
	
}
nav ul li{
	display: inline-block;
	margin: 0 10px;
}
nav ul li a{

	text-transform: uppercase;
}
nav ul li a:hover{
	color: blue;
}
/*
nav ul li a:focus{
	background-color: #eb7620;
	border-radius: 20px;
	padding: 7px 25px;
	color: #fff;
}
*/
/*Showcase Section*/

.showcase{

	height: calc(100vh - 100px);
	background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("ustp.png");
	background-size: cover;
	background-repeat: no-repeat;
	border-bottom: 10px solid #eb7620;
	background-attachment: fixed;


}

.showcase-content{
	margin: auto;
	width: 500px;
	height: 350px;
	position: relative;
}
.showcase-caption{
	text-align: center;
}
.showcase-caption h1{
	color: #fff;
	letter-spacing: 2px;
	padding-top: 80px;
	text-shadow: 2px 2px 4px #000000;

}
.showcase-caption p{
	color: #fff;
	margin: 10px;
	text-shadow: 2px 2px 4px #000000;
}

.showcase-signin{

	background-color: rgba(255, 255, 255, 0.11);
    top: 150px;
	width: 150px;
	height: 150px;
	text-align: center;
	border: 1px solid black;
	margin: auto;
	position: relative;
	margin-left: 15%;
	box-shadow: 2px 2px 4px #000000;
}


.showcase-content img{
  padding: 15px;
  width: 70%;
  height: 70%;
  filter: brightness(0) invert(1);
  opacity: 0.8;
}
.showcase-calendar{
	background-color: rgba(255, 255, 255, 0.11);
	top: 150px;
	width: 150px;
	height: 150px;
	margin: auto;
	margin-left: 55%;
	text-align: center;
	border: 1px solid black;
	position: absolute;
	box-shadow: 2px 2px 4px #000000;
}
.showcase-content p{
	color: #fff;
	margin: 5px;
	font-size: 12px;
}
.showcase-content .btn{
	
	color: #fff;
	border: 1px solid #fff;
	font-weight: 600;
	letter-spacing: 2px;
	text-transform: uppercase;
	transition:ease-out 0.3s;
	position: relative;
	z-index: 1;

}

.showcase-content .btn:hover{
	color: #fff;
	border: 0;
	cursor: pointer;
	transition: 0.5s all ease;
	background-color: #eb7620;

}



/*About us*/
.container-about{
	width: 90%;
	margin: auto;
	text-align: center;
	
}

.about .about-img{
	width: 45%;
	float: left;
	margin-top: 100px;
}
.about-wrapper img{
	max-width: 100%;
	height: auto;
}
.about .about-content{
	width: 45%;
	float: right;
	text-align: left;
	margin-top: 60px;
}
.about .line{
	width: 150px;
	height: 6px;
	margin-top: 10px;
	background-color: #333333;
}

.about p{
	margin-top: 20px;

}
.about ul{
	margin-top: 50px;
	list-style: none;

}
.about ul li{
	margin: 10px 0;
}
.about .fa-li{
	margin-left: -20px;
}
.social-icon{
	margin-top: 50px;
}
.social-icon i{
	padding: 10px;
	margin-left: 30px;
	font-size: 30px;
	border: 1px solid black;
	
}

/*footer*/

.footer{
	
	height: auto;
	width: 100%;
	margin-top: 650px;
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


