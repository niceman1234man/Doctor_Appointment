<?php
$err="";
$message="";
include("../connection.php");
if(isset($_POST["submit"])){
$title=$_POST["title"];
$date=$_POST["date"];
$num=$_POST["num"];
$time=$_POST["time"];
$speciality=$_POST["speciality"];

$sql = "INSERT INTO session (title, dname, num, date, time) 
VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $title, $speciality, $num, $date,$time);

if ($stmt->execute()) {
$message= "New Session Added!";
} else {
$err= "Error: " . $stmt->error;
}

echo '<center>
      <div style="height: 30%; width: 20%; position:
       absolute; top: 30%; 
      left: 40%;border: 1px solid black;
      border-radius: 5px;
      ">
       <h1>'.   $message . $err .'</h1> 
       <button  style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;">  <a href="Schedule.php">CLOSE</a></button>
     
    </div>

    </center>';
}
?>