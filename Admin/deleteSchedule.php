<?php
include("connection.php");
$id = $_POST['id'];

$sql = "DELETE FROM session WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "Session deleted successfully";
} else {
    echo "Error deleting Sesion: " . mysqli_error($conn);
}
mysqli_close($conn);
?>