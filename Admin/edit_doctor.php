<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>

<body>
    <?php
if (isset($_POST['id'])) {
    include("../connection.php");
    $id = $_POST['id'];

    $list2 = "SELECT * FROM doctor";
    $result = mysqli_query($conn, $list2);
    $data = '';
    if (mysqli_num_rows($result) > 0) {
        while ($row1 = mysqli_fetch_assoc($result)) {
            $specAll = $row1["speciality"];
            $data .= '<option value="' . $specAll . '">' . $specAll . '</option>';
        }
    }

    $list1 = "SELECT * FROM doctor WHERE id = '$id'";
    $result1 = mysqli_query($conn, $list1);
    if (mysqli_num_rows($result1) == 1) {
        $row = mysqli_fetch_assoc($result1);
        $name = $row["name"];
        $email = $row["email"];
        $spec = $row["speciality"];
        $nic = $row["nic"];
        $telephone = $row["telephone"]; // Assuming 'telephone' is a single value in the database
    }

    echo '<div class="edit-doctor">
        <form action="doctor_edit.php" method="post">
            <div class="pop-up-header">
                <h2>Edit Doctor</h2>
                <p id="x-sign"></p>
            </div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Name Doctor" value="' . $name . '"  required><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Email Address " value="' . $email . '"  required><br>
            <label for="nic">NIC</label><br>
            <input type="number" name="nic" id="nic" placeholder="NIC Number " value="' . $nic . '"  required><br>
            <label for="telephone">Telephone</label><br>
            <input type="number" name="telephone" value="' . $telephone . '" id="telephone"
                placeholder="Telephone Number "  required><br>
            <label for="speciality">Speciality</label><br>
            <select name="speciality" id="select"  required>' . $data . '
            </select><br>
            <input type="hidden" name="id" id="nic" " value="' . $id . '"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password "  required><br>
            <label for="confirm">Confirm Password</label><br>
            <input type="password" name="confirm" id="confirm" placeholder="Confirm Password"  required><br>
            <input type="submit" value="Update" id="add-button" name="update">
        </form>
    </div>
    ';

}

?>
</body>

</html>