<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/doctor.css">
</head>

<body>

    <?php
     
    include("../connection.php");
    $list1 = "SELECT * FROM doctor";
    $result = mysqli_query($conn, $list1);
    if(mysqli_num_rows($result) > 0) {
       $data2 = '';
       while($row = mysqli_fetch_assoc($result)) {
           $spec = $row["speciality"];
           $data2 .= '<option value="'. $spec .'">'. $spec .'</option>';
       }
   }
   ?>


    <div class="add-new-session">
        <form action="New_session.php" method="post">
            <div class="pop-up-header">
                <h2>Add New Session</h2>
                <p id="x-sign">&times;</p>
            </div>

            <label for="name">Session Title</label><br>
            <input type="text" name="title" id="name" placeholder="Name of This Session" required><br>
            <label for="speciality">Select Doctor</label><br>
            <select name="speciality" id="select" placeholder="Choose doctor name from list" required>
                <?php
                    echo $data2;
                    ?>
            </select><br>
            <label for="nic">Number of Patients/Appointment Numbers</label><br>
            <input type="number" name="num" id="nic" placeholder="The Finial Appointment Number"> required<br>
            <label for="email">Session Date</label><br>
            <input type="date" name="date" id="email"> required<br>
            <label for="telephone">Schedule Time</label><br>
            <input type="time" name="time" id="telephone"> required<br>
            <input type="submit" value="Add Session" id="add-button" name="submit">
            <input type="reset" id="rest-button">
        </form>
    </div>

</body>

</html>