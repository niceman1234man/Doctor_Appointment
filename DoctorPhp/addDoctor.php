<?php
// Include the database connection file
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fName = $_POST["Fname"];
    $lName = $_POST["Lname"];
    $nic = $_POST["NIC"];
    $userName = $_POST["userName"];    
    $email = $_POST["email"];
    $telephone = $_POST["Telephone"];
    $speciality = $_POST["specialties"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["ConformPassword"];

    // Validate the form data
    $errors = array();
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (!preg_match("/^[0-9]{10,13}$/", $telephone)) {
        $errors[] = "Invalid telephone number format.";
    }

    if (empty($errors)) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL query
        $stmt = $connection->prepare("INSERT INTO Doctor (Fname, Lname, NIC, userName, email, Telephone, speciality, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $fName, $lName, $nic, $userName, $email, $telephone, $speciality, $hashedPassword);

        if ($stmt->execute()) {
            echo "New Doctor Added!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Display the errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }

    $connection->close();
}
?>
