<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="stylesheet" href="Doctor.css">
</head>
<body>
    <div class="whole" id="all">
        <div>
          
            <?php
            include("patient.html")
            ?>
        </div>
        <div class="viewpop" id="viewPopup">
  <h3>Patient Appointment Web</h3>
   
        <div class="doctor_All">
            <div class="head">
            <button class="backbtn">← Back</button>
            <input class="text" type="text" placeholder="Search Doctor Name or Email">
            <button class="searchBtn">Search</button>
            <p class="currentDate">Today's date <img src="../img/calendar.svg" alt=""><br>
            <?php date_default_timezone_set('Asia/Kolkata');
             $today=date('Y-m-d');
              echo $today;?> </p><br>
         </div>
      
      <div class="topAjust">
         <h3>All Doctors(Number of Doctor)</h3>

         <div class="docTable">
            <table class="table">
                <tr>
                    <th>Doctor Name</th>
                    <th>Email</th>
                    <th>Spectiality</th>
                    <th>Event</th>
                </tr> 
                 
                <?php 
                session_start();
                include("../connection.php");
         $sql ="select * from doctor ";
        $result=mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                 $id=$row["id"];
                  echo'<tr>
                    <td>'.$row["name"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["speciality"].'</td>
                    <td>
                     <form action="DoctorView.php" method="post" style="display:flex;">
          <input type="hidden"  name="id" value="' .$id . '">
         <button type="submit" class="view-button" name="edit">
        <img src="../img/icons/edit-iceblue.svg" alt="View" value="View">view
          </button>
       </form>
                    </td>
                </tr>"';
             
        }
                
            
              
      
                
                
                
                
                ?>
            </table>

         </div>
         </div>

 

    </div>
        

    </div>
   

    <?php
   

   
         //<script src="Doctor.js"></script>    
    ?>
    
</body>
</html>