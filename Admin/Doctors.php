<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>
<body>
  <?php
  include("sidebar.php");
  ?>

  <div class="main-part">
<img src="../img/search.svg" alt="search" id="search-img">
 <input type="search" placeholder="search Doctor Name or Email" id="search" >
 
    <button id="search-button">search</button>
    <p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br></p><br>
    
    <div class="add-new-section">
        <h2>Add new Doctor</h2>
        <button  id="add-new-button">+ Add New</button>
    </div>
    <p>All Doctors(1)</p>
    <table>
        <tr><th>Doctor Name</th>
            <th>Email</th>
            <th>Specialities</th>
            <th>Events</th></tr>
            <tr>
              <td>Abebe</td>
              <td>abe@gmail.com</td>
              <td>surgical</td>
              <td>
                <button><img src="../img/icons/edit-iceblue.svg" alt="">Edit</button>
                <button class="view-button"><img src="../img/icons/view-iceblue.svg" alt="">View</button>
                <button><img src="../img/icons/delete-iceblue.svg" alt="">Remove</button>
              </td>
            </tr>
    </table>
    <div class="add-new-doctors-pop-up ">
    <form action="">
     <div class="pop-up-header"><h2>Add New Doctor</h2><p  id="x-sign">&times;</p></div>
    <label for="name">Name</label><br>
   <input type="text" name="" id="name" placeholder="Name Doctor"><br>
   <label for="email">Email</label><br>
   <input type="email" name="" id="email" placeholder="Email Address "><br>
   <label for="nic">NIC</label><br>
    <input type="number" name="" id="nic"  placeholder="NIC Number "><br>
    <label for="telephone">Telephone</label><br>
   <input type="number" name="" id="telephone" placeholder="Telephone Number "><br>
   <label for="speciality">Speciality</label><br>
  <select name=" " id="select">
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
</select><br>
   <label for="password">specialityPassword</label><br>
   <input type="text" name="" id="password" placeholder="Enter Password "><br>
   <label for="confirm">Confirm Password</label><br>
   <input type="password" name="" id="confirm" placeholder="Confirm Password"><br>
   <input type="submit" value="Add" id="add-button">
   <input type="reset" id="rest-button">
    </form>
  </div>
  <div class="doctor-detail-pop-up">
    <div class="pop-up-header"><h2>View Detail</h2><p  id="xd-sign">&times;</p></div>
   <p>Name :</p>
   <p></p>
   <p>Email :</p>
   <p></p>
   <p>  NIC :</p>
   <p></p>
   <p>Telephone :</p>
   <p></p>
   <p>Specialities :</p>
   <p></p>
   <button>ok</button>
  </div>

  </div>
  <script src="../JS/index.js"></script>
</body>
</html>