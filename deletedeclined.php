<?php 
require_once 'connection.php';

	$sql = "DELETE FROM `declined` WHERE `declinedID` = '$_REQUEST[declinedID]'";
	$result = mysqli_query($conn, $sql);
	header("location:decline3.php");

?>
