<?php 
session_start(); 
require 'userinfo.php';
include "connection.php";

            $sql = "INSERT INTO `declined` (reservationID, idnumber, fullname, document, certification, purpose) 
				SELECT reservationID, idnumber, fullname, document, certification, purpose FROM `reserveinfo` WHERE `reservationID` = '$_REQUEST[reservationID]'";
			$result = mysqli_query($conn, $sql);

 
            $sql2 = "UPDATE `declined` SET `status` = 'Declined'";
            $result2 = mysqli_query($conn, $sql2);


            $sql3 = "DELETE FROM `reserveinfo` WHERE `reservationID` = '$_REQUEST[reservationID]'";
			$result3 = mysqli_query($conn, $sql3);
			header("Location: decline3.php");
 ?>

