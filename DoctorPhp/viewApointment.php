<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Appointment</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
</head>

<body>
    <?php
include("../connection.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "SELECT * FROM `appointment` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();


    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
       echo  "<div class='view_app'> <h2>Appointment Details</h2>
        Patient Name: " . $row["name"] . "<br>
        Number: " . $row["apo_num"] . "<br>
        Session Title: " . $row["title"] . "<br>
        Session Date & Time: " .  $row["time"] ." ".  $row["time"]. "<br>
        Appointment Date: " . $row["apo_date"] . "<br>
        <a href='apointment.php'><button id='ok'>OK</button></a><div> ";   
     } else {
        echo "No appointment found with the provided ID.";
    }

    $stmt->close();
}

$conn->close();
?>
</body>

</html>