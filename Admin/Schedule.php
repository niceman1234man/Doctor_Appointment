<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/appointment.css">
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>

<body>
    <?php
   include("sidebar.php");
   include("../connection.php");
     $list2 = "select * from session";
        $result = mysqli_query($conn, $list2);
        $list1 = "select name from doctor";
        $resultd = mysqli_query($conn, $list1);
        $data2="";
   ?>
    <div class="main-part">
        <h1>Schedule Manager</h1>

        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br></p>
        <div class="add-new-section">
            <h2>Schedule A Session</h2>
            <button id="add-new-button">+ Add Session</button>
        </div>
        <p>All Sessions( <?php echo mysqli_num_rows($result)?>)</p>
        <div class="input-sections">
            <form action="">
                Date:<input type="date" name="date" id="date">
                Doctor: <select name="doctor" id="doctor">
                    <?php
             while($row=mysqli_fetch_assoc($resultd)){
                $data2 =$row["name"] ;
                echo '
                <option value="">'. $data2 . '</option>
                ';
            }
            ?>
                </select>

                <button type="submit" value="Filter" name="filter"><img src="../img/icons/filter-iceblue.svg" alt=""
                        id="filter">Filter
                </button>
            </form>
        </div>
        <?php echo '
        <table>
            <tr>
                <th>Session Title</th>
                <th>Doctor</th>
                <th>Schedule date&time</th>
                <th>Max num Booked</th>
                <th>Events</th>
            </tr>';
           
            if(isset($_POST["filter"])){
            if (isset($_POST['search_title']) && isset($_POST['search_date'])) {
                $search_title = $_POST['search_title'];
                $search_date = $_POST['search_date'];
            
                // Construct the SQL query to search for sessions
                $list2 = "SELECT * FROM session WHERE title LIKE '%$search_title%' AND date = '$search_date'";
                $result = mysqli_query($conn, $list2);
            }else{
                echo 'please inset all ';
            } }
            else {
                // If no search criteria are provided, fetch all the sessions
                $list2 = "SELECT * FROM session";
                $result = mysqli_query($conn, $list2);
            }
            
        if(mysqli_num_rows($result) > 0) {
        $data = '';
        while($row = mysqli_fetch_assoc($result)) {
        $title = $row["title"];
        $spec = $row["dname"];
        $mnum = $row["num"];
        $d = $row["date"];
        $t = $row["time"];
        $id=$row["id"];

        $data .= '<tr>
            <td>' . $title . '</td>
            <td>' . $spec . '</td>
            <td>' . $d . " ". $t .'</td>
            <td>' . $mnum . '</td>
            <td>
                <div class="schedule-form-button">
                    <form action="viewSchedule.php" method="post" style="display:flex;marigin-right: 5px;">
                        <input type="hidden" name="id" value="'. $id .'">
                        <button type="submit" class="view-button">
                            <img src="../img/icons/view-iceblue.svg" alt="View" value="View">View
                        </button>
                    </form>
                    <div class="schedule-form-button">
            <form action="deleteSchedule.php" method="post" style="display:flex;">
        <input type="hidden" name="id" value="'. $id .'">
        <button type="submit" class="delete-button">
            <img src="../img/icons/delete-iceblue.svg" alt="Remove" value="Remove">
        </button>
        </form>
    </div>
    </div>
    </td>
    </tr>';
    }
    echo $data;
    }
    ?>
        </table>
        <div class="add-new-doctors-pop-up">
            <form action="New_session.php" method="post">
                <div class="pop-up-header">
                    <h2>Add New Session</h2>
                    <p id="x-sign">&times;</p>
                </div>

                <label for="name">Session Title</label><br>
                <input type="text" name="title" id="name" placeholder="Name of This Session"><br>
                <label for="speciality">Select Doctor</label><br>
                <select name="speciality" id="select" placeholder="Choose doctor name from list">
                    <option value="abebe">abeb</option>
                    <option value="degu">adu</option>
                    <option value="baby"> bela</option>
                </select><br>
                <label for="nic">Number of Patients/Appointment Numbers</label><br>
                <input type="number" name="num" id="nic" placeholder="The Finial Appointment Number"><br>
                <label for="email">Session Date</label><br>
                <input type="date" name="date" id="email"><br>
                <label for="telephone">Schedule Time</label><br>
                <input type="time" name="time" id="telephone"><br>
                <input type="submit" value="Place This Session" id="add-button" name="submit">
                <input type="reset" id="rest-button">
            </form>
        </div>

        <script src="../JS/index.js"></script>
</body>

</html>