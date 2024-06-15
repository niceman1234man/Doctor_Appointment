<!-- <?php
// Initialize the session
 

// // Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: welcome.php");
//     exit;
// }

// Include config file
include("Connection.php");

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

<<<<<<< HEAD
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}

<?
=======
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
      
    
?> -->
>>>>>>> b221e02290fbc76473069d731592c8fe035f0cb3