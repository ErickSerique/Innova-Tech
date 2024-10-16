<?php
// Iniciar a sessão
session_start();

// Parâmetros de conexão
$host = 'localhost'; // ou o nome do servidor
$db = 'innova_db'; // nome do banco de dados que você criou
$user = 'root'; // usuário padrão
$pass = ''; // senha padrão (Em branco caso não tenha senha)

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Conexão usando PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}

// Verifica se o método é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    
    try {
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