<?php
session_start();

$uname = $_POST["uname"];
$pass = $_POST["password"];
 $_SESSION["uname"]= $uname;
 $_SESSION["password"]=  $pass;
include("connection.php");

    $sql = "SELECT * FROM users WHERE password = '$pass' AND username = '$uname'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        echo $row["username"] .  $row["usertype"]. $row["password"];
        if($row["usertype"] == 'p'){
            header("Location:patient/Home.php");
            exit; 
        }else if($row["usertype"] == 'd'){
            header("Location:DoctorPhp/DashBourd.php");
            exit;
        }else if($row["usertype"] == 'a'){
            header("Location: Admin/admin.php");
            exit;
        }else{
            header("Location: login.html");
            exit;
        }
    }else{
        echo "This User does not exist";
    }

?>