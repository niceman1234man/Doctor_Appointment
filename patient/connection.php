<?php
$servername="localhost";
$user="root";
$pass="";
$Db="GroupProject";
try{
    $conn=mysqli_connect($servername,$user,$pass,$Db);
    
}
catch (mysqli_sql_exception $e) {
   
    echo "Error: " . $e->getMessage();
}
 

?>
