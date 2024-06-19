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
            <button id="add-new-button"> <a href="addDoctor.php">+ Add New</a></button>
        </div>
        <?php
      
       
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
    $data2 = '';
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
        $data2 .= '<option value="'. $spec .'">'. $spec .'</option>';
        $data .= '<tr>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $spec . '</td>
            <td>
             <div class="form-button">
                <form action="edit_doctor.php" method="post" style="display:flex;">
          <input type="hidden"  name="id" value="' .$id . '">
         <button type="submit" class="view-button" name="edit">
        <img src="../img/icons/edit-iceblue.svg" alt="View" value="View">Edit
          </button>
       </form>
            <div class="form-button">
                <form action="view_doctor.php" method="post" style="display:flex;">
          <input type="hidden"  name="id" value="' .$id . '">
         <button type="submit" class="view-button">
        <img src="../img/icons/view-iceblue.svg" alt="View" value="View">View
          </button>
       </form>

    <form action="delete_doctor.php" method="post">
    <input type="hidden" name="id" value="' .$id . '">
    <button type="submit" id="delete">
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

        <script src="../JS/indexyy.js"></script>
</body>

</html>