<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Patients</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
</head>
<body>
    <section class="myApointment" id="myApointment">
        <?php include ("sidBar.php")?>
        <div class="block">
            <div class="btnsearchDivePation">
                <button class="backImg">
                    <img src="../images/icons/back-iceblue.svg" class="backImg">back
                </button>
                <input type="search" placeholder="search patient name or email" class="searinputPationt">
                <button class="searPationtbtn">search</button>
                <span class="todaysDate">
                    <h5>today's date</h5>
                </span>
            </div>
            <h4>My Patients</h4>
            <div class="inputDate">
                <label for="Show Details About">Show Details About</label>
                <select name="patients" id="patients">
                    <option value="mypatients">My Patients Only</option>
                    <option value="all patients">All Patients</option>
                </select>
                <button class="filterbtn">
                    <img src="../images/icons/filter-iceblue.svg" class="filteimg">Filter
                </button>
            </div>
            <div class="apointTable">
                <?php
                    include("connection.php");
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    $sql = "SELECT * FROM `patient` WHERE 1";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>PID</th>";
                        echo "<th>Email</th>";
                        echo "<th>Name</th>";
                        echo "<th>Password</th>";
                        echo "<th>Address</th>";
                        echo "<th>NIC</th>";
                        echo "<th>DOB</th>";
                        echo "<th>Telephone</th>";
                        echo "<th>Actions</th>";
                        echo "</tr>";

                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["pid"] . "</td>";
                            echo "<td>" . $row["pemail"] . "</td>";
                            echo "<td>" . $row["pname"] . "</td>";
                            echo "<td>" . $row["ppassword"] . "</td>";
                            echo "<td>" . $row["paddress"] . "</td>";
                            echo "<td>" . $row["pnic"] . "</td>";
                            echo "<td>" . $row["pdob"] . "</td>";
                            echo "<td>" . $row["ptel"] . "</td>";
                            echo "<td>
                                <div class=\"form-button\">
                                    <form action=\"viewPasiont.php\" method=\"post\">
                                        <input type=\"hidden\" name=\"id\" value=\"" . $row["pid"] . "\">
                                        <button type=\"submit\" class=\"viewbutton\" onclick=\"displayPatientDetail();\"  >
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
    <script src="../DoctorJs/index.js"></script>
</body>
</html>