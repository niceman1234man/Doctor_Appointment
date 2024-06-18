<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="Book.css">
</head>
<body>


<div class="popUp" id="popUp">
        <p>Are You Sure You Want to Delete?</p>
        <div class="buttons">
          <button name="yes" onclick="Yes()" id="yes">Yes</button>
          <button onclick="No()" id="no">No</button>
        </div>
      </div>


 
      <?php
  include("connection.php");

  if (isset($_GET["value"])) {
    $values = explode(',', $_GET['value']);
    $numappoint = $values[0];
    $scheduleid = $values[1];

    if (isset($_GET["num"])) {
      $sql = "DELETE FROM Book WHERE scheduleid = '$scheduleid' AND numappoint = '$numappoint'";
      if (mysqli_query($conn, $sql)) {
        header("location:Book.php");
        exit();
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
    }
  }
?> 
<script src="Book.js"></script>
</body>
</html>


