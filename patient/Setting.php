<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="Setting.css">
</head>
<body>
      <div class="whole">
        <div>
         <?php
         include("patient.html")
         ?>
        </div >
        <div class="Setting_part">
        <div class="head">
                <button class="backbtn">← Back</button>
                <h1 class="h01">Setting</h1>
                <p class="currentDate">Today's date <img src="../img/calendar.svg" alt=""><br>
            <?php date_default_timezone_set('Asia/Kolkata');
             $today=date('Y-m-d');
              echo $today;?> </p><br>
            </div>


            <div class="setting">
          <ul class="order"> 
           <a href="../DoctorPhp/EditDoctorDetail.php">  <li  class="EditAccount"> <h2>Account Settings</h2> 
              Edit your account  Details & Change password</li></a>
              
              <li class="ViewAccount"> <h2>View Account </h2> 
             View personal information About Your Account</li>

              <li class="DeleteAccount"> <h2> Delete Account  </h2> 
              Permanently Remove your Account</li>
         
         
            </ul>

            </div>

        </div>

      </div>


       
      
</body>
</html>