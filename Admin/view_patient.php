<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include("connection.php");
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            $sql = "SELECT * FROM patient WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            $name = $row["name"];
            $nic = $row["nic"];
            $tel = $row["telephone"];
            $email = $row["email"];
            $date_of_birth = $row["date_of_birth"];
    echo '
    <div class="patients-detail">
        <div class="pop-up-header">
            <h2>View Detail</h2>
            <p id="x-sign">&times;</p>
        </div>
        <p>Patient ID:'. $id .'</p>
        <p>Name :'. $name .'</p>
        <p>Email :'.$email . '</p>
        <p> NIC :'. $nic .'</p>
        <p>Telephone :'.$tel .'</p 
        <p>date of birth : '.$date_of_birth .'</p>

    </div>';
        }
    ?>
</body>

</html>