<?php

session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
   header("Location: ../loginform.php");
}

include("../connection.php");

$message = "";
$err = "";

if(isset($_POST['id'])){
$id = $_POST['id'];

// Add confirmation dialog
if(isset($_POST['confirm'])) {
$sql = "DELETE FROM doctor WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
$message= "Doctor deleted successfully !!";
} else {
$err= "Error deleting record: " . mysqli_error($conn);
}
} else {
// Display confirmation dialog
echo '<center>
    <div
        style="height: 40%; width: 20%; position: absolute; top: 30%; left: 40%;border: 1px solid black;border-radius: 5px;box-shadow:10px 10px 10px 10px blue;">
        <h1>Are you sure you want to delete this doctor?</h1>
        <form method="post">
            <input type="hidden" name="id" value="'.$id.'">
            <input type="hidden" name="confirm" value="1">
            <button
                style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;">Confirm</button>
            <a href="Doctors.php"
                style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;">Cancel</a>
        </form>
    </div>
</center>';
return;
}

echo '<center>
    <div
        style="height: 30%; width: 20%; position: absolute; top: 30%; left: 40%;border: 1px solid black;border-radius: 5px;">
        <h1>'.$message.$err.'</h1>
        <button
            style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;"><a
                href="Doctors.php">CLOSE</a></button>
    </div>
</center>';

mysqli_close($conn);
}
?>