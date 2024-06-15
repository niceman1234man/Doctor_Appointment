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

    echo '<div class="">
        <form action="add_new_doctor.php" method="post">
            <div class="pop-up-header">
                <h2>Edit Doctor</h2>
                <p id="x-sign">&times;</p>
            </div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Name Doctor" value="' . $name . '"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Email Address " value="' . $email . '"><br>
            <label for="nic">NIC</label><br>
            <input type="number" name="nic" id="nic" placeholder="NIC Number " value="' . $nic . '"><br>
            <label for="telephone">Telephone</label><br>
            <input type="number" name="telephone" value="' . $telephone . '" id="telephone"
                placeholder="Telephone Number "><br>
            <label for="speciality">Speciality</label><br>
            <select name="speciality" id="select">' . $data . '
            </select><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password "><br>
            <label for="confirm">Confirm Password</label><br>
            <input type="password" name="confirm" id="confirm" placeholder="Confirm Password"><br>
            <input type="submit" value="Update" id="add-button" name="update">
            <input type="reset" id="rest-button">
        </form>
    </div>
    </div>';
}
if(isset($_POST["update"])){

$name=$_POST["name"];
$email=$_POST["email"];
$nic=$_POST["nic"];
$telephone=$_POST["telephone"];
$speciality=$_POST["speciality"];
$password=$_POST["password"];
$confirm=$_POST["confirm"];
$sql = "UPDATE doctor SET name='$username', email='$firstname',nic='$nic',telephone='$telephone',speciality='$speciality',password='$password' WHERE id='$id'";
if($password==$confirm){
    mysqli_query($conn,$sql);
    echo " Doctor updated!";
}else{
    echo "please insert correct password!";
}
header("location: Doctor.php");
}

?>
</body>

</html>