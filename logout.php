<?php
// Inicia a sessão
session_start();

// Destroi todas as variáveis de sessão
session_unset();

// Destrói a sessão
session_destroy();

// Redireciona para a página inicial ou de login
header("Location: index.html"); // ou "Location: Login-Vitor/index.php" caso deseje redirecionar para a página de login
exit();
?>
