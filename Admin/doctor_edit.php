<?php
session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
   header("Location: ../loginform.php");
}

include("../connection.php");
if(isset($_POST["update"])){
$message="";
$err="";
$name=$_POST["name"];
$email=$_POST["email"];
$nic=$_POST["nic"];
$telephone=$_POST["telephone"];
$speciality=$_POST["speciality"];
$password=$_POST["password"];
$confirm=$_POST["confirm"];
$id=$_POST["id"];
if($password==$confirm){
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE doctor SET name='$name',
email='$email',nic='$nic',telephone='$telephone',speciality='$speciality',password='$hashedPassword' WHERE id='$id'";

mysqli_query($conn,$sql);
$message= $name."<br> Doctor updated!";
}else{
$err="please insert correct password!";
}
echo '<center>
    <div style="height: 30%; width: 20%; position:
         absolute; top: 30%; 
        left: 40%;border: 1px solid black;
        border-radius: 5px;  box-shadow: 10px 10px 10px  rgb(60 24 202);
        ">
        <h1>'. $message . $err .'</h1>
        <button
            style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;">
            <a href="Doctors.php">CLOSE</a></button>

    </div>

</center>';
}
?>