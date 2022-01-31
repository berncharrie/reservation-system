<?php
	require 'connection.php';
	$query = $conn->query("SELECT * FROM `signin` WHERE `idnumber` = '$_SESSION[idnumber]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$fullname = $fetch['fullname'];
	$phone = $fetch['phone'];
	$address = $fetch['address'];
	$course = $fetch['course'];
	$year = $fetch['year'];
	$gender = $fetch['gender'];
	$email = $fetch['email'];
	$idnumber = $fetch['idnumber'];
	$role = $fetch['role'];

?>