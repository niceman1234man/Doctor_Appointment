<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="stylesheet" href="Doctor.css">
</head>

<body>
    <div class="whole">
        <div>
            <?php
            include("patient.html")
            ?>
        </div>


        <div class="doctor_All">
            <div class="head">
                <button class="backbtn">← Back</button>
                <input class="text" type="text" placeholder="Search Doctor Name or Email">
                <button class="searchBtn">Search</button>
                <h4 class="currentDate">Current Date <br><?php date_default_timezone_set('Asia/Kolkata');
             $today=date('Y-m-d');
              echo $today;?> </p>
                </h4>

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
                        <tr>
                            <td>Zulkif</td>
                            <td>e@gmail.com</td>
                            <td>Professor</td>
                            <td> <button>View</button>
                                <button>Session</button>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>

        </div>

    </div>
</body>

</html>