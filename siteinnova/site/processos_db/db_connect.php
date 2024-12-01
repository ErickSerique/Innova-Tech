<?php
// Database connection configuration
$servername = 'localhost';
$db = 'innova_db';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

// Create a mysqli connection
$conn = mysqli_connect($servername, $db, $username, $password, $charset);

// Check connection
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// PDO Connection setup
try {
    $dsn = "mysql:host={$servername};dbname={$db};charset={$charset}";
    $user = $username;
    $pass = $password;
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
} catch (PDOException $e) {
    die("Erro ao configurar conexão PDO: " . $e->getMessage());
}
?>