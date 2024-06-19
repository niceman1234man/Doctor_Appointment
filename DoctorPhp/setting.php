

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
<link rel="stylesheet" href="../DoctorCss/index.css">
</head>

<body>

    <?php include ("sidebar.php")?>
    <div class="main-part">
<div class="top_title_setting">
        <h1>Setting</h1><p id="today-date">Today's date <img src="../img/calendar.svg" alt=""><br>
            <?php  date_default_timezone_set('Asia/Kolkata');

      $today = date('Y-m-d');
      echo $today;?>
        </p>
        </div>
        <div id="setting">

            <div id="bt1"> <a href="EditDoctorDetail.php">
                    <button class="settingbtn">
                        <h3><img src="../images/icons/settings-iceblue.svg">Acount setting </h3> <br>edit
                        you acount detail and change you password
                    </button>
                </a></div>

            <div id="bt2">
                <a href="viewDoctorDetail.php">  
                     <button class="settingbtn">
                        <h3 class="seting"><img src="../images/icons/view-iceblue.svg">View Account Details</h3>view
                        profesional information about you acount
                    </button> </a>
            </div>

            <div id="bt3"> 
                <a href="delete account.php">
                    <button class="settingbtn">  <h3 class="setingdelet"><img src="../images/icons/delete-iceblue.svg" >Delete Acount </h3>
                        will permanently delete your acount
                    </button>
                </a>
            </div>

        </div>
    </div>


    <script src="../DoctorJs/index.js"></script>
</body>

</html>