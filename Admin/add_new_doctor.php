<?php
include("../connection.php");
if(isset($_POST["submit"])){
    
$name=$_POST["name"];
$email=$_POST["email"];
$nic=$_POST["nic"];
$telephone=$_POST["telephone"];
$speciality=$_POST["speciality"];
$password=$_POST["password"];
$confirm=$_POST["confirm"];
$sql="insert into   doctor  values('$name','$email','$nic','$telephone','$speciality','$password')";
if($password==$confirm){
    mysqli_query($conn,$sql);
    echo "New Doctor Added!";
}else{
    echo "please insert correct password!";
}
header("location: Doctor.php");

}

mysqli_close($conn);
?>