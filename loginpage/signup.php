<?php
// Include config file
require "Connection.php"; // Ensure this file sets up $link variable correctly

// Initialize variables
$First_Name = $Last_name = $email = $NIC = $password = $address = $Phone_number = $dob = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $First_Name = isset($_POST['fname']) ? $_POST['fname'] : '';
    $Last_name = isset($_POST['lname']) ? $_POST['lname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $NIC = isset($_POST['nic']) ? $_POST['nic'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $Phone_number = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';

    // Validate form data (you may want to add more validation here)

    // Check if all required fields are filled
    if ($First_Name && $Last_name && $address && $NIC && $dob && $email && $Phone_number && $password) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind
        $stmt = $link->prepare("INSERT INTO personal_data (FirstName, LastName, email, NIC, password, Address, phone_number, dob) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $First_Name, $Last_name, $email, $NIC, $hashed_password, $address, $Phone_number, $dob);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Please fill all required fields.";
    }
}

// Close the connection
if (isset($link)) {
    $link->close();
}
?>
