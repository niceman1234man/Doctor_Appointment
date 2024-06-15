<?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "SELECT * FROM `Apointmant` WHERE ID = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Appointment Details</h2>";
        echo "Patient Name: " . $row["Patient Name"] . "<br>";
        echo "Telephone: " . $row["Telephone"] . "<br>";
        echo "Session Title: " . $row["Session Title"] . "<br>";
        echo "Session Date & Time: " . $row["Session Date & Time"] . "<br>";
        echo "Appointment Date: " . $row["Appointment Date"] . "<br>";
        echo "ID: " . $row["ID"] . "<br>";
    } else {
        echo "No appointment found with the provided ID.";
    }

    $stmt->close();
}

$connection->close();
?>