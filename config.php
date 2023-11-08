<?php

// Database host
$host = "localhost"; // e.g., "localhost"

// Database username
$username = "root";

// Database password
$password = "";

// Database name
$database = "apexrim";

// Create a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$url = "http://localhost";

?>