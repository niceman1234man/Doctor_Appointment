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
                <div> <button class="backImg"><img src="../images//icons/back-iceblue.svg"
                            class="backImg">back</button><span class="set">Appointment Manager</span> </div>
                <div class="todaysDate">
                    <h5>todays date</h5>
                </div>
            </div>
            <h3>My Apointment</h3>
            <div class="inputDate"> Date:<input type="date"> <button class="filterbtn"><img
                        src="../images/icons/filter-iceblue.svg" class="filteimg"> Filter</button></div>
            <div class="apointTable">
                <?php
include("../connection.php");
if ($conn->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT *FROM appointment ";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo '<table>
    <tr>
   <th>Patient Name</th>
    <th>Number</th>
    <th>Session Title</th>
   <th>Session Date & Time</th>
   <th>Appointment Date</th>
   <th>Actions</th>
   </tr>';
    while($row = $result->fetch_assoc()) { 
        echo "<tr>
        <td>" . $row["name"] . "</td>
       <td>" . $row["apo_num"] . "</td>
        <td>" . $row["title"] . "</td>
       <td>" . $row["date"] ." ".  $row["time"]."</td>
      <td>" . $row["apo_date"] . "</td>
       <td class=\"tdforflex\">
            <div class=\"form-button\">
                <form action=\"DeletApointment.php\" method=\"post\">
                    <input type=\"hidden\" name=\"id\" value=\"" . $row["id"] . "\">
                    <button type=\"submit\" class=\"deletebutton\" >
                        <img src=\"../images/icons/delete-iceblue.svg\"  value=\"Delete\">Delete
                    </button>
                </form>
            </div>
            <div class=\"form-button\">
                <form action=\"viewApointment.php\" method=\"post\">
                    <input type=\"hidden\" name=\"id\" value=\"" . $row["id"] . "\">
                    <button type=\"submit\" class=\"viewbutton\">
                        <img src=\"../images/icons/view-iceblue.svg\" value=\"View\">View
                    </button>
                </form>
            </div>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}
$conn->close();
?>
            </div>
        </div>
    </section>
    <script src="../DoctorJs/index.js"></script>

</body>

</html>