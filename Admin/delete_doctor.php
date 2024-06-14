<?php
include("../connection.php");
$id = $_POST['id'];

$sql = "DELETE FROM doctor WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>