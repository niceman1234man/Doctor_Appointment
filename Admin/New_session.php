<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="add-new-doctors-pop-up ">
        <form action="" method="post">
            <div class="pop-up-header">
                <h2>Add New Session</h2>
                <p id="x-sign">&times;</p>
            </div>
            <label for="name">Session Title</label><br>
            <input type="text" name="title" id="name" placeholder="Name of This Session"><br>
            <label for="speciality">Select Doctor</label><br>
            <select name=" name " id="select" placeholder="Choose doctor name from list">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select><br>
            <label for="nic">Number of Patients/Appointment Numbers</label><br>
            <input type="number" name="nic" id="nic" placeholder="The Finial Appointment Number"><br>
            <label for="email">Session Date</label><br>
            <input type="date" name="date" id="email"><br>
            <label for="telephone">Schedule Time</label><br>
            <input type="time" name="time" id="telephone"><br>
            <input type="submit" value="Place This Session" id="add-button" name="submit">
            <input type="reset" id="rest-button">
        </form>
    </div>

</body>

</html>
<?php

if(isset($_POST["submit"])){
    
$title=$_POST["title"];
$name=$_POST["name"];
$nic=$_POST["nic"];
$time=$_POST["time"];
$speciality=$_POST["speciality"];


}

?>