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
            
            }
            $result1 = $x;
        } else {
            echo "Unable to fetch data";
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }}
    else{
        echo"id is not found";
    }
    
    
 
    $retrieve = "SELECT appoinid FROM appointment WHERE scheduleid = " . $id;
    $result2 = mysqli_query($conn, $retrieve);
    $row = mysqli_fetch_assoc($result2);
    
    if ($row["appoinid"] == null) {
        $sqllast = "INSERT INTO appointment (appoinid, scheduleid) VALUES ('0', " . $id . ")";
        mysqli_query($conn, $sqllast);
    }
    else {
        $row = mysqli_fetch_assoc($result2);
        $value = $row["appoinid"]+1;
        echo "<div class=\"columMaker\">
            <div class=\"ketero\">
                <h2>Your Appointment <br>Number</h2>
                <p>" . $value . "</p>
            </div>
            <div>
               <a href='Book.php?id=" . $value. "'> <button class=\"btntry\">BOOK NOW</button></a> 
            </div>
        </div>";
    
        
        
   // $update = "UPDATE appointment SET appoinid = '$value' + 1 WHERE scheduleid = '$id'";
    //$result2 = mysqli_query($conn, $update);

    }
 

  

      $conn->close();
    ?>
  </div>
   
  </div>
  </div>
</div>
</body>
</html>