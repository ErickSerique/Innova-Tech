<?php
$host = 'localhost'; // Endereço do servidor do banco de dados
$db = 'innova_db'; // Nome do banco de dados
$user = 'root'; // Usuário do banco de dados
$pass = '1233'; // Senha do banco de dados
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Para exibir erros como exceções
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modo padrão de fetch
    PDO::ATTR_EMULATE_PREPARES => false, // Prepara as queries no lado do servidor
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}