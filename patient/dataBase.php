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
 include("../connection.php");

  if (isset($_GET["value"])) {
    $values = explode(',', $_GET['value']);
    $numappoint = $values[0];
    $scheduleid = $values[1];
                       
/*CREATE TABLE `session` (
  `title` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `num` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
 



CREATE TABLE `appointment` (
  `name` varchar(255) NOT NULL,
  `apo_num` int(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `apo_date` date NOT NULL,
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
 
*/

    if (isset($_GET["num"])) {
      $sql = "DELETE FROM appointment WHERE id = '$scheduleid' AND apo_num = '$numappoint'";
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


