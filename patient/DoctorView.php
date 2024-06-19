
<?php
include("../connection.php");
$id=$_POST["id"];
$sqlquery = "SELECT * FROM doctor WHERE id = '$id'";
  
  $result=mysqli_query($conn,$sqlquery);
  $row=mysqli_fetch_array($result);


 echo '<div style="position:absolute; top:20%;left:20%;width:50%;border: 1px solid black;box-shadow:10px 10px 10px 10px blue;padding:2%;">
  <h3>Patient Appointment Web</h3>
      <h2>View Details</h2>
      <p>Name: <br>  '. $row["name"] . '<br> </p>
      <p>Email: <br> '. $row["email"] .' <br> </p>
      <p>NIC: <br> '. $row["nic"] .' <br> </p>
      <p>Telephone: <br>' . $row["telephone"] .' <br> </p>
      <p>Specialities: <br>'. $row["speciality"] .' <br> </p>
     <a href="Doctor.php"> <button style="padding:2%">OK</button></a>

</div>; '
?>