<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <title>Pesquisa de Cuidadores</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eaeaea;
            transition: background-color 0.3s;
        }
        header {
            background-color: white;
            color: white;
            padding: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .header-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #logoheader {
            width: 80px; /* Aumente o tamanho da logo */
            height: auto;
            margin-right: 15px;
        }

        .navbar {
            background-color: #f8f8f8; /* Cor de fundo da navbar */
            padding: 10px 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .navbar ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            margin: 0;
        }

        .navbar li {
            margin: 0 15px;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #4CAF50; /* Cor ao passar o mouse */
        }

        .search-container {
            text-align: center;
            margin: 20px 0;
        }

        #searchInput {
            width: 80%;
            padding: 10px;
            border-radius: 25px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: border 0.3s;
        }

        #searchInput:focus {
            border: 1px solid #4CAF50;
            outline: none;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 15px;
            padding: 20px;
            width: 300px;
            text-align: center;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin: 10px 0;
            transition: transform 0.3s;
        }

        .card img:hover {
            transform: scale(1.1);
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px;
            border-radius: 25px;
            cursor: pointer;
            flex: 1;
            margin: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .button:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
            animation: fadeIn 0.3s;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .modal-content img {
            display: block;
            margin: 0 auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        .alert-modal {
            display: none;
            position: fixed;
            z-index: 2;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
            padding-top: 60px;
        }

        .alert-content {
            background-color: #ffffff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            border-radius: 10px;
            text-align: center;
        }

        .alert-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .alert-button:hover {
            background-color: #45a049;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <header>
        <img id="logoheader" src="img/seniorcarelogo.png" alt="logo">
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="sobre.php">Sobre Nós</a></li>
            <li><a href="cuidadores.php">Cuidadores</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>

    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Buscar cuidadores..." onkeyup="filterCards()">
    </div>

    <div class="container">
        <?php
        $sql = "SELECT * FROM Cuidadores";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($cuidador = $result->fetch_assoc()) {
                echo "<div class='card'>
                        <img src='{$cuidador['foto']}' alt='Foto do Cuidador'>
                        <h3>{$cuidador['nome']}</h3>
                        <p>Telefone: {$cuidador['telefone']}</p>
                        <p>Valor: R$ {$cuidador['valor_servico']}</p>
                        <div class='button-container'>
                            <button class='button info' onclick='showModal(\"{$cuidador['nome']}\", \"{$cuidador['servicos_prestados']}\", \"{$cuidador['foto']}\")'>Informações</button>
                            <button class='button' onclick='showAlert(\"{$cuidador['nome']}\")'>Contratar</button>
                        </div>
                      </div>";
            }
        } else {
            echo "<p>Nenhum cuidador cadastrado.</p>";
        }
        ?>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" alt="Foto do Cuidador">
            <h2 id="modalName"></h2>
            <p id="modalInfo"></p>
        </div>
    </div>

    <!-- Modal de Alerta -->
    <div id="alertModal" class="alert-modal">
        <div class="alert-content">
            <p id="alertMessage"></p>
            <button class="alert-button" onclick="closeAlert()">OK</button>
        </div>
    </div>

    <script>
        function showModal(name, info, image) {
            document.getElementById("modalName").innerText = name;
            document.getElementById("modalInfo").innerText = info;
            document.getElementById("modalImage").src = image;
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        function showAlert(name) {
            document.getElementById("alertMessage").innerText = "Você deseja contratar " + name + "?";
            document.getElementById("alertModal").style.display = "block";
        }

        function closeAlert() {
            document.getElementById("alertModal").style.display = "none";
        }

        function filterCards() {
            const input = document.getElementById("searchInput");
            const filter = input.value.toLowerCase();
            const cards = document.querySelectorAll(".card");
            cards.forEach(card => {
                const name = card.querySelector("h3").innerText.toLowerCase();
                card.style.display = name.includes(filter) ? "" : "none";
            });
        }
    </script>
</body>
</html>
