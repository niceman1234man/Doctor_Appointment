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

            echo '
            <div class="doctor-detail">
                <div class="pop-up-header">
                    <h2>View Detail</h2>
                    <a href="Doctors.php">
                        <p id="xd-sign">&times;</p>
                    </a>
                </div>
                <p>ID :</p>
                <p>' . $id . '</p>
                <p>Name :</p>
                <p>' . $name . '</p>
                <p>Email :</p>
                <p>' . $email . '</p>
                <p>NIC :</p>
                <p>' . $nic . '</p>
                <p>Telephone :</p>
                <p>' . $telephone . '</p>
                <p>Specialities :</p>
                <p>' . $spec . '</p>
                <a href="Doctors.php"><button>OK</button></a>
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