<?php 
  session_start(); 
  require 'userinfo.php';
  include "connection.php";

if (isset($_POST['submit'])) {

	$idnumber = ($idnumber);
	$fullname = ($fullname);
	$email = ($email); 
	$phone = ($phone);  
	$address = ($address); 
	$course = ($course);
	$year = ($year);  
	$document = $_POST['document'];
	$certification = $_POST['certification'];
	$purpose = $_POST['purpose'];
	$status = 'Pending';

	if ($_POST['document'] == 'Transcript of Records' OR $_POST['document'] == 'Form 137') {
    		$documentcost= 150;
		} elseif ($documenttype == '') {
    		$documentcost = 0;
    	}

		if ($_POST['certification'] == 'Officially Enrolled' OR $_POST['certification'] == 'Subject enrolled' OR $_POST['certification'] == 'GPA' OR $_POST['certification'] == 'Earned Units' OR $_POST['certification'] == 'Subjects with grade') {
    		$certificationcost = 100;
		} elseif ($certtype == '') {
    		$certificationcost = 0;
    	}

    	$total = $documentcost + $certificationcost;


	$sql = "INSERT INTO reserveinfo (idnumber, fullname, email, phone, address, course, year, document, certification, purpose, status, price) VALUES ('$idnumber', '$fullname', '$email', '$phone', '$address', '$course', '$year', '$document', '$certification', '$purpose', '$status', '$total')";
	$result = mysqli_query($conn, $sql);
}
		if ($result) {

           	 header("Location: home-account.php");
	         exit();
           }else {
	           	header("Location: form.php");
		        exit();
           }
