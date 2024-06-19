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
        // $resultd = mysqli_query($conn, $list1);
        // $data2="";
   ?>
    <div class="main-part">
        <h1>Schedule Manager</h1>
        <img src="../img/search.svg" alt="search" id="search-img">
        <form action="Schedule.php" method="post">
            <input type="search" placeholder="Search Doctor Name " id="search" name="search_term">
            <input type="submit" name="search" id="search-button" value="Search">
        </form>

        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br><?php date_default_timezone_set('Asia/Kolkata'); 
            $today=date('Y-m-d');
             echo $today; ?></p><br>
        <div class="add-new-section">
            <h2>Schedule A Session</h2>
            <button id="add-new-button"><a href="addSession.php">+ Add Session</a></button>
        </div>
        <p>All Sessions( <?php echo mysqli_num_rows($result)?>)</p>
        <div class="input-sections">
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
           

            if (isset($_POST['search'])) {
                $search_term = $_POST['search_term'];
                $list1 = "SELECT * FROM session WHERE dname LIKE '%$search_term%' ";
                $result = mysqli_query($conn, $list1);
            } else {
                $list1 = "SELECT * FROM session";
                $result = mysqli_query($conn, $list1);
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
                  
                    <form action="deleteSchedule.php"  method="post" style="display:flex;marigin-right: 5px;">
                        <input type="hidden" name="id" value="'. $id .'">
                        <button type="submit" class="view-button" style"background:red;margin-left:1%">
                            <img src="../img/icons/delete-iceblue.svg" alt="View" value="View">Delete
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

        <!-- <script src="../JS/index.js"></script> -->
</body>

</html>