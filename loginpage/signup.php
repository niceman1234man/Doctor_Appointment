<!-- <?php
// Initialize the session
 

// // Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: welcome.php");
//     exit;
// }

// Include config file
include("Connection.php");


    // Retrieve form data
    $First_Name = $_POST["fname"] ?? '';
    $Last_name = $_POST["lname"] ?? '';
    $email = $_POST["email"] ?? '';
    $NIC = $_POST["nic"] ?? '';
    $password = $_POST["password"] ?? '';
    $address = $_POST["address"] ?? '';
    $Phone_number = $_POST["phonenumber"] ;
    $dob = $_POST["dob"] ;

 $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      if ($stmt = $conn->prepare("INSERT INTO personal_data (FirstName, LastName, email, NIC, password, Address, phone_number, dob) VALUES (?, ?, ?, ?, ?, ?, ?, ?)")) 
            $stmt->bind_param("ssssssss", $First_Name, $Last_name, $email, $NIC, $hashed_password, $address, $Phone_number, $dob);

// Execute the statement
if ($stmt->execute()) {
    $message = "New record created successfully";
    $status = "success";
} else {
    $message = "Error: " . $stmt->error;
    $status = "error";
}

// Close the connection
$stmt->close();
$conn->close()
      
    
<<<<<<< HEAD
?> -->
>>>>>>> b221e02290fbc76473069d731592c8fe035f0cb3
=======
?> -->
>>>>>>> 4032e8b0de6a7a2ba165a469be344eb43e508a0f
