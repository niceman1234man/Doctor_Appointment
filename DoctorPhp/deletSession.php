<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delet session</title>
    <link rel="stylesheet" type="text/css" href="../DoctorCss/index.css">

</head>
<body>
<?php
include("connection.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the delete button was clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteSession"])) {
    $sessionTitle = $_POST["sessionTitle"];
    $scheduledDate = $_POST["scheduledDate"];

    // Prepare and execute the delete query
    $statement = $connection->prepare("DELETE FROM Sessions WHERE Title = ? AND `Date & Time` = ?");
    $statement->bind_param("ss", $sessionTitle, $scheduledDate);

    if ($statement->execute()) {
        echo "Session deleted successfully!";
    } else {
        echo "Error deleting session: " . $statement->error;
    }
    $statement->close();
} else {
    $sessionTitle = $_GET["sessionTitle"];
    $scheduledDate = $_GET["scheduledDate"];
    echo "<div class='cancelSessionDoc'>";
    echo "<div>";
    echo "    <label for='Are you sure?'>Are you sure?</label><br>";
    echo "    <label for='You want to delete this record(Test Doctor).'>You want to delete this record.</label><br>";
    echo "    <label for='Patient Name:'>Session Title</label><input type='text' name='sessionTitle' readonly value='$sessionTitle'><br>";
    echo "    <label for='Appointment number'>Sheduled Date & Time</label><input type='text' name='scheduledDate' readonly value='$scheduledDate'><br>";
    echo "    <form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
    echo "        <input type='hidden' name='deleteSession' value='1'>";
    echo "        <button class='btnDletAcount' type='submit'>Yes</button>";
    echo "    </form>";
    echo "    <button class='btnDletAcount' onclick='hidCancelSesion()'>No</button><br>";
    echo "</div>";
    echo "</div>";
}
$connection->close();
?>
</body>
</html>