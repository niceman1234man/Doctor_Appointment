<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>

<body>
    <?php
    include("sidebar.php");
    ?>
    <div class="main-part">
        <img src="../img/search.svg" alt="search" id="search-img">
        <input type="search" placeholder="search Patient Name or Email" id="search">
        <button id="search-button">search</button>
        <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""></p>

        <p>All Patients(1)</p>
        <table>
            <tr>
                <th> Name</th>
                <th>NIC</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Date of birth</th>
                <th>Events</th>
            </tr>
            <tr>
                <td>Aster</td>
                <td>0002</td>
                <td>0989764532</td>
                <td>abu@gmail.com</td>
                <td>09/09/2000</td>
                <td><button id="view-patient-buttons"><img src="../img/icons/view-iceblue.svg" alt="">View</button></td>
            </tr>
        </table>
        <div class="patients-detail-pop-up">
            <div class="pop-up-header">
                <h2>View Detail</h2>
                <p id="x-sign">&times;</p>
            </div>
            <p>Patient ID</p>
            <p></p>
            <p>Name :</p>
            <p></p>
            <p>Email :</p>
            <p></p>
            <p> NIC :</p>
            <p></p>
            <p>Telephone :</p>
            <p></p>
            <p>Address :</p>
            <p></p>
        </div>
        <script src="../JS/index.js"></script>
</body>

</html>
<?php 
$result=mysqli_query($conn,"select * from patients");
while($row=mysqli_fetch_array($result)){
    
}
?>