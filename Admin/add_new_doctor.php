<?php 
include("../connection.php");

if (isset($_POST["submit"])){
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $nic = $_POST["nic"];
    $telephone = $_POST["telephone"];
    $speciality = $_POST["speciality"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];
    
    $message="";
    $err="";

    if ($password == $confirm) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO doctor (username,name, email, nic, telephone, speciality, password) 
                VALUES (?, ?, ?, ?, ?, ?,?)";

$sql2="INSERT INTO user (username, password, usertype) Values(' $username','          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
','d')";      
        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param("ssssss", $name, $email, $nic, $telephone, $speciality, $password);
      
        if ($stmt->execute()&&mysqli_query($conn,$sql2)) {
            $message= "New Doctor Added!";
        } else {
            $err= "Error: " . $stmt->error ;
        }
    } else {
        $err= "Please insert correct password!";
    }

   echo '<center>
      <div style="height: 20%; width: 20%; position:
       absolute; top: 30%; 
      left: 40%;border: 1px solid black;
      border-radius: 5px;
      ">
       <h1>'.   $message . $err .'</h1> 
       <button  style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;">  <a href="Doctors.php">CLOSE</a></button>
     
    </div>

    </center>';
    
}
?>