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
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">

</head>

<body>
    <div class="side_bar">
        <P><img src="../images/img/user.png" class="sidbarUserImg"><?php echo   $user ;?></P>

        <a href="../logout.php"><button class="loginbtn">log out</button></a>
        <ul class="doctor-sidebar">
            <li><a href="DashBourd.php"><img src="../images//icons/dashboard.svg">Dashbourd</a></li>
            <li><a href="apointment.php"><img src="../images/icons/apointment.svg">My Apointment</a> </li>
            <li> <a href="session.php"><img src="../images/icons/session.svg">My Sessions</a></li>
            <li><a href="mypationt.php"><img src="../images/icons/patients.svg">My Pationts</a></li>
            <li><a href="setting.php"><img src="../images/icons/settings.svg">Setting</a></li>
            <li></li>
        </ul>
    </div>
    <script src="../DoctorJs/index.js"></script>

</body>

</html>