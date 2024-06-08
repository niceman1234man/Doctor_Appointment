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
            <div class="head"> <button class="backImg"><img src="../images/backbutton.png" class="backImg">back</button>  <span class="set">Settings</span></div>
            <div class="todaysDate"><h3>todays date</h3> </div>
        </div>
                <div  class="inputDate"> <h3>Date:</h3><input type="date"> <button class="filterbtn"><img src="../images/filterBtn.png" class="filteimg"> Filter</button></div>
                <h1>My Session</h1>

                <div class="apointTable">
              <table cellspacing="110"> 
                <tr><th><th>Session Title</th><th>Sheduled Date & Time</th><th>Max num that can be booked	</th><th>Events</th></th></tr>
            </table>
            </div>
            </div>
            </div
        </section>
        <script src="../mengjavascript/index.js"></script>

</body>
</html>