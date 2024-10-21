<?php
include 'db.php'; // Inclui a conexão com o banco de dados

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $valor_servico = $_POST['valor_servico'];
    $servicos_prestados = $_POST['servicos_prestados'];

    // Processa o upload da foto
    $foto = $_FILES['foto'];
    $foto_path = 'uploads/' . basename($foto['name']);

    // Move a foto para o diretório 'uploads'
    if (move_uploaded_file($foto['tmp_name'], $foto_path)) {
        // Insere os dados no banco de dados
        $sql = "INSERT INTO Cuidadores (nome, telefone, endereco, valor_servico, servicos_prestados, foto) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $nome, $telefone, $endereco, $valor_servico, $servicos_prestados, $foto_path);
        
        if ($stmt->execute()) {
            echo "<p>Cuidador cadastrado com sucesso!</p>";
        } else {
            echo "<p>Erro ao cadastrar o cuidador: " . $stmt->error . "</p>";
        }
        $stmt->close();
    } else {
        echo "<p>Erro ao fazer upload da foto.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cuidadores</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o CSS -->
</head>
<body>
    <h1>Cadastro de Cuidadores</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco">

        <label for="valor_servico">Valor do Serviço:</label>
        <input type="number" id="valor_servico" name="valor_servico" step="0.01" required>

        <label for="servicos_prestados">Serviços Prestados:</label>
        <textarea id="servicos_prestados" name="servicos_prestados"></textarea>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required>

        <input type="submit" value="Cadastrar Cuidador">
    </form>
</body>
</html>
