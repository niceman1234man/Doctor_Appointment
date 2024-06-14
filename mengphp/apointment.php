
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" type="text/css" href="../mengcss/index.css">
</head>
<body>
    <section class="myApointment" id="myApointment">
    <?php include ("sidBar.php")?>

            
            <div class="Appointments">
        <div class="topTitle">
            <div > <button class="backImg"><img src="../images//icons/back-iceblue.svg" class="backImg">back</button><span class="set">Appointment Manager</span> </div>
            <div class="todaysDate"><h5>todays date</h5> </div>
        </div>
        <h1>My Apointment</h1>

                <div  class="inputDate"> <h3>Date:</h3><input type="date"> <button class="filterbtn"><img src="../images/icons/filter-iceblue.svg" class="filteimg"> Filter</button></div>
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
    echo "<th>Session Title</th>";
    echo "<th>Session Date & Time</th>";
    echo "<th>Appointment Date</th>";
    echo "<th>Actions</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Patient Name"] . "</td>";
        echo "<td>" . $row["Telephone"] . "</td>";
        echo "<td>" . $row["Session Title"] . "</td>";
        echo "<td>" . $row["Session Date & Time"] . "</td>";
        echo "<td>" . $row["Appointment Date"] . "</td>";
        echo "<td>
        <div class=\"form-button\">
            <form action=\"view_patient.php\" method=\"post\">
                <input type=\"hidden\" name=\"id\" value=\"" . $row["ID"] . "\">
                <button type=\"submit\" class=\"viewbutton\" >
                    <img src=\"../images/icons/view-iceblue.svg\" alt=\"View\" value=\"View\">View
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
            <section>

                <div class="cancelApoin">
                <?php
                include("connection.php");
if (isset($_POST['btnDletAcount'])) {
      $patientName = $_POST['name'];
    $appointmentNumber = $_POST['appointmentNumber'];

    $query = "DELETE FROM Apointmant WHERE `Patient name` = ? AND `Number` = ?";
    $statement = $connection->prepare($query);
    $statement->bind_param("ss", $patientName, $appointmentNumber);

    if ($statement->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $statement->error;
    }
    $statement->close();
}
?>
                   <div class="buton" onclick="hidCancelApointment()">
                        &times;
                        </div>
                    <label for="Are you sure?">Are you sure?</label><br>
                    <label for="You want to delete this record(Test Doctor).">You want to delete this record.</label><br>
                     <label for="Patient Name:">Patient Name:</label>
                     <input type="text" name="name" readonly><br>
                     <label for="Appointment number">Appointment number</label>
                     <input type="text" name="name" readonly><br>
                    <button class="btnDletAcount">Yes</button>
                    <button class="btnDletAcount" onclick="hidCancelApointment()">No</button><br>

                </div>
             </section>
            </section>
            <script src="../mengjavascript/index.js"></script>

</body>
</html>