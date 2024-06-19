<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Patients</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>

<body>

    <?php include ("sidebar.php")?>
    <div class="main-part"><div class="btnsearchDivePation"><a href="DashBourd.php"> <button class="backImg">
<img src="../images/icons/back-iceblue.svg" class="backImg">back</button></a>
<form action="mypationt.php" method="post">
<input type="search" name="search_term" placeholder="search pationt name or email"class="searinputPationt">
<button type="submit" name="search" class="searPationtbtn">search</button><span class="todaysDate"><p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br>
<?php  date_default_timezone_set('Asia/Kolkata');
$today = date('Y-m-d');
echo $today;?>
    </p>

</span>

            </form>
            
        </div>
        <h4>My Patients</h4>

       
        <div class="apointTable">
            <?php
include("../connection.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['search'])) {
    $search_term = $_POST['search_term'];
    $list1 = "SELECT * FROM patient WHERE FirstName LIKE '%$search_term%' OR email LIKE '%$search_term%'";
    $result = mysqli_query($conn, $list1);
} else {
  
$sql = "SELECT *FROM patient";
$result = $conn->query($sql);
}

                    if ($result->num_rows > 0) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Name</th>";
                        echo "<th>Email</th>";
                        echo "<th>Address</th>";
                        echo "<th>NIC</th>";
                        echo "<th>DOB</th>";
                        echo "<th>Telephone</th>";
                        echo "<th>Actions</th>";
                        echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["FirstName"] ." ". $row["LastName"] .  "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>Addis Ababa</td>";
        echo "<td>" . $row["NIC"] . "</td>";
        echo "<td>" . $row["date_of_birth"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
      
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


    <script src="../DoctorJs/index.js"></script>
</body>

</html>