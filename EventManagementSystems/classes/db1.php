<?php
$servername = "localhost";
$username = "root";
$password = "Saheedha3";
$dbname = "Myproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
