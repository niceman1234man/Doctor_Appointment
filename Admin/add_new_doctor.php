<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>

<body>
    <div class="add-new-doctors-pop-up ">
        <form action="add_new_doctor.php" method="post">
            <div class="pop-up-header">
                <h2>Add New Doctor</h2>
                <p id="x-sign">&times;</p>
            </div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Name Doctor"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Email Address "><br>
            <label for="nic">NIC</label><br>
            <input type="number" name="nic" id="nic" placeholder="NIC Number "><br>
            <label for="telephone">Telephone</label><br>
            <input type="number" name="telephone" id="telephone" placeholder="Telephone Number "><br>
            <label for="speciality">Speciality</label><br>
            <select name=" speciality" id="select">
                <option value="nurse">nurse</option>
                <option value="anstesia">Anstesia</option>
                <option value="padio">Padio</option>
            </select><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password "><br>
            <label for="confirm">Confirm Password</label><br>
            <input type="password" name="confirm" id="confirm" placeholder="Confirm Password"><br>
            <input type="submit" value="Add" id="add-button" name="submit">
            <input type="reset" id="rest-button">
        </form>
        <?php
include("connection.php");
if(isset($_POST["submit"])){
    
$name=$_POST["name"];
$email=$_POST["email"];
$nic=$_POST["nic"];
$telephone=$_POST["telephone"];
$speciality=$_POST["speciality"];
$password=$_POST["password"];
$confirm=$_POST["confirm"];
$sql="insert into   doctor  values('$name','$email','$nic','$telephone','$speciality','$password')";
if($password==$confirm){
    mysqli_query($conn,$sql);
    echo "New Doctor Added!";
}else{
    echo "please insert correct password!";
}


}

mysqli_close($conn);
?>
    </div>
</body>

</html>