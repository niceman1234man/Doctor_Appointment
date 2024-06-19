<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="Schedule.css">
</head>

<body>
    <div class="whole" id="all">

        <div>
            <?php
    include("patient.html")
    ?>
        </div>


        <div class="Schedul_part">
            <div class="head">
                <button class="backbtn">← Back</button>
                <input class="text" type="text" placeholder="Search Doctor Name or Email">
                <button class="searchBtn">Search</button>
                <h4 class="currentDate">Current Date<br><?php date_default_timezone_set('Asia/Kolkata');
             $today=date('Y-m-d');
              echo $today;?> </p>
                </h4>



            </div>
            <div class="TopAjust">
                <h3>All Session(num)</h3>
                <div class="rowMaker">
                    <ul id="sechedule" class="sechedule">
                        <li id="first">
                            <h4>The Following list are the Available doctors by now</h4>
                        </li>


                        <?php
        include("connection.php");
        try {
         
          
            
            $sqlquery = "SELECT * FROM schedule";
            $result = mysqli_query($conn, $sqlquery);
           
        
            if (!$result) {
                echo "Unable to fetch data";
            } else {
              
        
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>
                    <h2>" . $row["title"] . "</h2>
                    <p>" . $row["fname"] . " " . $row["lname"] . "</p>
                    <p>" . $row["schedule_date"] . "</p>
                    <p>" . $row["startTime"] . "</p>

                    <a href='try.php?id=" . $row["id"] . "'><button class='booknowBtn' >Book Now</button></a>
                </li>";
                 
                
        }
        
        
    
    
    
    }} catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
        
        // <button class=\"booknowBtn\" onclick=\"openPopUP('" . $row["id"] . "')\">Book Now</button> class=\"booknowBtn\" onclick=\"openPopUP()\"
        $conn->close();
          ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>


    <!--<script src="Schedule.js"></script>-->

</body>

</html>