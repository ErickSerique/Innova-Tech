<?php
include 'db_connect.php';  // Conexão com o banco

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $empresa = $_POST['empresa'];
    $mensagem = $_POST['mensagem'];

    // Preparar e executar a query
    $stmt = $conn->prepare("INSERT INTO mensagem_suporte (nome, email, telefone, empresa, mensagem) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $nome, $email, $telefone, $empresa, $mensagem);

    if ($stmt->execute()) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
