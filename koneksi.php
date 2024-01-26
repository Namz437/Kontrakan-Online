<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "loginkontrakan";

$mysqli = new mysqli($host, $user, $password, $database);

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
