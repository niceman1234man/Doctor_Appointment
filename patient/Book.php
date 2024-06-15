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
                <h4 class="currentDate">currentDate <br><?php date_default_timezone_set('Asia/Kolkata');
             $today=date('Y-m-d');
              echo $today;?> </p>
                </h4>

            </div>
            <div class="TopAjust">
                <h3>My Bookings(num)</h3>
                <div class="innerDiv">
                    Date: <input class="text" type="date">
                    <button class="filterBtn">Filter</button>
                </div>
            </div>

        </div>


    </div>
</body>

</html>