<?php
session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
    echo "Session not started or user not logged in.";
}
?>
<?php
// Include the database connection file
require("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize inputs
    $docid = $_POST["docid"];
    $email = $_POST["email"];
    $fName = $_POST["Fname"];
    $lName = $_POST["Lname"];
    $nic = $_POST["NIC"];
    $userName = $_POST["userName"];
    $telephone = $_POST["Telephone"];
    $speciality = $_POST["specialties"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["ConformPassword"];
    $fullName = $fName . " " . $lName;

    // Validate the form data
    $errors = array();
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($errors)) {
        // Update the doctor's details
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE `doctor` SET `docemail`=?, `docname`=?, `docnic`=?, `doctel`=?, `specialties`=?, `docpassword`=? WHERE `docid`=?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssssssi", $email, $fullName, $nic, $telephone, $speciality, $hashedPassword, $docid);

        if ($stmt->execute()) {
            echo "Doctor details updated successfully!";
        } else {
            echo "Error updating doctor details: " . $stmt->error;
        }

        $stmt->close();
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

$connection->close();
?>
