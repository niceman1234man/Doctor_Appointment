
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Pationt</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">


</head>
<body>
    <section class="myApointment" id="myApointment">
        <?php include ("sidBar.php")?>
            <div >
            <div class="btnsearchDivePation" > <button class="backImg">
                <img src="../images/icons/back-iceblue.svg" class="backImg">back</button> 
                <input type="search" placeholder="search pationt name or email" class="searinputPationt"> 
            <button class="searPationtbtn">search</button><span class="todaysDate">
                <h5>todays date</h5> </span></div>
                <h1>My Patients</h1>

            <div  class="inputDate"><label for="Show Details About">Show Details About</label>
            <select name="patioets" id="pationts">
                    <option value="mypationt">My Patients Only</option>
                    <option value="all patients">All Patients</option>
                </select> <button class="filterbtn">
                    <img src="../images/icons/filter-iceblue.svg" class="filteimg">Filter</button></div>
            <div class="apointTable">
            <?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT *FROM `Patients` WHERE 1";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>NIC</th>";
    echo "<th>Telephone</th>";
    echo "<th>Email</th>";
    echo "<th>Date of Birth</th>";
    echo "<th>ID</th>";
    echo "<th>Actions</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Fname"] . "</td>";
        echo "<td>" . $row["Lname"] . "</td>";
        echo "<td>" . $row["NIC"] . "</td>";
        echo "<td>" . $row["Telephone"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Date of Birth"] . "</td>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>
            <div class=\"form-button\">
                <form action=\"viewPasiont.php\" method=\"post\">
                    <input type=\"hidden\" name=\"id\" value=\"" . $row["ID"] . "\">
                    <button type=\"submit\" class=\"viewbutton\" onclick=\"displayPationtDetail();\"  >
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
            <!-- <section>
            <div class="viewPationt">
            <div class="buton" onclick="hidPationtDetail()" >
                        &times;
                        </div>
                    <label for="View Details.">View Details.</label><br>
                    <label for="Patient ID">Patient ID:</label><br>
                    <input type="text" required name="PatientID"  class="inpSetAcount" readonly><br>
                    <label for="Name:.">Name</label><br>
                    <input type="text" required name="name"  class="inpSetAcount" readonly><br>
                    <label for="Email:">Email:</label><br>
                    <input type="email" required name="email" class="inpSetAcount" readonly><br>
                    <label for=" NIC:"> NIC:</label><br>
                    <input type="text" name="NIC" class="inpSetAcount" readonly><br>
                    <label for="Telephone:"> Telephone:</label><br>
                    <input type="text" name="Telephone:"  class="inpSetAcount" readonly><br>
                    <label for=" Address"> Address:</label><br>
                    <input type="text" name="Address"  class="inpSetAcount" readonly><br>
                    <button class="btnSetAcount" onclick="hidPationtDetail()">Ok</button><br>
                </div>
            </section> -->
            <script src="../DoctorJs/index.js"></script>
</body>
</html>