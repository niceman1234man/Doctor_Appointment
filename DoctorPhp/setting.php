<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" type="text/css" href="../mengcss/index.css">
    </head>
<body>
    <section class="myApointment" id="myApointment">
    <?php include ("sidBar.php")?>
            <div class="Appointments">
        <div class="topTitle">
            <div > <button class="backImg" onck ="DashBourd.php"><img src="../images/icons/back-iceblue.svg" class="backImg" >back</button>  <span class="set">Settings</span> </div>
            <div class="todaysDate"><h5>todays date</h5> </div>
           </div>
                <div class="setindbtncontener">
                    <a href="EditDoctorDetail.php">
                        <button class="setingbtn" id="settingbtn"><h3 class="seting"><img src="../images/icons/settings-iceblue.svg">Acount setting </h3> <br>edit you acount detail and change you password</button>
                    </a>
<a href="viewDoctorDetail.php"><button class="setingbtn" id="detailbtn"><h3 class="seting"><img src="../images/icons/view-iceblue.svg">View Account Details</h3>view profesional information about you acount</button>
</a>
<a href="deletDoctor.php"><button class="setingbtn" id="deletbtn"> <h3 class="setingdelet"><img src="../images/icons/delete-iceblue.svg" alt="">Delete Acount </h3>will permanently delete your acount</button>
</a>
            </div>
            </div>
            </section>
            <!-- popUp section -->
            <section>

             </section>
             <script src="../DoctorJs/index.js"></script>
             </body>
</html>