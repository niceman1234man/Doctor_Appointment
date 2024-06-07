<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time();?>">
</head>

<body>
    <?php
   include("sidebar.php");
   ?>
    <div class="main-part">
        <img src="../img/search.svg" alt="search" id="search-img">
        <input type="search" placeholder="search Doctor Name or Email" id="search">
        <button id="search-button">search</button>
        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br></p><br>
        <h2>Status</h2>
        <ul class="main-part-list">
            <li>Doctors <img src="../img/icons/doctors.svg" alt=""></li>
            <li>Patients <img src="../img/icons/patients.svg" alt=""></li>
            <li>New Booking's <img src="../img/icons/book.svg" alt=""></li>
            <li>Today's Session <img src="../img/icons/session.svg" alt=""></li>
        </ul>
        <div class="main-part-detail">
            <div class="main-part-appoint">
                <h3>Upcoming Appointments Until next Friday</h3>
                <p>Here is quick search for upcoming appointments until 7 days to the next friday you can accses
                    @Appointment section </p>
                <table>
                    <tr>
                        <th>Appointment Number</th>
                        <th>Patient Name </th>
                        <th>Doctor</th>
                        <th>Session</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>4</td>
                        <td>5</td>

                    </tr>
                </table>
                <button class="show-button">Show all Appointments</button>
            </div>
            <div class="main-part-session">
                <h3>Upcoming Sesssions Until next Friday</h3>
                <p>Here is quick search for upcoming appointments until 7 days to the next friday you can accses
                    @Session section </p>
                <table>
                    <tr>
                        <th>Session Title</th>
                        <th>Doctor</th>
                        <th>Schedule Date&time</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>4</td>


                    </tr>
                </table>
                <button class="show-button">Show all Sesssions</button>
            </div>
        </div>
    </div>
    <script src="../JS/index.js"></script>
</body>

</html>