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
    <title>View session</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">

</head>

<body>
    <section>
        <?php
        $id=$_POST["id"];
include("../connection.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM session where id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Display the retrieved data
        echo "<div class='viewSessionDoc'>";
        echo "<div>";
        echo "    <label for='View Details.'>View Details.</label><br>";
        echo "    <label for='Session Title:'>Session Title:</label><br>";
        echo "    <input type='text' required name='sessiontitle' class='inpSetAcount' readonly value='" . $row["title"] . "'><br>";
        echo "    <label for='Doctor of this session::'>Doctor of this session:</label><br>";
        echo "    <input type='text' required name='doctor' class='inpSetAcount' readonly><br>";
        echo "    <label for='Scheduled Date'>Scheduled Date:</label><br>";
        echo "    <input type='text' required name='ScheduledDate' class='inpSetAcount' readonly value='" . $row["date"] .' '.$row["time"]. "'><br>";
        echo "    <label for=' Scheduled Time'> Scheduled Time:</label><br>";
        echo "    <input type='text' name='ScheduledTime' class='inpSetAcount' readonly><br>";
        echo "    <label for='total:'> Patients that Already registerd for this session:</label><br>";
        echo "<a href='session.php'><button class='btnDletAcount' >Ok</button></a><br>";

        echo "</div>";
        echo "<div>";

        echo "    <table>";
        echo "        <tr><th>Patient ID</th><th>Patient name</th><th>Appointment number</th><th>Patient Telephone</th></tr>";
        // Retrieve data from the Patients table for the current session
        $sql_patients = "SELECT * FROM patient";
        $result_patients = $conn->query($sql_patients);
        if ($result_patients->num_rows > 0) {
            while($row_patients = $result_patients->fetch_assoc()) {
                echo "        <tr>";
                echo "            <td>" . $row_patients["id"] . "</td>";
                echo "            <td>" . $row_patients["FirstName"] . " " . $row_patients["LastName"] . "</td>";
                echo "            <td></td>";
                echo "            <td>" . $row_patients["phone_number"] . "</td>";
                echo "        </tr>";
            }
        }
        echo "    </table>";
        echo "  <a href='session.php'>  <button class='btnDletAcount' >Ok</button></a><br>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No data found.";
}

$conn->close();
?>
</body>

</html>