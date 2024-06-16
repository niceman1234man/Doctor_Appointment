
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
</head>
<body>
    <section class="myApointment" id="myApointment">
    <?php include ("sidBar.php")?>
            <div class="Appointments">
        <div class="topTitle">
            <div > <button class="backImg"><img src="../images//icons/back-iceblue.svg" class="backImg">back</button><span class="set">Appointment Manager</span> </div>
            <div class="todaysDate"><h5>todays date</h5> </div>
        </div>
        <h3>My Apointment</h3>
                <div  class="inputDate"> Date:<input type="date"> <button class="filterbtn"><img src="../images/icons/filter-iceblue.svg" class="filteimg"> Filter</button></div>
                <div class="apointTable">
                <?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT *FROM `Apointmant` WHERE 1";
$result = mysqli_query($connection, $sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Patient Name</th>";
    echo "<th>Telephone</th>";
    echo "<th>Number</th>";
    echo "<th>Session Title</th>";
    echo "<th>Session Date & Time</th>";
    echo "<th>Appointment Date</th>";
    echo "<th>Actions</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Patient Name"] . "</td>";
        echo "<td>" . $row["Telephone"] . "</td>";
        echo "<td>" . $row["Number"] . "</td>";
        echo "<td>" . $row["Session Title"] . "</td>";
        echo "<td>" . $row["Session Date & Time"] . "</td>";
        echo "<td>" . $row["Appointment Date"] . "</td>";
        echo "<td class=\"tdforflex\">
            <div class=\"form-button\">
                <form action=\"DeletApointment.php\" method=\"post\">
                    <input type=\"hidden\" name=\"id\" value=\"" . $row["Number"] . "\">
                    <button type=\"submit\" class=\"deletebutton\" >
                        <img src=\"../images/icons/delete-iceblue.svg\"  value=\"Delete\">Delete
                    </button>
                </form>
            </div>
            <div class=\"form-button\">
                <form action=\"viewApointment.php\" method=\"post\">
                    <input type=\"hidden\" name=\"id\" value=\"" . $row["Number"] . "\">
                    <button type=\"submit\" class=\"viewbutton\">
                        <img src=\"../images/icons/view-iceblue.svg\" value=\"View\">View
                    </button>
                </form>
            </div>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}
$connection->close();
?>
                  </div>
            </div>
            </section>
            <script src="../DoctorJs/index.js"></script>

</body>
</html>