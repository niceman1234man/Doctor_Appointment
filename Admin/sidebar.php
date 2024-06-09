<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time();?>">
</head>

<body>
    <div class="side-bar">
        <h1>Admin Slide</h1>
        <p> <img src="../img/user.png" alt="administer img" id="admin-img">Administrator</p>
        <button id="logout-button">Log out</button>
        <ul class="slid-bar-details">
            <a href="admin.php">
                <li><img src="../img/icons/dashboard.svg" alt="">Dashboard</li>
            </a>
            <a href="Doctors.php">
                <li><img src="../img/icons/doctors.svg" alt="">Doctors</li>
            </a>
            <a href="Schedule.php">
                <li><img src="../img/icons/schedule.svg" alt="">Schedule</li>
            </a>
            <a href="Appointment.php">
                <li><img src="../img/icons/book.svg" alt="">Appointment</li>
            </a>
            <a href="Patients.php">
                <li><img src="../img/icons/patients.svg" alt="">Patients</li>
            </a>
        </ul>
    </div>
</body>

</html>