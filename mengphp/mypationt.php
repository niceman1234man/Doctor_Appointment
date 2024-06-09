
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Pationt</title>
 <link rel="stylesheet" type="text/css" href="../mengcss/index.css">


</head>
<body>
    <section class="myApointment" id="myApointment">
        <?php include ("sidBar.php")?>
            <div >
            <div class="btnsearchDivePation" > <button class="backImg">
                <img src="../images/icons/back-iceblue.svg" class="backImg">back</button> 
                <input type="search" placeholder="search pationt name or email" class="searinputPationt"> 
            <button class="searPationtbtn">search</button><span class="todaysDate">
                <h5>todays date</h5> </span></div>
                <h1>My Patients</h1>

            <div  class="inputDate"><label for="Show Details About">Show Details About</label>
            <select name="patioets" id="pationts">
                    <option value="mypationt">My Patients Only</option>
                    <option value="all patients">All Patients</option>
                </select> <button class="filterbtn">
                    <img src="../images/icons/filter-iceblue.svg" class="filteimg">Filter</button></div>
            <div class="apointTable">
                <table class="table" cellspacing="50"><tr><th> name	</th><th>NIC</th><th>Telephone	</th><th>Email</th><th>Date of Birth</th><th>Events</th></tr>
            <tr><td> Test Patient	</td><td>0000000000	</td><td>0120000000</td><td>patient@edoc.com	</td><td>2000-01-01	
            </td><td><button class="tablebtn" onclick="displayPationtDetail()"><img src="../images/icons/view-iceblue.svg" > view</button ></td></tr></table>
              </div>
            </div>
            </section>
            <section>
            <div class="viewPationt">
            <div class="buton" onclick="hidPationtDetail()" >
                        &times;
                        </div>
                    <label for="View Details.">View Details.</label><br>
                    <label for="Patient ID">Patient ID:</label><br>
                    <input type="text" required name="PatientID"  class="inpSetAcount" readonly><br>
                    <label for="Name:.">Name</label><br>
                    <input type="text" required name="name"  class="inpSetAcount" readonly><br>
                    <label for="Email:">Email:</label><br>
                    <input type="email" required name="email" class="inpSetAcount" readonly><br>
                    <label for=" NIC:"> NIC:</label><br>
                    <input type="text" name="NIC" class="inpSetAcount" readonly><br>
                    <label for="Telephone:"> Telephone:</label><br>
                    <input type="text" name="Telephone:"  class="inpSetAcount" readonly><br>
                    <label for=" Address"> Address:</label><br>
                    <input type="text" name="Address"  class="inpSetAcount" readonly><br>
                    <button class="btnSetAcount" onclick="hidPationtDetail()">Ok</button><br>
                </div>
            </section>
<script src="../mengjavascript/index.js"></script>
</body>
</html>