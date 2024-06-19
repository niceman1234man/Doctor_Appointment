<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/doctor.css">


    <title>Document</title>
</head>

<body>
    <?php
     
     include("../connection.php");
     $list1 = "SELECT * FROM doctor";
     $result = mysqli_query($conn, $list1);
     if(mysqli_num_rows($result) > 0) {
        $data2 = '';
        while($row = mysqli_fetch_assoc($result)) {
            $spec = $row["speciality"];
            $data2 .= '<option value="'. $spec .'">'. $spec .'</option>';
        }
    }
    ?>

    <div class="add-new-doctors">
        <form action="add_new_doctor.php" method="post">
            <div class="pop-up-header">
                <h2>Add New Doctor</h2>
                <a href="Doctors.php">
                    <p id="x-sign"></p>
                </a>
            </div>
            <label for="name">User Name</label><br>
            <input type="text" name="username" id="name" placeholder="User Name" required><br>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Name Doctor" required> <br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Email Address " required> <br>
            <label for="nic">NIC</label><br>
            <input type="number" name="nic" id="nic" placeholder="NIC Number " required> <br>
            <label for="telephone">Telephone</label><br>
            <input type="number" name="telephone" id="telephone" placeholder="Telephone Number " required><br>
            <label for="speciality">Speciality</label><br>
            <select name=" speciality" id="select" required>
                <?php
                    echo $data2;
                    ?>
            </select><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password " required> <br>
            <label for="confirm">Confirm Password</label><br>
            <input type="password" name="confirm" id="confirm" placeholder="Confirm Password" required> <br>
            <input type="submit" value="Add" id="add-button" name="submit">
            <input type="reset" id="rest-button">
        </form>
        <div id="cancelbtn"><a href="Doctors.php"><button>Cancel</button></a></div>
    </div>
    <script src="../JS/index.js"></script>
</body>

</html>