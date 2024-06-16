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
    $id = $_POST["Number"];

    $sql = "SELECT * FROM `a ppointment` WHERE Number = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Appointment Details</h2>";
        echo "Patient Name: " . $row["Patient Name"] . "<br>";
        echo "Telephone: " . $row["Telephone"] . "<br>";
        echo "Number: " . $row["Number"] . "<br>";
        echo "Session Title: " . $row["Session Title"] . "<br>";
        echo "Session Date & Time: " . $row["Session Date & Time"] . "<br>";
        echo "Appointment Date: " . $row["Appointment Date"] . "<br>";
    } else {
        echo "No appointment found with the provided ID.";
    }

    $stmt->close();
}

$connection->close();
?>
</body>

</html>