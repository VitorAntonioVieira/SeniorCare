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
    <link rel="stylesheet" href="style2.css"> <!-- Link para o CSS -->
    <link rel="stylesheet" href="styles.css"> <!-- Link para o CSS -->
</head>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title> Senior Care</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
        <img src="./seniorcarelogo.png" alt = "img"/>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="index.php">Início</a></li>
        <li><a href="#skill">Skills</a></li>
        <li><a href="pesquisa.php">Pesquisa</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
        <li><a href="cadastro.php"></a></li>
        
     
    </nav>
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
