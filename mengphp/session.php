<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" type="text/css" href="../mengcss/index.css">
    </head>
<body>
    <section class="myApointment" id="myApointment">
               <?php include ("sidBar.php")?>
            <div class="Appointments">
        <div class="topTitle">
            <div class="head"> <button class="backImg"><img src="../images//icons/back-iceblue.svg" class="backImg">back</button>  <span class="set">My Sessions</span></div>
            <div class="todaysDate"><h5>todays date</h5> </div>
        </div>
        <h1>My Sessions</h1>

                <div  class="inputDate"> <span class="dateSesLable">Date:</span><input type="date"> <button class="filterbtn"><img src="../images/icons/filter-iceblue.svg" class="filteimg"> Filter</button></div>

                <div class="apointTable">
              <table cellspacing="30" class="table"> 
                <tr><th>Session Title</th>
                <th>Sheduled Date & Time</th>
                <th>Max num that can be booked	</th>
                <th>Events</th></tr>
                 <tr>
                    <td> Test Session</td>
                 <td>2050-01-01 18:00	</td>
                 <td>50</td><td><button class="tablebtn" onclick="displaySession()">
                    <img src="../images/icons/view-iceblue.svg" alt=""> view</button>
                    <button class="tablebtn" onclick="displayCancelSesion()"><img src="../images/icons/delete-iceblue.svg">cancel session</button>
                </td>
            </tr></table>
            </div>
            </div>
        </section>
        <section>
        <?php
include("connection.php");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve data from the Sessions table
$sql = "SELECT * FROM Sessions";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Display the retrieved data
        echo "<div class='viewSession'>";
        echo "    <div class='buton' onclick='hidSession()'>&times;</div>";
        echo "    <label for='View Details.'>View Details.</label><br>";
        echo "    <label for='Session Title:'>Session Title:</label><br>";
        echo "    <input type='text' required name='sessiontitle' class='inpSetAcount' readonly value='" . $row["Title"] . "'><br>";
        echo "    <label for='Doctor of this session::'>Doctor of this session:</label><br>";
        echo "    <input type='text' required name='doctor' class='inpSetAcount' readonly><br>";
        echo "    <label for='Scheduled Date'>Scheduled Date:</label><br>";
        echo "    <input type='text' required name='ScheduledDate' class='inpSetAcount' readonly value='" . $row["Date & Time"] . "'><br>";
        echo "    <label for=' Scheduled Time'> Scheduled Time:</label><br>";
        echo "    <input type='text' name='ScheduledTime' class='inpSetAcount' readonly><br>";
        echo "    <label for='total:'> Patients that Already registerd for this session:</label><br>";
        echo "    <table>";
        echo "        <tr><th>Patient ID</th><th>Patient name</th><th>Appointment number</th><th>Patient Telephone</th></tr>";
        // Retrieve data from the Patients table for the current session
        $sql_patients = "SELECT * FROM Patients";
        $result_patients = $conn->query($sql_patients);
        if ($result_patients->num_rows > 0) {
            while($row_patients = $result_patients->fetch_assoc()) {
                echo "        <tr>";
                echo "            <td>" . $row_patients["ID"] . "</td>";
                echo "            <td>" . $row_patients["Fname"] . " " . $row_patients["Lname"] . "</td>";
                echo "            <td></td>";
                echo "            <td>" . $row_patients["Telephone"] . "</td>";
                echo "        </tr>";
            }
        }
        echo "    </table>";
        echo "    <button class='btnSetAcount' onclick='hidSession()'>Ok</button><br>";
        echo "</div>";
    }
} else {
    echo "No data found.";
}

$connection->close();
?>

        <!-- ////////////////////// -->
                   
        <?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the delete button was clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteSession"])) {
    $sessionTitle = $_POST["sessionTitle"];
    $scheduledDate = $_POST["scheduledDate"];

    // Prepare and execute the delete query
    $statement = $connection->prepare("DELETE FROM Sessions WHERE Title = ? AND `Date & Time` = ?");
    $statement->bind_param("ss", $sessionTitle, $scheduledDate);

    if ($statement->execute()) {
        echo "Session deleted successfully!";
    } else {
        echo "Error deleting session: " . $statement->error;
    }
    $statement->close();
} else {
    $sessionTitle = $_GET["sessionTitle"];
    $scheduledDate = $_GET["scheduledDate"];
    echo "<div class='cancelSession'>";
    echo "    <div class='buton' onclick='hidCancelSesion()'>&times;</div>";
    echo "    <label for='Are you sure?'>Are you sure?</label><br>";
    echo "    <label for='You want to delete this record(Test Doctor).'>You want to delete this record.</label><br>";
    echo "    <label for='Patient Name:'>Session Title</label><input type='text' name='sessionTitle' readonly value='$sessionTitle'><br>";
    echo "    <label for='Appointment number'>Sheduled Date & Time</label><input type='text' name='scheduledDate' readonly value='$scheduledDate'><br>";
    echo "    <form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
    echo "        <input type='hidden' name='deleteSession' value='1'>";
    echo "        <button class='btnDletAcount' type='submit'>Yes</button>";
    echo "    </form>";
    echo "    <button class='btnDletAcount' onclick='hidCancelSesion()'>No</button><br>";
    echo "</div>";
}
$connection->close();
?>
        </section>
        <script src="../mengjavascript/index.js"></script>

</body>
</html>