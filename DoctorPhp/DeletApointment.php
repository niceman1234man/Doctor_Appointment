<?php
include("connection.php");

if (isset($_POST['btnDletAcount']) && isset($_POST['confirm']) && $_POST['confirm'] == 'yes') {
    $appointmentNumber = $_POST['appointmentNumber'];

    $query = "DELETE FROM `Apointmant` WHERE `Number` = ?";
    $statement = $connection->prepare($query);
    $statement->bind_param("s", $appointmentNumber);

    if ($statement->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $statement->error;
    }
    $statement->close();
} else {
    $appointmentNumber = isset($_POST['appointmentNumber']) ? $_POST['appointmentNumber'] : "";

    $query = "SELECT `Patient name`, `Number`, `Session Title`, `Session Date & Time`, `Appointment Date` 
             FROM `Apointmant` 
             WHERE `Number` = ?";
    $statement = $connection->prepare($query);
    $statement->bind_param("s", $appointmentNumber);

    if ($statement->execute()) {
        $result = $statement->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "Patient Name: " . $row["Patient name"] . "<br>";
            echo "Appointment Number: " . $row["Number"] . "<br>";
            echo "Session Title: " . $row["Session Title"] . "<br>";
            echo "Session Date & Time: " . $row["Session Date & Time"] . "<br>";
            echo "Appointment Date: " . $row["Appointment Date"] . "<br>";
        } else {
            echo "No records found.";
        }
    } else {
        echo "Error retrieving record: " . $statement->error;
    }
    $statement->close();
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delep Apointment</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">
</head>
<body>
    <section>
        <div class="cancelApoin">
            <div>
            <label for="Are you sure?">Are you sure?</label><br>
            <label for="You want to delete this record(Test Doctor).">You want to delete this record.</label><br>
            <label for="Appointment number">Appointment number</label>
            <input type="text" name="appointmentNumber" value="<?php echo $appointmentNumber; ?>" readonly><br>
            <button class="btnDletAcount" name="confirm" value="yes">Yes</button>
            <button class="btnDletAcount" ><a href="apointment.php">No</a></button><br>
            </div>
        </div>
    </section>
</body>
</html>