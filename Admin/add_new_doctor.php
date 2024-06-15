<?php if(isset($_POST["submit"])){
$name = $_POST["name"];
$email = $_POST["email"];
$nic = $_POST["nic"];
$telephone = $_POST["telephone"];
$speciality = $_POST["speciality"];
$password = $_POST["password"];
$confirm = $_POST["confirm"];

if($password == $confirm){
$sql = "INSERT INTO doctor (name, email, nic, telephone, speciality, password) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $nic, $telephone, $speciality, $password);

if(mysqli_stmt_execute($stmt)){
echo "New Doctor Added!";
header("location: Doctor.php");
exit();
} else {
echo "Error: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
} else {
echo "Please insert correct password!";
}
}