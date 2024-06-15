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
                    <h3>todays date</h3>
                </div>
            </div>
            <!-- //////// -->
            <div class="welcome">
                <h1 class="h1">welcome!</h1>
                <h2>Test Doctor.</h2>
                <p class="par1">Thanks for joinnig with us. We are always trying to get you a complete service
                    You can view your dailly schedule, Reach Patients Appointment at home!</p>
                <br>
                <a href="apointment.php" class="btn">View My Apointment</a>
            </div>
            <!-- ////////////////// -->
            <div class="statusUpcomingEvent">
                <h1>status</h1>
                <div class="statusDash">
                    <div><a>All Doctors <img src="../images/icons/doctors-hover.svg" class="statusimg"></a> <a> All
                            Patients <img src="../images/icons/patients-hover.svg" class="statusimg"></a></div>
                    <div><a>NewBooking <img src="../images/icons/book-hover.svg" class="statusimg"></a><a>Today Sessions
                            <img src="../images/icons/session-iceblue.svg" class="statusimg"></a></div>
                </div>
                <!-- ***************************** -->
                <div class="upcoming_events">
                    <h1>your Up Coming Sessions untill Next Week</h1>
                    <table cellspacing="30">
                        <tr>
                            <th>Session Title</th>
                            <th>Sheduled Date<th>
                                <th>Time</th>
                        </tr>
                        <tr><td>title1</td><td>schedule1</td> <td>time1</td></tr>
                    </table>
                    <a class="showSesions" href="session.php"> Show All Sessions</a>
                </div>
            </div>
            <!-- ////////////// -->

</div>
    </section>
    <!-- MY APOINTMENT SECTION -->
    <script src="../DoctorJs/index.js"></script>

</body>

</html>