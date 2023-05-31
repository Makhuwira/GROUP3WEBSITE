<?php
error_reporting(0);
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "group_3_assets";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


?>