<?php
include("connection.php");
if(isset($_POST["submit"])){
$title=$_POST["title"];
$date=$_POST["date"];
$num=$_POST["num"];
$time=$_POST["time"];
$speciality=$_POST["speciality"];
$sql="insert into session  values('$title','$speciality','$num','$date','$time')";
if(mysqli_query($conn,$sql)){
    echo "New Session Added!";
    header("Location:Schedule.php");
}else{
    echo "please insert correct password!";
}
}
?>