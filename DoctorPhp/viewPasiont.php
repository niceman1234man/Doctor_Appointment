<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
</head>

<body>
    <?php
include("../connection.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $sql = "SELECT * FROM `patient` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display the patient details in the HTML structure
?>
    <div class="viewPationtPage">
        <div>
            <label for="View Details.">View Details.</label><br>
            <label for="Patient ID">Patient ID:</label><br>
            <input type="text" required name="PatientID" class="inpSetAcount" value="<?php echo $row["id"]; ?>"
                readonly><br>
            <label for="Name:.">Name</label><br>
            <input type="text" required name="name" class="inpSetAcount"
                value="<?php echo $row["FirstName"] . " " . $row["LastName"]; ?>" readonly><br>
            <label for="Email:">Email:</label><br>
            <input type="email" required name="email" class="inpSetAcount" value="<?php echo $row["email"]; ?>"
                readonly><br>
        </div>
        <div>
            <label for=" NIC:"> NIC:</label><br>
            <input type="text" name="NIC" class="inpSetAcount" value="<?php echo $row["NIC"]; ?>" readonly><br>
            <label for="Telephone:"> Telephone:</label><br>
            <input type="text" name="Telephone:" class="inpSetAcount" value="<?php echo $row["phone_number"]; ?>"
                readonly><br>
            <!-- <label for=" Address"> Address:</label><br>
            <input type="text" name="Address" class="inpSetAcount" value="<?php //echo $row["Address"]; ?>" readonly><br> -->
            <button class="btnSetAcount"><a href="mypationt.php">ok</a></button><br>
        </div>
    </div>
    <?php
    } else {
        echo "No patient found with the provided ID.";
    }

    $stmt->close();
}

$conn->close();
?>
    <script src="../DoctorJs/index.js"></script>
</body>

</html>