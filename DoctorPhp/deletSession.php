<?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM `Sessions` WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Session deleted successfully!";
        header("Location: index.php"); // Redirect to the main page
    } else {
        echo "Error deleting session: " . $stmt->error;
    }

    $stmt->close();
}

$connection->close();
?>