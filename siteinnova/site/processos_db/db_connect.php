<?php
$servername = 'localhost';
$db = 'innova_db';
$username = 'MySQL XAMPP';
$password = '0106@waterK';
$charset = 'utf8mb4';

$conn = mysqli_connect($servername, $db, $username, $password)
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
?>
