<?php
session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
   header("Location: ../loginform.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View schedule</title>
    <link rel="stylesheet" href="../CSS/doctor.css">

</head>
<html>

<body>
    <?php
include("../connection.php");

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $sql = "SELECT * FROM session WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row["title"];
        $spec = $row["dname"];
        $mnum = $row["num"];
        $d = $row["date"];
        $t = $row["time"];

        echo '<div class="schedule-detail">
            <a href="Schedule.php">
                <p id="xs-sign">&times;</p>
            </a>
            <h2>View Detail</h2><br><br><br>
            <p>Session Title: ' . $title . '</p>
            <p>Doctor of This Session: ' . $spec . '</p>
            <p>Scheduled Date: ' . $d . '</p>
            <p>Scheduled Time: ' . $t . '</p>
             <a href="Schedule.php"><button id="ok"  style="padding:2%;background:blue;color:white;">OK</button></a>
           
        </div>';
    } else {
        echo "No session found with the given ID.";
    }
} else {
    echo "No session ID provided.";
}
?>
</body>

</html>