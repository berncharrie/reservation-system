<?php header("Content-type: text/css"); ?>



*{
	margin: 0;
	padding: 0;

}
body{

	height: 100vh;
	width: 100%;
	font-family: "Poppins", sans-serif;



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



.content{

	position: relative;
	width: 400px;
	height: 350px;
	top:  160px;
	left: 440px;
	background-color: #8ECAE6;


}
.text-content{

	width: 400px;
	height: 350px;
	position: absolute;
	background-color: #F4EEEE;
	top:  150px;
	left: 450px;
	

}

p{

	text-align: center;
	margin-top: 30px;
	padding: 30px;
	font-size: 24px;

}
.text-content i{

	margin-left: 190px;
	font-size: 26px;
	color: green;
}

.ref-no{

	
	margin-top: 100px;
	margin-left: 200px;
	font-family: 'Playfair Display', serif;
}

.buttons{

	
	position: relative;
	top: 190px;
	left: 580px;

}
.btn{

	height: 40px;
	width: 100px;
	cursor: pointer;
	background-color: #F7B41E;
	text-align: center;
	line-height: 30px;
	transform: all ease 1s;
	border-radius: 5px;
}

.btn a{

	text-decoration: none;
	font-size: 14px;
	color: black;

}
.btn:hover{

	background-color: #9B870c;

}