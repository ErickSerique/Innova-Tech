<?php
// Iniciar a sessão
session_start();

// Incluir o arquivo de conexão
include './db_connect.php';

// Verifica se o método é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Sanitização de entrada
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $senha = trim($_POST['senha']);

        // Validação do email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Formato de email inválido.";
            exit();
        }

        // Preparar a consulta SQL
        $sql = "SELECT senha FROM usuario WHERE email = :email";
        
        // Preparar o statement
        $stmt = $pdo->prepare($sql);
        
        // Executar o statement
        $stmt->execute([':email' => $email]);

        // Verificar se o usuário foi encontrado
        if ($row = $stmt->fetch()) {
            // Verificar a senha
            if (password_verify($senha, $row['senha'])) {
                // Login bem-sucedido
                $_SESSION['email'] = $email; // Armazena o email na sessão
                header('Location: pagina_principal.php'); // Redireciona para a página principal
                exit(); // Para garantir que o script seja encerrado após o redirecionamento
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Nenhum usuário encontrado com esse email.";
        }
    } catch (PDOException $e) {
        echo "Erro ao consultar o banco de dados: " . $e->getMessage();
    }
}
?>