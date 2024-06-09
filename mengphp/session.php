<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" type="text/css" href="../mengcss/index.css">
    </head>
<body>
    <section class="myApointment" id="myApointment">
               <?php include ("sidBar.php")?>
            <div class="Appointments">
        <div class="topTitle">
            <div class="head"> <button class="backImg"><img src="../images//icons/back-iceblue.svg" class="backImg">back</button>  <span class="set">My Sessions</span></div>
            <div class="todaysDate"><h5>todays date</h5> </div>
        </div>
        <h1>My Sessions</h1>

                <div  class="inputDate"> <span class="dateSesLable">Date:</span><input type="date"> <button class="filterbtn"><img src="../images/icons/filter-iceblue.svg" class="filteimg"> Filter</button></div>

                <div class="apointTable">
              <table cellspacing="30" class="table"> 
                <tr><th>Session Title</th>
                <th>Sheduled Date & Time</th>
                <th>Max num that can be booked	</th>
                <th>Events</th></tr>
                 <tr>
                    <td> Test Session</td>
                 <td>2050-01-01 18:00	</td>
                 <td>50</td><td><button class="tablebtn" onclick="displaySession()">
                    <img src="../images/icons/view-iceblue.svg" alt=""> view</button>
                    <button class="tablebtn" onclick="displayCancelSesion()"><img src="../images/icons/delete-iceblue.svg">cancel session</button>
                </td>
            </tr></table>
            </div>
            </div>
        </section>
        <section>
        <div class="viewSession">
                    <div class="buton" onclick="hidSession()" >
                        &times;
                        </div>
                    <label for="View Details.">View Details.</label><br>
                    <label for="Session Title:">Session Title:</label><br>
                    <input type="text" required name="sessiontitle"  class="inpSetAcount" readonly><br>
                    <label for="Doctor of this session::.">Doctor of this session:</label><br>
                    <input type="text" required name="doctor"  class="inpSetAcount" readonly><br>
                    <label for="Scheduled Date">Scheduled Date:</label><br>
                    <input type="text" required name="ScheduledDate" class="inpSetAcount" readonly><br>
                    <label for=" Scheduled Time"> Scheduled Time:</label><br>
                    <input type="text" name="ScheduledTime" class="inpSetAcount" readonly><br>
                    <label for="total:"> Patients that Already registerd for this session:</label><br>
                        <table><tr><th>Patient ID	</th><th>Patient name</th><th>Appointment number</th><th>Patient Telephone</th></tr></table>
                    <button class="btnSetAcount" onclick="hidSession()">Ok</button><br>
                </div>
                <div class="cancelSession">

                <div class="buton" onclick="hidCancelSesion()">
                        &times;
                        </div>
                    <label for="Are you sure?">Are you sure?</label><br>
                    <label for="You want to delete this record(Test Doctor).">You want to delete this record.</label><br>
                     <label for="Patient Name:">Session Title</label><input type="text" name="SessionTitle" readonly><br>
                     <label for="Appointment number">Sheduled Date & Time</label><input type="text" name="SheduledDate" readonly><br>
                    <button class="btnDletAcount">Yes</button>
                    <button class="btnDletAcount" onclick="hidCancelSesion()">No</button><br>

                </div>
        </section>
        <script src="../mengjavascript/index.js"></script>

</body>
</html>