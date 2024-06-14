<?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "SELECT * FROM `Sessions` WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display the session details here
        echo "<h2>Session Details</h2>";
        echo "Title: " . $row["Title"] . "<br>";
        echo "Date & Time: " . $row["Date & Time"] . "<br>";
        echo "Max Num: " . $row["Max num"] . "<br>";
        // Add more details as needed
    } else {
        echo "No session found with the provided ID.";
    }

    $stmt->close();
}

$connection->close();
?>