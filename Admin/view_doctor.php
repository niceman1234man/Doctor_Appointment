<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Doctor</title>
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>

<body>
    <?php
    include("connection.php");
    if (isset($_POST["id"])) {
        $id = $_POST["id"];
        $sql = "SELECT * FROM doctor WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $name = $row["name"];
            $email = $row["email"];
            $nic = $row["nic"];
            $telephone = $row["telephone"];
            $spec = $row["speciality"];
            $id = $row["id"];

            echo ' <div class="doctor-detail">
            <a href="Doctors.php">
                <p id="xd-sign">&times;</p>
            </a>
        <h2>View Detail</h2>
        <p>ID :' . $id . '</p>
        <p>Name :' . $name . '</p>
        <p>Email :' . $email . '</p>
        <p>NIC :' . $nic . '</p>
        <p>Telephone :' . $telephone . '</p>
        <p>Specialities :' . $spec . '</p>
        <a href="Doctors.php"><button id="ok">OK</button></a>
    </div>';
        } else {
            echo "No doctor found with the given ID.";
        }
    } else {
        echo "No doctor ID provided.";
    }
    ?>




</body>

</html>