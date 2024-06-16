<?php
// Include the database connection file
require("connection.php");
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
    $fullName=$fName." ". $lName;




    // Validate the form data
    $errors = array();
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    // if (!preg_match("/^[0-9]{10,13}$/", $telephone)) {
    //     $errors[] = "Invalid telephone number format.";
    // }

    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        $stmt = $connection->prepare("INSERT INTO 'doctor' VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $email, $fullName, $hashedPassword, $nic, $telephone, $speciality);

      
        if ($stmt->execute()){
            echo "New Doctor Added!";
        } else {
            echo  $speciality ;
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
    $connection->close();
}
?>