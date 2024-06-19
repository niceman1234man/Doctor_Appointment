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
                 
                <p class="currentDate">Today's date <img src="../img/calendar.svg" alt=""><br>
            <?php date_default_timezone_set('Asia/Kolkata');
             $today=date('Y-m-d');
              echo $today;?> </p><br>
            </div>
            <div class="TopAjust" >
                <h3>My Bookings(num)</h3>
                <div class="innerDiv">
                    Date: <input class="text" type="date">
                    <button class="filterBtn">Filter</button>
                </div>
            </div>
        
         <div class="rowMaker" >
            <?php
   include("../connection.php");
       
    
    
    if(isset($_GET["id"])){
        $id = $_GET['id'];
    
  




    try{

        $id = $_GET['id'];
        session_start();
   
        $value = $_SESSION["value"];
          
  
            $name = $_SESSION["docName"];
            $title = $_SESSION["doctitle"];
            $schedule_date = $_SESSION["docschedule"];
            $start = $_SESSION["docstart"];
            

            $current_date = date('Y-m-d');  
            $sqlinsert = "INSERT INTO appointment (apo_date, doc_name, title, date, time, apo_num,id)
             VALUES ('$current_date', '$name', '$title', '$schedule_date', '$start', '$value','$id')";
            $query = mysqli_query($conn, $sqlinsert);


            $qura = "UPDATE book SET apo_num = '$value' WHERE scheduleid = '$id'";
            mysqli_query($conn,$qura);

               //<a href='dataBase.php?value=" . $row["numappoint"] . "," . $row["scheduleid"] . "'>
         
     }
     catch (mysqli_sql_exception $e) {
        echo "Error on Booking: " . $e->getMessage();
    }

}

                $sql = "SELECT * FROM appointment";
                $result = mysqli_query($conn, $sql);

                // Display the data


                 
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class=\"book\">
                            <p>" . $row["apo_date"] . "</p>
                            <h2>" . $row["title"] . "</h2>
                            <p>Appointment Number:</p>
                            <p>" . $row["apo_num"] . "</p>
                            <p>" . $row["doc_name"] . "</p>
                            <p>" . $row["date"] . "</p>
                            <p>" . $row["time"] . "</p>
                            <button onclick=\"deletefun('" . $row["apo_num"] . "', '" . $row["id"] . "')\">Cancel Booking</button>
                        </div>";
                    }
                    echo"<div id=\"wow\" class=\"popUp\"></div>";
            
            
  mysqli_close($conn);       
       
?>

</div>
         
  </div> 
  </div>



     
               
 
 </div>
  <script src="Book.js"></script>
</body>
</html>