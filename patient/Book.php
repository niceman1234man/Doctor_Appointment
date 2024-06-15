<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="Book.css">
</head>
<body>
    <div class="whole">
        <div>
        <?php
        include("patient.html");
        ?>
            </div>
        <div class="Book_part">
            <div class="head">
                <button class="backbtn">← Back</button>
                <h1 class="h01">MY Bookings history</h1>
                <h4 class="currentDate">currentDate</h4>
            </div>
            <div class="TopAjust">
                <h3>My Bookings(num)</h3>
                <div class="innerDiv">
                    Date: <input class="text" type="date">
                    <button class="filterBtn">Filter</button>
                </div>
            </div>
            
            <?php
   include("connection.php");
    if (isset($_GET['id'])) {
    // Retrieve the form data
    $id = $_GET['id'];

    session_start();
    if (isset($_SESSION["value"])) {
        $value = $_SESSION["value"];
          
  
            $name = $_SESSION["docName"];
            $title = $_SESSION["doctitle"];
            $schedule_date = $_SESSION["docschedule"];
            $start = $_SESSION["docstart"];
            

            $current_date = date('Y-m-d');  
            $sqlinsert = "INSERT INTO Book (datenow, docName, title, schedule_date, startTime, numappoint)
             VALUES ('$current_date', '$name', '$title', '$schedule_date', '$start', '$value')";
            $query = mysqli_query($conn, $sqlinsert);


            $qura = "UPDATE appointment SET appoinid = '$value' WHERE scheduleid = '$id'";
            mysqli_query($conn,$qura);


             if( ($query)) {

                $sql = "SELECT * FROM Book";
                $result = mysqli_query($conn, $sql);

                // Display the data
               echo" <div class=\"rowMaker >";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class=\"book\">
                        <p>" . $row["datenow"] . "</p>
                        <h2>" . $row["title"] . "</h2>
                        <p>Appointment Number:</p>
                        <p>" . $row["numappoint"] . "</p>
                        <p>" . $row["docName"] . "</p>
                        <p>" . $row["schedule_date"] . "</p>
                        <p>" . $row["startTime"] . "</p>
                        <button>Cancel Booking</button>
                    </div>";
                }
                "</div>";
                
            }
            
            else  {
                echo "Error on entering data on Book";
            }
        }
    }  
?>
         
   
  </div>
 </div>
        
        
         
</body>
</html>