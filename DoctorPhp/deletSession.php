


<?php
session_start();
if (isset($_SESSION["uname"])) {
    $user = $_SESSION["uname"];
} else {
    echo "Session not started or user not logged in.";
    exit;
}
include("../connection.php");
$message = "";
$err = "";

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Add confirmation dialog
    if(isset($_POST['confirm'])) {
        $delete_query = "DELETE FROM session WHERE id = '$id'";
        if (mysqli_query($conn, $delete_query)) {
            $message = "Session deleted successfully";
        } else {
            $err = "Error deleting session: " . mysqli_error($conn);
        }
    } else {
        // Display confirmation dialog
        echo '<center>
        <div style="height: 40%; width: 20%; position: absolute; top: 30%; left: 40%;border: 1px solid black;border-radius: 5px;">
            <h1>Are you sure you want to delete this session?</h1>
            <form method="post">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="confirm" value="1">
                <button style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;">Confirm</button>
                <a href="session.php" style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;">Cancel</a>
            </form>
        </div>
        </center>';
        return;
    }

    echo '<center>
    <div style="height: 40%; width: 30%; position: absolute; top: 30%; left: 40%;border: 1px solid black;border-radius: 5px;">
        <h1>'.$message.$err.'</h1>
        <button style="text-decoration-style: none; padding: 2%; border-radius: 5%;background-color: rgb(102, 102, 156); color: white;"><a href="session.php">CLOSE</a></button>
    </div>
    </center>';
} else {
    echo "Session ID not provided.";
}
?>