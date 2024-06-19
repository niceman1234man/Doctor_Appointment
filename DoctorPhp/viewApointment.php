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
$sql = "SELECT * FROM 	appointment where id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Display the retrieved data
        echo "<div class='viewSessionDoc'>";
        echo "<div>";

        echo "<table>";
        echo "<tr><th>ID</th><th>Patient Name</th><th>Number </th><th>Doctor Name</th><th>Title</th><th>Appointment Date</th><th>Appointment Time</th></tr>";
        // Retrieve data from the Patients table for the current session
        $sql_Apointment = "SELECT * FROM appointment";
        $result_Apointment = $conn->query($sql_Apointment);
        if ($result_Apointment->num_rows > 0) {
            while($row_Apointment = $result_Apointment->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row_Apointment["id"]."</td>";
                echo "<td>" . $row_Apointment["name"] ."</td>";
                echo "<td>" . $row_Apointment["apo_num"]."</td>";
                echo "<td>" . $row_Apointment["doc_name"] ."</td>";
                echo "<td>" . $row_Apointment["title"] . "</td>";
                echo "<td>" . $row_Apointment["date"] . "</td>";
                echo "<td>" . $row_Apointment["time"] . "</td>";
                echo "</tr>";
            }
        }
        echo "    </table>";
        echo "    <a href='apointment.php'><button class='btnDletAcount' >Ok</button></a><br>";
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