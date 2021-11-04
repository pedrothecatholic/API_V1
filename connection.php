<?php

$serverName = 'localhost';
$userName = 'root';
$password = 'bcd127';
$database = 'cadastro';

$conn = new mysqli($serverName, $userName, $password, $database);

// echo '<pre>';
// var_dump($conn);
// echo '</pre>';

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

return $conn;
