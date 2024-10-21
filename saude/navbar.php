<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .navbar {
            background-color: #4CAF50; /* Cor de fundo verde */
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Sombra */
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #3e8e41; /* Cor de fundo ao passar o mouse */
        }

        .navbar a.active {
            background-color: #2c662d; /* Cor diferente para o link ativo */
            color: white;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="pesquisa.php" class="active">Pesquisa de Cuidadores</a>
    <a href="cadastro.php">Cadastro de Cuidadores</a>
    <a href="sobre.php">Sobre</a>
</div>

</body>
</html>
