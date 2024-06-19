<?php

session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
   header("Location: ../loginform.php");
}

$err="";
$message="";

function validateTime($time) {
// Convert the input time to a DateTime object
$selectedTime = new DateTime($time);

// Get the current time
$currentTime = new DateTime();

// Check if the selected time is on or after the current time
if ($selectedTime >= $currentTime) {
return true; // Time is valid
} else {
return false; // Time is in the past
}
}
function validateDate($date) {
// Convert the input date to a DateTime object
$selectedDate = new DateTime($date);

// Get the current date
$today = new DateTime();

// Check if the selected date is on or after the current date
if ($selectedDate >= $today) {
return true; // Date is valid
} else {
return false; // Date is in the past
}
}
include("../connection.php");
if(isset($_POST["submit"])){
$title=$_POST["title"];
$date=$_POST["date"];
$num=$_POST["num"];
$time=$_POST["time"];
$speciality=$_POST["speciality"];

if (validateDate($date)&& validateTime($time)) {
// Date is valid, proceed with form processing
$sql = "INSERT INTO session (title, dname, num, date, time)
VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $title, $speciality, $num, $date,$time);

if ($stmt->execute()) {
$message= "New Session Added!";
} else {
$err= "Error: " . $stmt->error;
}
} else {
// Date is in the past, display an error message
$err= "Please select after the current date and time.";
}
}




echo '<center>
    <div style="height: 30%; width: 20%; position:
       absolute; top: 30%; 
      left: 40%;border: 1px solid black;
      border-radius: 5px;
      ">
        <h1>'. $message . $err .'</h1>
        <button
            style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;">
            <a href="Schedule.php">CLOSE</a></button>

    </div>

</center>';

?>