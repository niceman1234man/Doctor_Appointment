<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/appointment.css">
</head>

<body>
    <?php
   include("sidebar.php");
   include("../connection.php");
   $list2 = "select * from appointment";
   $result = mysqli_query($conn, $list2);
       
   ?>

    <div class="main-part">
        <h1>Appointment Manager</h1>
        <img src="../img/search.svg" alt="search" id="search-img">
        <form action="Appointment.php" method="post">
            <input type="search" placeholder="Search Doctor Name " id="search" name="search_term">
            <input type="submit" name="search" id="search-button" value="Search">
        </form>

        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br>
            <?php  date_default_timezone_set('Asia/Kolkata');

            $today = date('Y-m-d');
            echo $today;?>
        </p>


        <p>All Appointments( <?php echo mysqli_num_rows($result)?>) </p>
        <div class="input-sections">
        </div>
        <table>
            <tr>
                <th>Patient Name</th>
                <th>Appointment Number</th>
                <th>Doctor</th>
                <th>session Title</th>
                <th>Schedule date&time</th>
                <th>Appointment Date</th>
                <th>Events</th>
            </tr>
            <?php

            if (isset($_POST['search'])) {
                $search_term = $_POST['search_term'];
                $list1 = "SELECT * FROM appointment WHERE doc_name LIKE '%$search_term%' ";
                $result = mysqli_query($conn, $list1);
            } else {
                $list1 = "SELECT * FROM appointment";
                $result = mysqli_query($conn, $list1);
            }

     
if(mysqli_num_rows($result) > 0) {
    $data = '';
    while($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $num = $row["apo_num"];
        $doc_name = $row["doc_name"];
        $title = $row["title"];
        $d = $row["date"];
        $t = $row["time"];
        $apo_date=$row["apo_date"];
        $id=$row["id"];
        $data .= '<tr>
            <td>' .  $name . '</td>
            <td>' .  $num . '</td>
            <td>' .   $doc_name . '</td>
            <td>' .  $d . " " . $t .'</td>
             <td>' .  $title . '</td>
              <td>' .   $apo_date . '</td>
            <td>
                <div class="schedule-form-button">
        <form  action="deleteAppointment.php" method="post" style="display:flex;">
        <input type="hidden"  name="id" value="' .$id . '">
     <button type="submit" class="view-button">
        <img src="../img/icons/delete-iceblue.svg" alt="View" value="View">remove
      </button>
      </form>
            </td>
        </tr>';
    }
    echo $data;
}
?>

        </table>
        <script src="../JS/index.js"></script>

</body>

</html>