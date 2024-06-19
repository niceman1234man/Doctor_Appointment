<?php
session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
    echo "Session not started or user not logged in.";
    exit;
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="side-bar">
        <h1>Doctor Slide</h1>
        <p> <img src="../img/user.png" alt="administer img" id="admin-img">
            <?php
        echo  $user;
        ?>

        </p>
        <a href="../logout.php"> <button id="logout-button">Log out</button> </a>
        <ul class="slid-bar-details">
            <a href="DashBourd.php">
                <li><img src="../img/icons/dashboard.svg" alt="">Dashboard</li>
            </a>
            <a href="apointment.php">
                <li><img src="../img/icons/book.svg" alt="">My Appointment</li>
            </a>
            <a href="session.php">
                <li><img src="../img/icons/schedule.svg" alt="">My Sessions</li>
            </a>
            <a href="mypationt.php">
                <li><img src="../img/icons/patients.svg" alt="">My Patients</li>
            </a>
            <a href="setting.php">
                <li><img src="../img/icons/doctors.svg" alt="">Setting</li>
            </a>
        </ul>
    </div>
    <script src="../DoctorJs/index.js"></script>
</body>

</html>