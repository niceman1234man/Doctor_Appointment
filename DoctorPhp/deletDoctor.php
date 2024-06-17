<?php
session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
    echo "Session not started or user not logged in.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete doctor</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">

</head>
<body>
                    
                 <div class="delDoc">
                    <div>
                    <label for="Are you sure?">Are you sure?</label><br>
                    <label for="You want to delete this record(Test Doctor).">You want to delete this record(Test Doctor).</label><br>
                    <button class="btnDletAcount">Yes</button>
                    <a href="setting.php"> <button class="btnDletAcount" > No </button></a><br>
                    </div>
                </div>
    
</body>
</html>