<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">

</head>

<body>

    <?php include ("sidebar.php")?>
    <div class="main-part">
        <div class="topTitle">
            <div class="head">
                <a href="DashBourd.php"><button class="backImg"><img src="../images//icons/back-iceblue.svg"
                            class="backImg">back</button></a> <span class="set">My
                    Sessions</span>
            </div>
            <div class="todaysDate">
                <h5>
                    <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br>
                        <?php  date_default_timezone_set('Asia/Kolkata');

            $today = date('Y-m-d');
            echo $today;?>
                    </p>
                </h5>
            </div>
        </div>
        <h4>My Sessions</h4>

        <div class="apointTable">
            <?php
include("../connection.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *FROM session ";
$result = mysqli_query($conn, $sql);

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
            <td >' . $row["title"] . '</td>
            <td>' . $row["date"] .' '.$row["time"]. '</td>
            <td>' . $row["num"] . '</td>
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

$conn->close();
?>

        </div>
    </div>



    <!-- ////////////////////// -->


    </section>
    <script src="../DoctorJs/index.js"></script>

</body>

</html>