<?php
session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
    echo "Session not started or user not logged in.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
</head>
<body>
    <?php
include("../connection.php");

    // Ensure $user is safe for SQL query
    $user = $conn->real_escape_string($user);

    $sql = "SELECT * FROM doctor WHERE username='$user'";
    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_assoc($result);
        $name = $row["name"];
        $email = $row["email"];
        $nic = $row["nic"];
        $telephone = $row["telephone"];
        $spec = $row["speciality"];
        $uname = $row["username"];
        $id = $row["id"];

        // Split the name into first name and last name
        $nameParts = explode(" ", $name, 2);
        $fname = $nameParts[0];
        $lname = isset($nameParts[1]) ? $nameParts[1] : '';

        echo '<form action="addDoctor.php" method="post" class="formeditdoc">
            <label for="">
                <h1>Edit Doctor Details.</h1>
            </label>
            <h4>Doctor ID ('.$id.')</h4>
            <div class="Editdoc">
                <div>
                    <label for="Email">Email:</label><br>
                    <input type="email" required name="email" maxlength="50" placeholder="fill your email here"
                        class="inpSetAcount" value="' . $email . '"><br>
                    <label for="Name">FName:</label><br>
                    <input type="text" required name="Fname" placeholder="your first name here" maxlength="20"
                        class="inpSetAcount" value="' . $fname . '"><br>
                    <label for="Name">LName:</label><br>
                    <input type="text" required name="Lname" placeholder="your last name here" maxlength="20"
                        class="inpSetAcount" value="' . $lname . '"><br>
                    <label for="nic">NIC:</label><br>
                    <input type="text" name="NIC" placeholder="your nic here" maxlength="50" class="inpSetAcount"
                        value="' . $nic . '"><br>
                    <label for="Name">User Name:</label><br>
                    <input type="text" required name="userName" placeholder="your user name here" maxlength="20"
                        class="inpSetAcount" value="' . $uname . '"><br>
                </div>
                <div>
                    <label for="Telephone">Telephone:</label><br>
                    <input type="text" name="Telephone" placeholder="your Telephone here" maxlength="13"
                        class="inpSetAcount" value="' . $telephone . '"><br>
                    <label for="Choose specialties">Choose specialties:</label><br>
                    <select name="specialties" id="speciality" class="inpSetAcount">';

                    // Fetch specialties from the doctor table
                    $sql = "SELECT DISTINCT speciality FROM doctor";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["speciality"] . "'>" . $row["speciality"] . "</option>";
                        }
                    }

                    echo '</select><br>
                    <label for="Password">Password:</label><br>
                    <input type="password" required name="password" placeholder="your password here" maxlength="255"
                        class="inpSetAcount"><br>
                    <label for="Conform Password">Conform Password:</label><br>
                    <input type="password" name="ConformPassword" placeholder="Conform Password here" maxlength="255" required
                        class="inpSetAcount"><br>
                    <input type="reset" value="Reset" class="btnSetAcount"> <input type="submit" value="Save" name="submit"
                        class="btnSetAcount"><br>
                    <button class="btnSetAcount"><a href="setting.php">Back</a></button><br>
                </div>
            </div>
        </form>';
    } else {
        echo "Error fetching doctor details.";
    }

    $conn->close();
    ?>
</body>
</html>
