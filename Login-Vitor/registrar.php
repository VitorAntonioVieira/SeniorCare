<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senior_care";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificar se os dados foram enviados pelo formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validar se os campos não estão vazios
    if (empty($nome) || empty($email) || empty($senha)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    // Hash da senha para maior segurança
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO usuario (Nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senhaHash);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
        header("Location: ./index.php");
    } else {
        echo "Erro ao cadastrar usuário: " . $stmt->error;
    }

    // Fechar a conexão
    $stmt->close();
    $conn->close();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Login - SeniorCare</title>
</head>
<body>
    <div class="container">
        <img id="logo_img" src="../assets/seniorcarelogo.png" alt="Logo">
        <h1 class="title" ><span>Cadastre-se</span></h1>
        <?php if (isset($erro)) { echo "<p class='error'>$erro</p>"; } ?>
        <form action="" method="post" class="form">
            <label for="username">Nome</label>
            <input type="text" name="nome" id="username" required>
            <label for="password">Email</label>
            <input type="text" name="email" id="password" required>
            <label for="username">Senha</label>
            <input type="text" name="senha" id="username" required>
            <input id="login_btn" type="submit" value="Cadastrar">
        </form>
        <span id="or_label" >ou</span>
        <a id="signin_btn" href="./index.php">Acesse sua conta</a>
    </div>
</body>
</html>