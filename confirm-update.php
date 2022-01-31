<?php
require 'userinfo.php';
include "connection.php";

if(ISSET($_POST['submit'])){

	$appointmentdate = ($_POST['appointmentdate']);
	$appointmenttime = ($_POST['appointmenttime']);
	$message = ($_POST['message']);

	
	$sql = "UPDATE `confirmed` SET `appointmentdate` = '$appointmentdate', `appointmenttime` = '$appointmenttime', `message` = '$message' WHERE `confirmedID` = '$_REQUEST[confirmedID]'";
	$result = mysqli_query($conn, $sql);
           	header("Location: confirm3.php");
	}
?>
