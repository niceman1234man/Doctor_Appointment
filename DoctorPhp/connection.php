<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "edoc";
$connection = new mysqli($serverName, $userName, $password, $dbName);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>