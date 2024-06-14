<?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM `Apointmant` WHERE ID = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Appointment deleted successfully.";
    } else {
        echo "Error deleting appointment: " . $stmt->error;
    }

    $stmt->close();
}

$connection->close();
?>