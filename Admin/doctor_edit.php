<?php
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
  $sql = "UPDATE doctor SET name='$name', email='$email',nic='$nic',telephone='$telephone',speciality='$speciality',password='$password' WHERE id='$id'";
  if($password==$confirm){
      mysqli_query($conn,$sql);
      $message= " Doctor updated!";
  }else{
      $err="please insert correct password!";
  }
  echo '<center>
        <div style="height: 30%; width: 20%; position:
         absolute; top: 30%; 
        left: 40%;border: 1px solid black;
        border-radius: 5px;
        ">
         <h1>'.   $message . $err .'</h1> 
         <button  style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;">  <a href="Doctors.php">CLOSE</a></button>
       
      </div>
  
      </center>';
  }
  ?>