<?php
include("connection.php");
if(isset($_POST["submit"])){
$fName=$_POST["Fname"];
$lName=$_POST["Lname"];
$email=$_POST["email"];
$nic=$_POST["NIC"];
$telephone=$_POST["Telephone"];
$speciality=$_POST["specialties"];
$password=$_POST["password"];
$confirm=$_POST["ConformPassword"];
$sql="insert into   Doctor  values('$fName','$lName','$nic','$email','$telephone','$speciality','$password')";
if($password==$confirm){
    mysqli_query($conn,$sql);
    echo "New Doctor Added!";
}else{
    echo "please insert correct password!";
}


}

mysqli_close($conn);
?>