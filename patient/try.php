<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>try</title>
 
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
   <div class="head"  >
            <button class="backbtn">← Back</button>
            <input class="text" type="text" placeholder="Search Doctor Name or Email">
            <button class="searchBtn">Search</button>
            <h4 class="currentDate">Current Date</h4>
             
        </div>

        <div class="TopAjust"> 
   <div class="appointPopUp">
       <?php
 
     include("connection.php");
     
  session_start();

   if (isset($_GET['id'])) {
    // Retrieve the form data
    $id = $_GET['id'];
    
    try {
        $sqlquery = "SELECT * FROM schedule WHERE id='$id'";
        $result = mysqli_query($conn, $sqlquery);
    

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class=\"detail\">
                    <h2>Session details</h2>
                    <p>" . $row["fname"] . " " . $row["lname"] . "</p>
                    <p>" . $row["email"] . "</p>
                    <p>" . $row["title"] . "</p>
                    <p>" . $row["schedule_date"] . "</p>
                    <p>" . $row["startTime"] . "</p>
                </div>";
                $x = $row["schedule_date"];
            
            

            $_SESSION["docName"] = $row["fname"] . " " . $row["lname"];
            $_SESSION["docemail"] = $row["email"];
            $_SESSION["doctitle"] = $row["title"];
            $_SESSION["docschedule"] = $row["schedule_date"];
            $_SESSION["docstart"] = $row["startTime"];

            }

             // $result1 = $x;
        } else {
            echo "Unable to fetch data";
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error: on detail " ;
    }}
    else{
        echo"id is not found";
    }
    
 




 try {
    $cpyschedule = "SELECT id FROM schedule";
    $executsche = mysqli_query($conn, $cpyschedule);

    $cpyappoint = "SELECT scheduleid FROM appointment";
    $executappoint = mysqli_query($conn, $cpyappoint);

    $numOfRowsappoint = mysqli_num_rows($executappoint);
    $numOfRowschedule = mysqli_num_rows($executsche);

    if ($numOfRowsappoint < $numOfRowschedule) {
        while ($row = mysqli_fetch_assoc($executsche)) {
            $id1 = $row['id'];
            $query11 = "INSERT INTO appointment (scheduleid) VALUES ('$id1')";
            $executQuery11 = mysqli_query($conn, $query11);
            if (!$executQuery11) {
                echo "Error inserting data: " . mysqli_error($conn);
                break;
            }
        }
    }  
} catch (mysqli_sql_exception $e) {
    echo "Error: copying schedule table to appointment " ;
}
 
  
    
$retrieve = "SELECT appoinid FROM appointment WHERE scheduleid = " . $id;
$result2 = mysqli_query($conn, $retrieve);
$row2 = mysqli_fetch_assoc($result2);  
    

    if ($row2["appoinid"] == null) {
        $sqllast = "INSERT INTO appointment (appoinid) VALUES ('0')";
        mysqli_query($conn, $sqllast);
    }
    
       
     $value = $row2["appoinid"] + 1;
     $_SESSION["value"]=$value;
        echo "<div class=\"columMaker\">
            <div class=\"ketero\">
                <h2>Your Appointment <br>Number</h2>
                <p>" . $value . "</p>
            </div>
            <div>
               <a href='Book.php?id=" . $id. "'> <button class=\"btntry\">BOOK NOW</button></a> 
            </div>
        </div>";
    
     
      $conn->close();
    ?>
  </div>
   
  </div>
  </div>
</div>
</body>
</html>