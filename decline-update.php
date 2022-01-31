<?php
require 'userinfo.php';
include "connection.php";

if(ISSET($_POST['submit'])){

	$reason = ($_POST['reason']);
	
	$sql = "UPDATE `declined` SET `reason` = '$reason' WHERE `declinedID` = '$_REQUEST[declinedID]'";
	$result = mysqli_query($conn, $sql);
           	header("Location: decline3.php");
	}
?>
