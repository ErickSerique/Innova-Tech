<?php
$servername = "localhost";
$username = "root";  // Your MySQL username
$password = "";      // Your MySQL password
$dbname = "innova_db";  // Your database name

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        throw new Exception("Conexão falhou: " . $conn->connect_error);
    }

    // Set charset to ensure proper handling of special characters
    $conn->set_charset("utf8mb4");

} catch (Exception $e) {
    die("Erro de conexão ao banco de dados " . $e->getMessage());
}
?>