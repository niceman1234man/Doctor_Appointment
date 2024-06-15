<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
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
                <?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT *FROM `Sessions` WHERE 1";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '
    <table>
        <tr>
            <th>Title</th>
            <th>Date & Time</th>
            <th>Max Num</th>
            <th>Actions</th>
        </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        echo '
        <tr>
            <td>' . $row["Title"] . '</td>
            <td>' . $row["Date & Time"] . '</td>
            <td>' . $row["Max num"] . '</td>
            <td>
                <div class="form-button" style="display="flex"">
        <form action=\"view_session.php\" method=\"post\" style=\"display:flex;\">
                        <input type="hidden" name="id" value="' . $id . '">
                        <button type="submit" class="viewbutton" >
                            <img src="../img/icons/view-iceblue.svg" alt="View" value="View">View
                        </button>
                    </form>

                    <form action="deletSession.php" method="post">
                        <input type="hidden" name="id" value="' . $id . '">
                        <button type="submit">
                            <img src="../img/icons/delete-iceblue.svg" alt="Remove" value="Remove">
                        </button>
                    </form>
                </div>
            </td>
        </tr>';
    }

    echo '</table>';
} else {
    echo "No results found.";
}

$connection->close();
?>
            
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
        <script src="../DoctorJs/index.js"></script>

</body>
</html>