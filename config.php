<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "gegonu";

// Create connection
$conn = mysqli_connect($server, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

include 'migrations.php'; // Include the migrations file after successful connection
?>
