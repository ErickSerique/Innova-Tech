<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $assunto = trim(filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING));
    $mensagem = trim(filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING));

    if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Formato de email inválido.";
        exit;
    }

    try {
        $stmt = $conn->prepare("INSERT INTO mensagem_suporte (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)");

        $stmt->bind_param("ssss", $nome, $email, $assunto, $mensagem);

        if ($stmt->execute()) {
            echo "Mensagem enviada com sucesso!";
        } else {
            throw new Exception("Erro ao enviar a mensagem: " . $stmt->error);
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    } finally {
        if (isset($stmt)) {
            $stmt->close();
        }
        if (isset($conn)) {
            $conn->close();
        }
    }
}
?>