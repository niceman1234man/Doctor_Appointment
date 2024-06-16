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
                <a href="Doctors.php"><p id="x-sign">&times;</p></a>
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
                <?php
                    echo $data2;
                    ?>
            </select><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password "><br>
            <label for="confirm">Confirm Password</label><br>
            <input type="password" name="confirm" id="confirm" placeholder="Confirm Password"><br>
            <input type="submit" value="Add" id="add-button" name="submit">
            <input type="reset" id="rest-button">
        </form>
    </div>
</body>

</html>