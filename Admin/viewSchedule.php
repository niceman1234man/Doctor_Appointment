<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View schedule</title>
    <link rel="stylesheet" href="../CSS/doctor.css">

</head>
<html>

<body>
    <?php
include("../connection.php");

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $sql = "SELECT * FROM session WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row["title"];
        $spec = $row["dname"];
        $mnum = $row["num"];
        $d = $row["date"];
        $t = $row["time"];

        echo '<div class="schedule-detail">
            <a href="Schedule.php">
                <p id="xs-sign">&times;</p>
            </a>
            <h2>View Detail</h2>
            <p>Session Title: ' . $title . '</p>
            <p>Doctor of This Session: ' . $spec . '</p>
            <p>Scheduled Date: ' . $d . '</p>
            <p>Scheduled Time: ' . $t . '</p>
            <h4>Patients That Already Registered for this session (1/50)</h4>
            <table>
                <tr>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Appointment Number</th>
                    <th>Patient Telephone</th>
                </tr>
            </table>
        </div>';
    } else {
        echo "No session found with the given ID.";
    }
} else {
    echo "No session ID provided.";
}
?>
</body>

</html>