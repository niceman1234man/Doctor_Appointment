<?php
session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
    echo "Session not started or user not logged in.";
    exit;
}
// Include the database connection file
include("../connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize inputs
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
        $sql = "UPDATE doctor SET name='$fullName ', email='$email',nic='$nic',telephone='$telephone',speciality='$speciality',password='    $hashedPassword ' WHERE userName='$user'";
        // $stmt = $conn->prepare($sql);
        // $stmt->bind_param("sssssss", $userName, $fullName, $email, $nic, $telephone, $speciality, $hashedPassword);

        if (mysqli_query($conn,$sql)) {
            $message = "$fullName<br> Doctor updated!";
        } else {
            $err = "Error updating doctor details: " . $stmt->error;
        }

        // $stmt->close();
    } else {
        $err = implode("<br>", $errors);
        }
    echo '<center>
    <div style="height: 30%; width: 20%; position: absolute; top: 30%; left: 40%; border: 1px solid black; border-radius: 5px; box-shadow: 10px 10px 10px rgb(60 24 202);">
        <h1>' . $message . $err . '</h1>
        <button style="text-decoration-style: none; padding: 2%; border-radius: 5%; background-color: rgb(102, 102, 156); color: white;">
            <a href="EditDoctorDetail.php" style="color: white; text-decoration: none;">CLOSE</a>
        </button>
    </div>
</center>';
}

$conn->close();
?>
