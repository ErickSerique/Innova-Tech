<?php
// Incluir o arquivo de conexão
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Sanitização de entrada
        $nome = filter_var(trim($_POST['nome']), FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $senha = trim($_POST['senha']);

        // Verifica se o email é válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Formato de email inválido.";
            exit();
        }

        // Hashing da senha
        $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

        // Preparar a query usando PDO
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
        
        // Preparar o statement
        $stmt = $pdo->prepare($sql);
        
        // Executar o statement com os valores
        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $senha_hashed
        ]);

        echo "Registro bem-sucedido!";
    } catch (PDOException $e) {
        // Tratamento de erros específicos de duplicação de email
        if ($e->getCode() == '23000') { // Código de erro para violação de restrição única
            echo "Este email já está cadastrado.";
        } else {
            echo "Erro ao registrar: " . $e->getMessage();
        }
    }
}
?>