<?php
session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
    echo "Session not started or user not logged in.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR DETAIL</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">

</head>

<body>
    <div class="viewDocdetail">
        <?php
// Include the database connection file
include("../connection.php");
// Retrieve the data from the database
$sql = "SELECT * FROM `doctor` where username='$user' ";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Fetch the data row by row


    while ($row = mysqli_fetch_assoc($result)) {
        $fName = $row["name"];
        // $lName = $row["Lname"];
        $nic = $row["nic"];
        $userName = $row["username"];    
        $email = $row["email"];
        $telephone = $row["telephone"];
        $speciality = $row["speciality"];
?> 
<div>
            <label for="View Details.">View Details.</label><br>
            <label for="Name:.">Name</label><br>
            <input type="text" name="name" class="inpSetAcount" readonly value="<?php echo $fName ; ?>"><br>
            <label for="Email:">Email:</label><br>
            <input type="email" name="email" class="inpSetAcount" readonly value="<?php echo $email; ?>"><br>
            <label for=" NIC:"> NIC:</label><br>
            <input type="text" name="NIC" class="inpSetAcount" readonly value="<?php echo $nic; ?>"><br>
        </div>
        <div>
            <label for="Name">User Name: </label><br>
            <input type="text" required name="userName" class="inpSetAcount" value="<?php echo $userName; ?>"><br>
            <label for="Telephone:"> Telephone:</label><br>
            <input type="text" name="Telephone" class="inpSetAcount" readonly value="<?php echo $telephone; ?>"><br>
            <label for=" Specialties."> Specialties.</label><br>
            <input type="text" name="speciality" class="inpSetAcount" readonly value="<?php echo $speciality; ?>"><br>
            <a href="setting.php"><button class="btnSetAcount">Ok</button></a><br>
        </div>
    </div>
    <?php
    }
} 
else {
    echo "No data found in the database.";
}
mysqli_close($conn);
?>
</body>

</html>