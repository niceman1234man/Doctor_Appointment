<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>

<body>
    <?php
     
     include("../connection.php");
    include("sidebar.php");
    ?>
    <div class="main-part">
        <img src="../img/search.svg" alt="search" id="search-img">
        <form action="Doctors.php" method="post">
            <input type="search" placeholder="Search Doctor Name or Email" id="search" name="search_term">
            <input type="submit" name="search" id="search-button" value="Search">
        </form>
        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br>
            <?php date_default_timezone_set('Asia/Kolkata'); 
            $today=date('Y-m-d');
             echo $today; ?></p><br>
        <div class="add-new-section">
            <h2>Add new Doctor</h2>
            <button id="add-new-button">+ Add New</button>
        </div>
        <?php
        include("../connection.php");
       
        if (isset($_POST['search_term'])) {
            $search_term = $_POST['search_term'];
            $list1 = "SELECT * FROM doctor WHERE name LIKE '%$search_term%' OR email LIKE '%$search_term%'";
            $result = mysqli_query($conn, $list1);
        } else {
            $list1 = "SELECT * FROM doctor";
            $result = mysqli_query($conn, $list1);
        }
        
        ?>
        <p>All Doctors (<?php echo mysqli_num_rows($result); ?>)</p>
        <?php
  if(mysqli_num_rows($result) > 0) {
    $data = '';
    echo '
        <table>
            <tr>
                <th>Doctor Name</th>
                <th>Email</th>
                <th>Specialities</th>
                <th>Events</th>
            </tr>
          ';
    while($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $email = $row["email"];
        $spec = $row["speciality"];
        $id=$row["id"];
        $data .= '<tr>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $spec . '</td>
            <td>
            <div class="form-button">
                <form action="view_doctor.php" method="post" style="display:flex;">
          <input type="hidden"  name="id" value="' .$id . '">
         <button type="submit" class="view-button">
        <img src="../img/icons/view-iceblue.svg" alt="View" value="View">View
          </button>
       </form>

    <form action="delete_doctor.php" method="post">
    <input type="hidden" name="id" value="' .$id . '">
    <button type="submit">
        <img src="../img/icons/delete-iceblue.svg" alt="Remove" value="Remove">
    </button>
</form>
</div>
            </td>
        </tr>';
    }
    echo $data;
}
   
?>
        </table>
        <div class="add-new-doctors-pop-up ">
            <form action="add_new_doctor.php" method="post">
                <div class="pop-up-header">
                    <h2>Add New Doctor</h2>
                    <p id="x-sign">&times;</p>
                </div>
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" placeholder="Name Doctor"><br>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" placeholder="Email Address "><br>
                <label for="nic">NIC</label><br>
                <input type="number" name="nic" id="nic" placeholder="NIC Number "><br>
                <label for="telephone">Telephone</label><br>
                <input type="number" name="telephone" id="telephone" placeholder="Telephone Number "><br>
                <label for="speciality">Speciality</label><br>
                <select name=" speciality" id="select">
                    <option value="nurse">nurse</option>
                    <option value="anstesia">Anstesia</option>
                    <option value="padio">Padio</option>
                </select><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" placeholder="Enter Password "><br>
                <label for="confirm">Confirm Password</label><br>
                <input type="password" name="confirm" id="confirm" placeholder="Confirm Password"><br>
                <input type="submit" value="Add" id="add-button" name="submit">
                <input type="reset" id="rest-button">
            </form>
        </div>
    </div>
    <script src="../JS/index.js"></script>
</body>

</html>