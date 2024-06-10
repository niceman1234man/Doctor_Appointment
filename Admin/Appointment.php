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
   include("connection.php");
     $list2 = "select * from appointment";
        $result = mysqli_query($conn, $list2);
   ?>

    <div class="main-part">
        <h1>Appointment Manager</h1>

        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br></p>


        <p>All Appointments( <?php echo mysqli_num_rows($result)?>) </p>
        <div class="input-sections">
            Date:<input type="date" name="date" id="date">
            Doctor: <select name="doctor" id="doctor">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <button><img src="../img/icons/filter-iceblue.svg" alt="" id="filter"> Filter</button>

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
        $data .= '<tr>
            <td>' .  $name . '</td>
            <td>' .  $num . '</td>
            <td>' .   $doc_name . '</td>
            <td>' .  $d . " " . $t .'</td>
             <td>' .  $title . '</td>
              <td>' .   $apo_date . '</td>
            <td>
                
                <button><img src="../img/icons/delete-iceblue.svg" alt="">Cancel</button>
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