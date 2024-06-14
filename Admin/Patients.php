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
        <form action="Patients.php" method="post">
            <img src="../img/search.svg" alt="search" id="search-img">
            <input type="search" placeholder="search Patient Name or Email" id="search" name="search_term">
            <button type="submit" name="search" id="search-button">search</button>
        </form>
        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br>
            <?php date_default_timezone_set('Asia/Kolkata');

            $today = date('Y-m-d');
            echo $today;?>
        </p>

        <p>All Patients( <?php echo mysqli_num_rows($result);?>)</p>

        <?php
           if (isset($_POST['search'])) {
            $search_term = $_POST['search_term'];
            $list1 = "SELECT * FROM patient WHERE name LIKE '%$search_term%' OR email LIKE '%$search_term%'";
            $result = mysqli_query($conn, $list1);
        } else {
            $list1 = "SELECT * FROM patient";
            $result = mysqli_query($conn, $list1);
        }
        
        
        echo '
        <table>
            <tr>
                <th> Name</th>
                <th>NIC</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Date of birth</th>
                <th>Events</th>
            </tr>';
          
     
if(mysqli_num_rows($result) > 0) {
    $data = '';
    while($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $nic = $row["nic"];
        $tel = $row["telephone"];
        $email = $row["email"];
        $date_of_birth = $row["date_of_birth"];
        $id=$row["id"];
        $data .= '<tr>
            <td>' .  $name . '</td>
            <td>' .   $nic  . '</td>
            <td>' .  $tel .'</td>
            <td>' . $email. '</td>
             <td>' . $date_of_birth . '</td>
            <td>
          <form action="view_patient.php" method="post" style="display:flex;">
    <input type="hidden" name="id" value="'. $id .'">
    <button type="submit" class="view-button">
        <img src="../img/icons/view-iceblue.svg" alt="View" value="View">View
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