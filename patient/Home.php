<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>

<div class="whole"> 
    <div>
        <?php
        include("patient.html");
        ?>
    </div>
<div class="center_home" id="homecenter_id"> 
    <div class="Home" id="home">
        <h2 class="home_text">Home</h2>
        <div class="patient_text">
            <h4>Welcome!</p>
                <h2>Patient _Name</h2>

                <p>Haven't any idea about doctors? no problem 
                    let's jumping to "All Doctors" section or "Sessions"
                    Track your past and future appointments history.
                    Also find out the expected arrival time of your doctor 
                    or medical consultant.
                </p>
                <h3>Channel a Doctor Here</h3>
                <input class="input" type="text" placeholder="Search Doctor and We will Find the Session available">
                <button class ="btn">Search</button>

        </div>
    </div>

    <h2 class="home_text">Status</h2>
    <div class="Home_last"> 
    <div class="Status-inline-maker"> 
         <div class="Status-container">
        <div class="stat stat1">1 <br> All <br>Doctors</div>
        <div class="stat stat2">2 <br>All <br> Patients</div>
        <div class="stat stat3">3 <br> NewBooking </div>
        <div class="stat stat4">4 <br> Todats <br>Sessions</div>

    </div>
     </div>
    <div class="table-container"> 
    <h1>Your Upcoming Booking</h1>
    <table class="table">
        <tr>
            <th>Appoint <br>Number</th>
            <th>Session<br>Title</th>
            <th>Doctor</th>
            <th>Shechuled<br>Date&Time</th>
        </tr>
        <tr>
            <th>Num</th>
            <th>title</th>
            <th>doctor-Name</th>
            <th>Date</th>
        </tr>
            
    </table>
   </div>
   </div>
</div>
</div>

</body>
</html>