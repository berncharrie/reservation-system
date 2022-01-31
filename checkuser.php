<?php 
	session_start();
	if(!ISSET($_SESSION['idnumber'])){
		header("location:home.php");
	}