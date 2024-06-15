<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view_patient</title>
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>

<body>
    <?php
include("../connection.php");

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $sql = "SELECT * FROM patient WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row["FirstName"];
        $lname = $row["LastName"];
        $nic = $row["NIC"];
        $tel = $row["phone_number"];
        $email = $row["email"];
        $date_of_birth = $row["date_of_birth"];
        $address = $row["Address"];

        echo '<div class="patients-detail">
            <a href="Patients.php">
                <p id="xp-sign">&times;</p>
            </a>
            <h2>View Detail</h2>
            <p>Patient ID:' . $id . '</p>
            <p>Name :' . $name . ' ' . $lname . '</p>
            <p>Email :' . $email . '</p>
            <p> NIC :' . $nic . '</p>
            <p>Telephone :' . $tel . '</p>
            <p>date of birth : ' . $date_of_birth . '</p>
            <p>Address: ' . $address . '</p>
            <a href="Patients.php"><button id="ok">OK</button></a>
        </div>';
    } else {
        echo "No patient found with the given ID.";
    }
} else {
    echo "No patient ID provided.";
}
?>
</body>

</html>