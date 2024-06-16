<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View session</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">

</head>
<body>
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
        echo "<div class='viewSessionDoc'>";
        echo "<div>";
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
        echo "<button class='btnDletAcount' ><a href='session.php'>Ok</a></button><br>";

        echo "</div>";
        echo "<div>";

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
        echo "</div>";
    }
} else {
    echo "No data found.";
}

$connection->close();
?>
</body>
</html>