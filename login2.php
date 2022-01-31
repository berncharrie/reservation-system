<?php 
session_start(); 
include "connection.php";

if (isset($_POST['idnumber']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $idnumber = validate($_POST['idnumber']);
    $password = validate($_POST['password']);
        
        $sql = "SELECT * FROM signin WHERE idnumber='$idnumber' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['idnumber'] === $idnumber && $row['password'] === $password && $row['role'] == 'student' ) {
                $_SESSION['role'] = $row['role'];
                $_SESSION['idnumber'] = $row['idnumber'];
                header("Location: home-account.php");
                exit();
            }else if ($row['idnumber'] === $idnumber && $row['password'] === $password && $row['role'] == 'admin' ) {
                $_SESSION['role'] = $row['role'];
                $_SESSION['idnumber'] = $row['idnumber'];
                header("Location: home-admin.php");
                exit();
            }
            else{
                header("Location: login.php");
                exit();
            }
        }else{
            header("Location: login.php");
            exit();
    }
}else{
    header("Location: login.php");
    exit();
}