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
            <div > <button class="backImg"><img src="../images/icons/back-iceblue.svg" class="backImg">back</button>  <span class="set">Settings</span> </div>
            <div class="todaysDate"><h5>todays date</h5> </div>
           </div>
                <div class="setindbtncontener">
                <button class="setingbtn" id="settingbtn" onclick="displaySetting()"><h1 class="seting"><img src="../images/icons/settings-iceblue.svg">Acount setting <h6 class="setingsmalfont">edit you acount detail and change you password</h6></h1> </button>

                <button class="setingbtn" id="detailbtn" onclick="displayDetail()"><h1 class="seting"><img src="../images/icons/view-iceblue.svg">View Account Details</h1><h6 class="setingsmalfont">view profesional information about you acount</h6> <br></button>
                <button class="setingbtn" id="deletbtn" onclick="displayDelete()"> <h1 class="setingdelet"><img src="../images/icons/delete-iceblue.svg" alt="">Delete Acount </h1><h6 class="setingsmalfont">will permanently delete your acount</h6></button>
            </div>
            </div>
            </section>
            <!-- popUp section -->
            <section>
                <div class="accountSetting">
                    <div class="buton" onclick="hidSetting()">
                    &times;
                    </div>
                    <form action="addDoctor.php" method="post">
                    <label for=""><h1>Edit Doctor Details.
                    </h1>
                    <h4>Doctor ID (Auto Generated)
                    </h4></label><br>
                  <label for="Email">Email:</label><br>
                  <input type="email" required name="email" maxlength="50" placeholder="fill your email here" class="inpSetAcount"><br>
                  <label for="Name">FName: </label><br>
                  <input type="text" required name="Fname" placeholder="your first name here" maxlength="20" class="inpSetAcount"><br>
                  <label for="Name">LName: </label><br>
                  <input type="text" required name="Lname" placeholder="your last name here" maxlength="20" class="inpSetAcount"><br>
                  <label for="nic">NIC </label><br>
                  <input type="text" name="NIC" placeholder="your nic here" maxlength="50" class="inpSetAcount"><br>
                  <label for="Telephone">Telephone:</label><br>
                  <input type="text" name="Telephone" placeholder="your Telephone here" maxlength="13"class="inpSetAcount"><br>
                  <label for="Choose specialties">Choose specialties: (CurrentAccident and emergency medicine)</label><br>
                  <select name="specialties" id="speciality" class="inpSetAcount">
                    <option value="acadamic and emergency medicin">acadamic and emergency medicin</option>
                    <option value="All ergology">All ergology</option>
                    <option value="anaesthetic">anaesthetic</option>
                  </select><br>
                  <label for="Password">Password: </label><br>
                  <input type="password" required name="password" placeholder="your password here" maxlength="6" class="inpSetAcount"><br>
                  <label for="Conform Password">Conform Password:</label><br>
                  <input type="password" name="ConformPassword" placeholder="Conform Password here" maxlength="6" required class="inpSetAcount"><br>
                  <input type="reset" value="Reset" class="btnSetAcount"> <input type="submit" value="Save" name="submit" class="btnSetAcount"><br>
                </form>
                </div>
                <div class="viewdetail">
                    <div class="buton" onclick="hidDetail()" >
                        &times;
                        </div>
                    <label for="View Details.">View Details.</label><br>
                    <label for="Name:.">Name</label><br>
                    <input type="text" required name="name"  class="inpSetAcount" readonly><br>
                    <label for="Email:">Email:</label><br>
                    <input type="email" required name="email" class="inpSetAcount" readonly><br>
                    <label for=" NIC:"> NIC:</label><br>
                    <input type="text" name="NIC" class="inpSetAcount" readonly><br>
                    <label for="Telephone:"> Telephone:</label><br>
                    <input type="text" name="Telephone:"  class="inpSetAcount" readonly><br>
                    <label for=" Specialties."> Specialties.</label><br>
                    <input type="text" name="speciality:"  class="inpSetAcount" readonly><br>
                    <button class="btnSetAcount" onclick="hidDetail()">Ok</button><br>


                </div>
                <div class="confiDelet">
                    <div class="buton" onclick="hidDelete()">
                        &times;
                        </div>
                    <label for="Are you sure?">Are you sure?</label><br>
                    <label for="You want to delete this record(Test Doctor).">You want to delete this record(Test Doctor).</label><br>
                    <button class="btnDletAcount">Yes</button>
                    <button class="btnDletAcount" onclick="hidDelete()">No</button><br>
                </div>
             </section>
             <script src="../mengjavascript/index.js"></script>
</body>
</html>