<?php
include 'db_connect.php';  // Conexão com o banco

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $assunto = mysqli_real_escape_string($conn, $_POST['assunto']);
    $mensagem = mysqli_real_escape_string($conn, $_POST['mensagem']);

    // Preparar e executar a query usando mysqli
    $stmt = $conn->prepare("INSERT INTO mensagem_suporte (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("ssss", $nome, $email, $assunto, $mensagem);

        if ($stmt->execute()) {
            echo "Mensagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar a mensagem: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro na preparação do statement: " . $conn->error;
    }
}

mysqli_close($conn);
?>
