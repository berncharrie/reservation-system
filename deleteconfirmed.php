<?php 
require_once 'connection.php';

	$sql = "DELETE FROM `confirmed` WHERE `confirmedID` = '$_REQUEST[confirmedID]'";
	$result = mysqli_query($conn, $sql);
	header("location:confirm3.php");

?>
