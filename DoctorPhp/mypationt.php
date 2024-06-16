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
        <div>
            <div class="btnsearchDivePation"> <button class="backImg">
                    <img src="../images/icons/back-iceblue.svg" class="backImg">back</button>
                <input type="search" placeholder="search pationt name or email" class="searinputPationt">
                <button class="searPationtbtn">search</button><span class="todaysDate">
                    <h5>todays date</h5>
                </span>
            </div>
            <h4>My Patients</h4>

            <div class="inputDate"><label for="Show Details About">Show Details About</label>
                <select name="patioets" id="pationts">
                    <option value="mypationt">My Patients Only</option>
                    <option value="all patients">All Patients</option>
                </select> <button class="filterbtn">
                    <img src="../images/icons/filter-iceblue.svg" class="filteimg">Filter</button>
            </div>
            <div class="apointTable">
                <?php
include("../connection.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *FROM patient ";
$result = $conn->query($sql);

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
        echo "<td>" . $row["FirstName"] . "</td>";
        echo "<td>" . $row["LastName"] . "</td>";
        echo "<td>" . $row["NIC"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["date_of_birth"] . "</td>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>
            <div class=\"form-button\">
                <form action=\"viewPasiont.php\" method=\"post\">
                    <input type=\"hidden\" name=\"id\" value=\"" . $row["id"] . "\">
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
$conn->close();
?>
            </div>
        </div>
    </section>

    <script src="../DoctorJs/index.js"></script>
</body>

</html>