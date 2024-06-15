<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
    </head>
<body>
    <section class="myApointment" id="myApointment">
               <?php include ("sidBar.php")?>
            <div class="Appointments">
        <div class="topTitle">
            <div class="head"> <button class="backImg"><img src="../images//icons/back-iceblue.svg" class="backImg">back</button>  <span class="set">My Sessions</span></div>
            <div class="todaysDate"><h5>todays date</h5> </div>
        </div>
        <h4>My Sessions</h4>

                <div  class="inputDate"> <span class="dateSesLable">Date:</span><input type="date"> <button class="filterbtn"><img src="../images/icons/filter-iceblue.svg" class="filteimg"> Filter</button></div>

                <div class="apointTable">
                <?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT *FROM `Sessions` WHERE 1";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '
    <table >
        <tr>
            <th>Title</th>
            <th>Date & Time</th>
            <th>Max Num</th>
            <th>Actions</th>
        </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        echo '
        <tr>
            <td >' . $row["Title"] . '</td>
            <td>' . $row["Date & Time"] . '</td>
            <td>' . $row["Max num"] . '</td>
            <td class="tdforflex">
            <div>
        <form action="viewSession.php" method="post" style="display:flex;">
                        <input type="hidden" name="id" value="' . $id . '">
                        <button type="submit" class="viewbutton" >
                            <img src="../img/icons/view-iceblue.svg">View
                        <button>
                    </form>
                    </div>
                    <div>
                    <form action="deletSession.php" method="post">
                        <input type="hidden" name="id" value="' . $id . '">
                        <button type="submit" class="deletebutton" > Remove
                            <img src="../img/icons/delete-iceblue.svg">
                        </button>
                    </form>
                </div>
            </td>
        </tr>';
    }

    echo '</table>';
} else {
    echo "No results found.";
}

$connection->close();
?>
            
            </div>
            </div>
        </section>
       

        <!-- ////////////////////// -->
                   
        
        </section>
        <script src="../DoctorJs/index.js"></script>

</body>
</html>