<?php
include("../connection.php");

  $message ="";
  $err ="";

if(isset( $_POST['id'])){
$id = $_POST['id'];

$sql = "DELETE FROM doctor WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    $message= "Doctor deleted successfully !!";
} else {
    $err= "Error deleting record: " . mysqli_error($conn);
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

mysqli_close($conn);
}
?>