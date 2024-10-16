<?php
// Iniciar a sessão
session_start();

// Verifica se há uma sessão ativa
if (isset($_SESSION['email'])) {
    // Destruir a sessão
    session_unset(); // Remove todas as variáveis de sessão
    session_destroy(); // Destroi a sessão

    // Opcional: Redirecionar para a página de login ou página principal
    header('Location: login.html'); // Redireciona para a página de login
    exit(); // Para garantir que o script seja encerrado após o redirecionamento
} else {
    // Se não há sessão ativa, redirecionar para a página de login
    header('Location: login.html');
    exit();
}
?>