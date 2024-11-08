<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senior_care";

// Criar conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificar se os dados foram enviados pelo formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validar se os campos não estão vazios
    if (empty($email) || empty($senha)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    // Consultar o banco de dados para encontrar o usuário
    $sql = "SELECT * FROM usuario WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar se o usuário foi encontrado
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verificar se a senha está correta
        if (password_verify($senha, $user['senha'])) {
            // Iniciar sessão e redirecionar para a página inicial
            session_start();
            $_SESSION['usuario'] = $user['Nome'];
            header("Location: ../index.html");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    // Fechar a conexão
    $stmt->close();
    $conn->close();
}
?>
