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
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>

<body>
    <?php include ("sidebar.php")?>
    <div class="main-part">
        <div class="dashbourd" id="dashbourd">
            <!-- //////////////// -->
            <div class="topTitle">
                <div> <span class="set">Dashbourd</span> </div>
                <div class="todaysDate">
                    <h5>todays date <p><?php date_default_timezone_set('Asia/Kolkata');
             $today=date('Y-m-d');
              echo $today;?> </p><br></h5>
                </div>
            </div>
            <!-- //////// -->
            <div class="welcome">
                <h1 class="h1">welcome!</h1>
                <h4><?php   echo $user ?>.</h4>
                <p class="par1">Thanks for joinnig with us. We are always trying to get you a complete service
                    You can view your dailly schedule, Reach Patients Appointment at home!</p>
                <br>
                <a href="apointment.php"><button class="btn">View My Apointment</button></a>
            </div>
            <!-- ////////////////// -->
            <div class="statusUpcomingEvent">
                <div class="statusDash">
                    <h4 style="left:25%;position:absolute">status</h4>
                    <table>

                        <tr >
                            <td  class="status">
                                <?php
                                include("../connection.php");
                                $sql="select * FROM doctor ";
                                if($result=mysqli_query($conn,$sql)){
                                 $numd=   mysqli_num_rows($result);

                                }
                                $sql2="select * FROM patient ";
                                if($result2=mysqli_query($conn,$sql2)){
                                 $nump=   mysqli_num_rows($result2);

                                }
                                $sql3="select * FROM session ";
                                if($result3=mysqli_query($conn,$sql3)){
                                 $nums=   mysqli_num_rows($result3);

                                }
                                $sql4="select * FROM appointment ";
                                if($result4=mysqli_query($conn,$sql4)){
                                 $numa=   mysqli_num_rows($result4);

                                }

                                ?>
                                <div><a>All Doctors <?php echo   $numd?><img src="../images/icons/doctors-hover.svg" class="statusimg"></a>
                                </div>
                            </td>
                            <td class="status">
                                <div> <a> All Patients <?php echo   $nump?><img src="../images/icons/patients-hover.svg"
                                            class="statusimg"></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td  class="status">
                                <div><a>NewBooking <?php echo   $numa?><img src="../images/icons/book-hover.svg" class="statusimg"></a>
                                </div>
                            </td>
                            <td  class="status">
                                <div><a>Today Sessions <?php echo   $nums?><img src="../images/icons/session-iceblue.svg"
                                            class="statusimg"></a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="upcoming_events">
                    <h3>your Up Coming Sessions untill Next Week</h3>
                    <?php
include("../connection.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *FROM session ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '
    <table >
        <tr>
            <th>Session Title</th>
            <th>Date </th>
            <th>Time</th>
        </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        echo '
        <tr>
            <td>' . $row["title"] . '</td>
            <td>' . $row["date"] .'</td>
            <td>' .$row["time"] .  '</td>
        </tr>';
    }
    echo '</table>';
} else {
    echo "No results found.";
}
$conn->close();
?>

                </div>
                <!-- ////////////// -->

            </div>
        </div>
        <!-- MY APOINTMENT SECTION -->
        <script src="../DoctorJs/index.js"></script>

</body>

</html>