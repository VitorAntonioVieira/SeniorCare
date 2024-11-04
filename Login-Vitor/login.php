<?php
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senior_care";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Consulta para verificar as credenciais
  $sql = "SELECT id, Nome FROM usuario WHERE email = '$email' AND senha = '$senha'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // Login bem-sucedido
    $row = $result->fetch_assoc();
    $_SESSION['usuario_id'] = $row['id'];
    $_SESSION['Nome'] = $row['Nome'];

    // Redireciona para a página principal do fórum
    header("Location: ../index.html");
    exit;
  } else {
    // Login falhou
    $erro = "E-mail ou senha incorretos.";
  }
}

// Fechar conexão
$conn->close();
?>