<?php
include("../connection.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $delete_query = "DELETE FROM session WHERE id = '$id'";
    if (mysqli_query($conn, $delete_query)) {
        echo "Session deleted successfully";
    } else {
        echo "Error deleting session: " . mysqli_error($conn);
    }
} else {
    echo "Session ID not provided.";
}
?>