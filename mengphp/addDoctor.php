<?php
// Include the database connection file
include("connection.php");

if (isset($_POST["submit"])) {
    $fName = $_POST["Fname"];
    $lName = $_POST["Lname"];
    $nic = $_POST["NIC"];
    $email = $_POST["email"];
    $telephone = $_POST["Telephone"];
    $speciality = $_POST["specialties"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["ConformPassword"];

    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        return;
    }
    $sql = "INSERT INTO Doctor VALUES ('$fName', '$lName', '$nic', '$email', '$telephone', '$speciality', '$password')";

    if (mysqli_query($connection, $sql)) {
        echo "New Doctor Added!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
} else {
    echo "No form data submitted.";
}

mysqli_close($connection);
?>