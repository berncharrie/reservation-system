<?php 
session_start(); 
include "connection.php";

if (isset($_POST['submit'])) {

	$role = 'student';
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$course = $_POST['course'];
	$year = $_POST['year'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$idnumber = $_POST['idnumber'];
	$password = $_POST['password'];

	    $sql = "SELECT * FROM signin WHERE idnumber='$idnumber'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signin.php");
	        exit();
		}else {
           $sql2 = "INSERT INTO signin(fullname, phone, address, course, year, gender, email, idnumber, password, role) VALUES('$fullname', '$phone', '$address', '$course', '$year', '$gender', '$email', '$idnumber', '$password',  '$role')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: login.php");
	         exit();
           }else {
	           	header("Location: signin.php");
		        exit();
           }
		}
}else{
	header("Location: signin.php");
	exit();
}
