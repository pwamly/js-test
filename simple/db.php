<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'demo';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die('Database connection error: ' . mysqli_connect_error());
}
?>
