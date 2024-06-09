<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "Hospital";

$connection = new mysqli($serverName, $userName, $password, $dbName);

if ($connection->connect_error) {
echo("sorry! unable to connect to database")
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";

$connection->close();
?>