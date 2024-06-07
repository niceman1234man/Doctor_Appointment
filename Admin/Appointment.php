<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/appointment.css">
</head>
<body>
    <?php
   include("sidebar.php");
   ?>

  <div class="main-part">
  <h1>Appointment Manager</h1>
    
    <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br></p>
    
   
    <p>All Appointments(1)</p>
    <div class="input-sections">
        Date:<input type="date" name="date" id="date">
        Doctor: <select name="doctor" id="doctor">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        <button><img src="../img/icons/filter-iceblue.svg" alt="" id="filter"> Filter</button>
        
    </div>
    <table>
        <tr><th>Patient Name</th>
            <th>Appointment Number</th>
            <th>Doctor</th>
            <th>Schedule date&time</th>
            <th>Appointment Date</th>
            <th>Events</th></tr>
    </table>
 <script src="../JS/index.js"></script>
   
</body>
</html>