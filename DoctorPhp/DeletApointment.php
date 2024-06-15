<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="cancelApoin">
            <?php
            include("connection.php");
            if (isset($_POST['btnDletAcount']) && isset($_POST['confirm']) && $_POST['confirm'] == 'yes') {
                $patientName = $_POST['name'];
                $appointmentNumber = $_POST['appointmentNumber'];

                $query = "DELETE FROM appointment WHERE `Patient name` = ? AND `Number` = ?";
                $statement = $connection->prepare($query);
                $statement->bind_param("ss", $patientName, $appointmentNumber);

                if ($statement->execute()) {
                    echo "Record deleted successfully.";
                } else {
                    echo "Error deleting record: " . $statement->error;
                }
                $statement->close();
            } else {
                $query = "SELECT `appoid`, `pid`, `apponum`, `scheduleid`, `appodate` FROM `appointment` WHERE `Patient name` = ? AND `Number` = ?";
                $statement = $connection->prepare($query);
                $statement->bind_param("ss", $patientName, $appointmentNumber);

                if ($statement->execute()) {
                    $result = $statement->get_result();
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo "Appointment ID: " . $row['appoid'] . "<br>";
                        echo "Patient ID: " . $row['pid'] . "<br>";
                        echo "Appointment Number: " . $row['apponum'] . "<br>";
                        echo "Schedule ID: " . $row['scheduleid'] . "<br>";
                        echo "Appointment Date: " . $row['appodate'] . "<br>";
                    } else {
                        echo "No records found.";
                    }
                } else {
                    echo "Error retrieving record: " . $statement->error;
                }
                $statement->close();
            }
            ?>
            <div class="buton" onclick="hidCancelApointment()">
                &times;
            </div>
            <label for="Are you sure?">Are you sure?</label><br>
            <label for="You want to delete this record(Test Doctor).">You want to delete this record.</label><br>
            <label for="Patient Name:">Patient Name:</label>
            <input type="text" name="name" readonly><br>
            <label for="Appointment number">Appointment number</label>
            <input type="text" name="appointmentNumber" readonly><br>
            <button class="btnDletAcount" name="confirm" value="yes">Yes</button>
            <button class="btnDletAcount" onclick="hidCancelApointment()">No</button><br>
        </div>
    </section>
</body>
</html>