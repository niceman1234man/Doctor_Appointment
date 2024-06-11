<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>

<body>
    <?php
    include("connection.php");
    $list3 = "select * from patient";
       $result = mysqli_query($conn, $list3);
    include("sidebar.php");
    ?>
    <div class="main-part">
        <img src="../img/search.svg" alt="search" id="search-img">
        <input type="search" placeholder="search Patient Name or Email" id="search">
        <button id="search-button">search</button>
        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br>
            <?php date_default_timezone_set('Asia/Kolkata');

            $today = date('Y-m-d');
            echo $today;?>
        </p>

        <p>All Patients( <?php echo mysqli_num_rows($result);?>)</p>
        <table>
            <tr>
                <th> Name</th>
                <th>NIC</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Date of birth</th>
                <th>Events</th>
            </tr>
            <?php
     
if(mysqli_num_rows($result) > 0) {
    $data = '';
    while($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $nic = $row["nic"];
        $tel = $row["telephone"];
        $email = $row["email"];
        $date_of_birth = $row["date_of_birth"];
      
        $data .= '<tr>
            <td>' .  $name . '</td>
            <td>' .   $nic  . '</td>
            <td>' .  $tel .'</td>
            <td>' . $email. '</td>
             <td>' . $date_of_birth . '</td>
            <td>
                <button class="view-button"><img src="../img/icons/view-iceblue.svg" alt="">View</button>
                
            </td>
        </tr>';
    }
    echo $data;
}
?>
        </table>
        <div class="patients-detail-pop-up">
            <div class="pop-up-header">
                <h2>View Detail</h2>
                <p id="x-sign">&times;</p>
            </div>
            <p>Patient ID</p>
            <p></p>
            <p>Name :</p>
            <p></p>
            <p>Email :</p>
            <p></p>
            <p> NIC :</p>
            <p></p>
            <p>Telephone :</p>
            <p></p>
            <p>Address :</p>
            <p></p>
        </div>
        <script src="../JS/index.js"></script>
</body>

</html>