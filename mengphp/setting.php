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
                <button class="setingbtn" id="settingbtn" onclick="displaySetting1()"><h1 class="seting"><img src="../images/icons/settings-iceblue.svg">Acount setting <h6 class="setingsmalfont">edit you acount detail and change you password</h6></h1> </button>

                <button class="setingbtn" id="detailbtn" onclick="displayDetail()"><h1 class="seting"><img src="../images/icons/view-iceblue.svg">View Account Details</h1><h6 class="setingsmalfont">view profesional information about you acount</h6> <br></button>
                <button class="setingbtn" id="deletbtn" onclick="displayDelete()"> <h1 class="setingdelet"><img src="../images/icons/delete-iceblue.svg" alt="">Delete Acount </h1><h6 class="setingsmalfont">will permanently delete your acount</h6></button>
            </div>
            </div>
            </section>
            <!-- popUp section -->
            <section>
                <form action="addDoctor.php" method="post">
                <div class="accountSetting1">
                    <div class="buton" onclick="hidSetting1()">
                    &times;
                    </div>
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
                  <label for="Name">user Name: </label><br>
                  <input type="text" required name="userName" placeholder="your user name here" maxlength="20" class="inpSetAcount"><br>
                  <label for="Telephone">Telephone:</label><br>
                  <input type="text" name="Telephone" placeholder="your Telephone here" maxlength="13"class="inpSetAcount"><br>
                  <label for="Choose specialties">Choose specialties: (CurrentAccident and emergency medicine)</label><br>
                  <select name="specialties" id="speciality" class="inpSetAcount">
                    <option value="acadamic and emergency medicin">acadamic and emergency medicin</option>
                    <option value="All ergology">All ergology</option>
                    <option value="anaesthetic">anaesthetic</option>
                  </select><br>  
<<<<<<< HEAD
                  <button class="previos" onclick="displaySetting1();">previos</button>
                  <button class="next" onclick="displaySetting3();">Next</button>
                 </div>

                 <div class="accountSetting3">
                 <div class="buton" onclick="hidSetting3();">
                    &times;
                    </div>
=======

>>>>>>> c95735cd768b0afa3c78bfa9b013d44b74b7ac48
                  <label for="Password">Password: </label><br>
                  <input type="password" required name="password" placeholder="your password here" maxlength="255" class="inpSetAcount"><br>
                  <label for="Conform Password">Conform Password:</label><br>
                  <input type="password" name="ConformPassword" placeholder="Conform Password here" maxlength="255" required class="inpSetAcount"><br>
                  <input type="reset" value="Reset" class="btnSetAcount"> <input type="submit" value="Save" name="submit" class="btnSetAcount"><br>
                  <button class="previos" onclick="displaySetting2();">previos</button>  
                </div>
                </form>
                
                <div class="viewdetail">
<?php
// Include the database connection file
include("connection.php");
// Retrieve the data from the database
$sql = "SELECT * FROM Doctor WHERE useName=300";
$result = mysqli_query($connection, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Fetch the data row by row
    while ($row = mysqli_fetch_assoc($result)) {
        $fName = $row["Fname"];
        $lName = $row["Lname"];
        $nic = $row["NIC"];
        $userName = $row["userName"];    
        $email = $row["Email"];
        $telephone = $row["Telephone"];
        $speciality = $row["Speciality"];
?>
                    <div class="buton" onclick="hidDetail()" >
                        &times;
                        </div>
                    <label for="View Details.">View Details.</label><br>
                    <label for="Name:.">Name</label><br>
                    <input type="text"  name="name"  class="inpSetAcount" readonly value="<?php echo $fName . ' ' . $lName; ?>"><br>
                    <label for="Email:">Email:</label><br>
                    <input type="email"  name="email" class="inpSetAcount" readonly value="<?php echo $email; ?>"><br>
                    <label for=" NIC:"> NIC:</label><br>
                    <input type="text" name="NIC" class="inpSetAcount" readonly value="<?php echo $nic; ?>"><br>
                    <label for="Name">user Name: </label><br>
                  <input type="text" required name="userName"><br>
                    <label for="Telephone:"> Telephone:</label><br>
                    <input type="text" name="Telephone:"  class="inpSetAcount" readonly value="<?php echo $telephone; ?>"><br>
                    <label for=" Specialties."> Specialties.</label><br>
                    <input type="text" name="speciality:"  class="inpSetAcount" readonly value="<?php echo $speciality; ?>"><br>
                    <button class="btnSetAcount" onclick="hidDetail()">Ok</button><br>


                </div>

    
                <?php
    }
} 
else {
    echo "No data found in the database.";
}
mysqli_close($connection);?>  






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