
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" type="text/css" href="../mengcss/index.css">
</head>
<body>
    <section class="myApointment" id="myApointment">
    <?php include ("sidBar.php")?>

            
            <div class="Appointments">
        <div class="topTitle">
            <div > <button class="backImg"><img src="../images//icons/back-iceblue.svg" class="backImg">back</button><span class="set">Appointment Manager</span> </div>
            <div class="todaysDate"><h5>todays date</h5> </div>
        </div>
        <h1>My Apointment</h1>

                <div  class="inputDate"> <h3>Date:</h3><input type="date"> <button class="filterbtn"><img src="../images/icons/filter-iceblue.svg" class="filteimg"> Filter</button></div>
                <div class="apointTable">
                    <table class="table" cellspacing="20" > <tr><th>Patient name</th>
                    <th>Appointment number</th>
                    <th>Session Title</th>
                    <th>Session Date & Time</th>
                    <th>Appointment Date</th>
                    <th>Events</th></tr><tr><td> Test Patient</td> <td>1</td><td>Test Session</td><td>2050-01-01 @18:00	</td><td>2022-06-03	
                    </td><td><button class="tablebtn" onclick="cancelApointment()"><img src="../images/icons/delete-iceblue.svg">cancel</button></td></tr></table>
                  </div>
            </div>
            </section>
            <section>
                <div class="cancelApoin">
                    <div class="buton" onclick="hidCancelApointment()">
                        &times;
                        </div>
                    <label for="Are you sure?">Are you sure?</label><br>
                    <label for="You want to delete this record(Test Doctor).">You want to delete this record.</label><br>
                     <label for="Patient Name:">Patient Name:</label><input type="text" name="name" readonly><br>
                     <label for="Appointment number">Appointment number</label><input type="text" name="name" readonly><br>
                    <button class="btnDletAcount">Yes</button>
                    <button class="btnDletAcount" onclick="hidCancelApointment()">No</button><br>

                </div>
             </section>
            </section>
            <script src="../mengjavascript/index.js"></script>

</body>
</html>