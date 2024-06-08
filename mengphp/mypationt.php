
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
            <div>
            <div class="btnsearchDivePation" > <button class="backImg"><img src="../images/backbutton.png" class="backImg">back</button> <input type="search" placeholder="search pationt name or email" class="searinputPationt"> <button class="searPationtbtn">search</button><span class="todaysDate"><h3>todays date</h3> </span></div>
                <h1>My Patients</h1>

            <div  class="inputDate"><label for="Show Details About">Show Details About</label><select name="patioets" id="pationts">
                    <option value="mypationt">My Patients Only</option>
                    <option value="all patients">All Patients</option>
                </select> <button class="filterbtn"><img src="../images/filterBtn.png" class="filteimg">Filter</button></div>
            <div class="apointTable">
                <table class="table" cellspacing="110"><tr><th> name	</th><th>NIC</th><th>Telephone	</th><th>Email</th><th>Date of Birth</th><th>Events</th></tr></table>
              </div>
            </div>
            </section>
<script src="../mengjavascript/index.js"></script>
</body>
</html>