<?php
include("../Connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $lname = $_POST["lname"];
    $address = $_POST["address"];
    $nic = $_POST["nic"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO patient (FirstName, LastName, NIC, phone_number, email, date_of_birth, Address, password)
            VALUES ('$name', '$lname', '$address', '$nic', '$dob', '$email', '$phonenumber', '$hashedPassword')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close the database connection
    $conn->close();
}
?>