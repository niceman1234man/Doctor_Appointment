<?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "SELECT * FROM `Patients` WHERE ID = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display the patient details here
        echo "<h2>Patient Details</h2>";
        echo "First Name: " . $row["Fname"] . "<br>";
        echo "Last Name: " . $row["Lname"] . "<br>";
        echo "NIC: " . $row["NIC"] . "<br>";
        echo "Telephone: " . $row["Telephone"] . "<br>";
        echo "Email: " . $row["Email"] . "<br>";
        echo "Date of Birth: " . $row["Date of Birth"] . "<br>";
        echo "ID: " . $row["ID"] . "<br>";
        // Add more details as needed
    } else {
        echo "No patient found with the provided ID.";
    }

    $stmt->close();
}

$connection->close();
?>