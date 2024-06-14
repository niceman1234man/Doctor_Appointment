<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "Hospital";

$connection = new mysqli($serverName, $userName, $password, $dbName);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>