<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR DETAIL</title>
</head>
<body>
<div class="viewdetail">
<?php
// Include the database connection file
include("connection.php");
// Retrieve the data from the database
$sql = "SELECT `Fname`, `Lname`, `NIC`, `userName`, `Email`, `Telephone`, `Speciality` FROM `Doctor` WHERE `Fname` = 'tsion'";
$result = mysqli_query($connection, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Fetch the data row by row
    while ($row = mysqli_fetch_assoc($result)) {
        $fName = $row["Fname"];
        $lName = $row["Lname"];
        $nic = $row["NIC"];
        $userName = $row["userName"];    
        $email = $row["Email"];
        $telephone = $row["Telephone"];
        $speciality = $row["Speciality"];
?>
                    <div class="buton" onclick="hidDetail()" >
                        &times;
                        </div>
                    <label for="View Details.">View Details.</label><br>
                    <label for="Name:.">Name</label><br>
                    <input type="text"  name="name"  class="inpSetAcount" readonly value="<?php echo $fName . ' ' . $lName; ?>"><br>
                    <label for="Email:">Email:</label><br>
                    <input type="email"  name="email" class="inpSetAcount" readonly value="<?php echo $email; ?>"><br>
                    <label for=" NIC:"> NIC:</label><br>
                    <input type="text" name="NIC" class="inpSetAcount" readonly value="<?php echo $nic; ?>"><br>
                    <label for="Name">User Name: </label><br>
                    <input type="text" required name="userName" class="inpSetAcount" value="<?php echo $userName; ?>"><br>
                    <label for="Telephone:"> Telephone:</label><br>
                    <input type="text" name="Telephone"  class="inpSetAcount" readonly value="<?php echo $telephone; ?>"><br>
                    <label for=" Specialties."> Specialties.</label><br>
                    <input type="text" name="speciality"  class="inpSetAcount" readonly value="<?php echo $speciality; ?>"><br>
                    <button class="btnSetAcount" onclick="hidDetail()">Ok</button><br>
                </div>
<?php
    }
} 
else {
    echo "No data found in the database.";
}
mysqli_close($connection);
?>
</body>
</html>