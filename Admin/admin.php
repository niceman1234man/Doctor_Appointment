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
   include("../connection.php");
    $list3 = "select * from patient";
       $result = mysqli_query($conn, $list3);
       $list1 = "select * from doctor";
        $resultd = mysqli_query($conn, $list1);
   ?>
    <div class="main-part">
        <img src="../img/search.svg" alt="search" id="search-img">
        <form action="Doctors.php" method="post">
            <input type="search" placeholder="Search Doctor Name or Email" id="search" name="search_term">
            <input type="submit" name="search" id="search-button" value="Search">
        </form>
        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br>
            <?php date_default_timezone_set('Asia/Kolkata');
             $today=date('Y-m-d');
              echo $today;?> </p><br>
        <h2>Status</h2>
        <div class="main-part-list">
            <ul>
                <li><?php  
       echo mysqli_num_rows($resultd);
       ?>
                    Doctors <img src="../img/icons/doctors.svg" alt=""></li>
                <li><?php  
       echo mysqli_num_rows($result);
       ?> Patients <img src="../img/icons/patients.svg" alt=""></li>
                <li>New Booking's <img src="../img/icons/book.svg" alt=""></li>
                <li>Today's Session <img src="../img/icons/session.svg" alt=""></li>
            </ul>

        </div>
        <?php 
        
        
        
        ?>
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
                        <th>Session Title</th>
                    </tr>

                </table>

                <a href="Appointment.php"><button class="show-button" name="show_sess">Show all
                        Appointments</button></a>

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

                    </tr>
                </table>
                <a href="Schedule.php"><button class="show-button" name="show_sess">Show all Sesssions</button></a>
            </div>
        </div>
    </div>
    <script src="../JS/index.js"></script>
</body>

</html>