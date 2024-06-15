<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
    </head>
<body>
    <section class="doctor_first_section">
    <?php include ("sidBar.php")?>
        <div class="dashbourd" id="dashbourd">
            <!-- //////////////// -->
            <div class="topTitle">
                <div> <button class="backImg"><img src="../images/icons/back-iceblue.svg" class="backImg">back</button><span
                        class="set">Dashbourd</span> </div>
                <div class="todaysDate">
                    <h5>todays date</h5>
                </div>
            </div>
            <!-- //////// -->
            <div class="welcome">
                <h1 class="h1">welcome!</h1>
                <h4>Test Doctor.</h4>
                <p class="par1">Thanks for joinnig with us. We are always trying to get you a complete service
                    You can view your dailly schedule, Reach Patients Appointment at home!</p>
                <br>
                <a href="apointment.php"><button class="btn">View My Apointment</button></a>
            </div>
            <!-- ////////////////// -->
            <div class="statusUpcomingEvent">
                <div class="statusDash">
                    <table>
                    <h4>status</h4>
                        <tr><td><div><a>All Doctors <img src="../images/icons/doctors-hover.svg" class="statusimg"></a></div>
                        </td><td><div> <a> All Patients <img src="../images/icons/patients-hover.svg" class="statusimg"></a></div>
                        </td></tr>
                        <tr><td><div><a>NewBooking <img src="../images/icons/book-hover.svg" class="statusimg"></a></div>
                        </td><td><div><a>Today Sessions<img src="../images/icons/session-iceblue.svg" class="statusimg"></a></div>
                        </td></tr>
                    </table>
                </div>
            <div class="upcoming_events">
            <h3>your Up Coming Sessions untill Next Week</h3>
<?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT *FROM `Sessions` WHERE 1";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '
    <table >
        <tr>
            <th>Title</th>
            <th>Date & Time</th>
            <th>Max Num</th>
        </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        echo '
        <tr>
            <td>' . $row["Title"] . '</td>
            <td>' . $row["Date & Time"] . '</td>
            <td>' . $row["Max num"] . '</td>
        </tr>';
    }
    echo '</table>';
} else {
    echo "No results found.";
}
$connection->close();
?>
        
            </div>
            <!-- ////////////// -->

</div>
    </section>
    <!-- MY APOINTMENT SECTION -->
    <script src="../DoctorJs/index.js"></script>

</body>

</html>