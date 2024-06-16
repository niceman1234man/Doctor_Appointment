<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
</head>
<body>
<form action="addDoctor.php" method="post" class="formeditdoc">
    <label for=""><h1>Edit Doctor Details.</h1></label>
    <h4>Doctor ID (Auto Generated)</h4>
    <div class="Editdoc">
        <div>
            <label for="Email">Email:</label><br>
            <input type="email" required name="email" maxlength="50" placeholder="fill your email here" class="inpSetAcount"><br>
            <label for="Name">FName:</label><br>
            <input type="text" required name="Fname" placeholder="your first name here" maxlength="20" class="inpSetAcount"><br>
            <label for="Name">LName:</label><br>
            <input type="text" required name="Lname" placeholder="your last name here" maxlength="20" class="inpSetAcount"><br>
            <label for="nic">NIC:</label><br>
            <input type="text" name="NIC" placeholder="your nic here" maxlength="50" class="inpSetAcount"><br>
            <label for="Name">User Name:</label><br>
            <input type="text" required name="userName" placeholder="your user name here" maxlength="20" class="inpSetAcount"><br>
            <label for="Telephone">Telephone:</label><br>
            <input type="text" name="Telephone" placeholder="your Telephone here" maxlength="13" class="inpSetAcount"><br>
        </div>
        <div>
            <label for="Choose specialties">Choose specialties:</label><br>
            <select name="specialties" id="speciality" class="inpSetAcount">
                <?php
                require("connection.php");
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }
                $sql = "SELECT * FROM `specialties` WHERE 1";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["sname"] . "'>" . $row["sname"] . "</option>";
                    }
                }
                $connection->close();
                ?>
            </select><br>
            <label for="Password">Password:</label><br>
            <input type="password" required name="password" placeholder="your password here" maxlength="255" class="inpSetAcount"><br>
            <label for="Conform Password">Conform Password:</label><br>
            <input type="password" name="ConformPassword" placeholder="Conform Password here" maxlength="255" required class="inpSetAcount"><br>
            <input type="reset" value="Reset" class="btnSetAcount"> <input type="submit" value="Save" name="submit" class="btnSetAcount"><br>         
            <button class="btnSetAcount"><a href="setting.php">Back</a></button><br>
        </div>
    </div>
</form>
</body>
</html>