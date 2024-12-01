<?php
// Incluir o arquivo de conexão
include 'db_connect.php';

try {
    // Estabelece a conexão com o banco de dados utilizando PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitização de entrada, isso significa que caracteres inválidos serão apagados.
    $nome = filter_var(trim($_POST['nome']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $senha = trim($_POST['senha']);

    // Verifica se o email é válido.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Formato de email inválido.";
        exit();
    }

    // Hashing da senha.
    $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

    // Preparar a query usando PDO.
    $sql = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
    
    try {
        // Preparar o statement.
        $stmt = $pdo->prepare($sql);
        
        // Executar o statement com os valores.
        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $senha_hashed
        ]);

        echo "Registro bem-sucedido!";
    } catch (PDOException $e) {
        echo "Erro ao registrar: " . $e->getMessage();
    }
}
?>
