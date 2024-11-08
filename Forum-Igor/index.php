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

$message = "";

// Inserir Pergunta
if (isset($_SESSION['usuario_id']) && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['titulo']) && !isset($_SESSION['pergunta_enviada'])) {
  $titulo = $_POST['titulo'];
  $descricao = $_POST['descricao'];
  $usuario_id = $_SESSION['usuario_id'];

  $sql = "INSERT INTO perguntas (titulo, descricao, usuario_id) VALUES ('$titulo', '$descricao', '$usuario_id')";

  if ($conn->query($sql) === TRUE) {
    $_SESSION['pergunta_enviada'] = true; // Marcar pergunta como enviada
    $message = "Pergunta enviada com sucesso!";
    echo "<script>alert('$message'); window.location.href = window.location.href;</script>";
    exit;
  } else {
    $message = "Erro: " . $sql . "<br>" . $conn->error;
  }
}

// Inserir Resposta
if (isset($_SESSION['usuario_id']) && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pergunta_id']) && !isset($_SESSION['resposta_enviada'])) {
  $descricao = $_POST['descricao'];
  $pergunta_id = $_POST['pergunta_id'];
  $usuario_id = $_SESSION['usuario_id'];

  $sql = "INSERT INTO respostas (descricao, pergunta_id, usuario_id) VALUES ('$descricao', '$pergunta_id', '$usuario_id')";

  if ($conn->query($sql) === TRUE) {
    $_SESSION['resposta_enviada'] = true; // Marcar resposta como enviada
    $message = "Resposta enviada com sucesso!";
    echo "<script>alert('$message'); window.location.href = window.location.href;</script>";
    exit;
  } else {
    $message = "Erro: " . $sql . "<br>" . $conn->error;
  }
}

// Limpar as flags de sessão após recarregar a página
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  unset($_SESSION['pergunta_enviada']);
  unset($_SESSION['resposta_enviada']);
}

// Exibir Perguntas e Respostas
$sql = "SELECT p.id, p.titulo, p.descricao, p.data_criacao, u.Nome, u.foto
        FROM perguntas p
        JOIN usuario u ON p.usuario_id = u.id
        ORDER BY p.data_criacao DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum</title>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../assets/icon.png"/>
    <link rel="stylesheet" href="../styles.css" />
    <title>Fórum | SeniorCare</title>
<body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <img src="../Lazer-Cibeli/seniorcarelogo.png" alt="img" />
        </div>
        
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="./index.php">Página Inicial</a></li>
        <li><a href="./Forum-Igor/index.php">Fórum</a></li>
        <li><a href="./Saúde-léoekaua/index.php">Saúde</a></li>
        <li><a href="./Lazer-Cibeli/index.php">Lazer</a></li>
        <li><a href="./Previdencia-rafaelerovida/index.php">Previdência</a></li>
        <div class="back">
<!-- Botão para voltar à página anterior -->
<button class="back-button"><a href="../index.php">voltar</a></button>
</div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </ul>
      </nav>
    <style>

@import url("https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap");

:root {
  --primary-color: #219b6a;
  --primary-color-dark:#219b6a
  --text-dark: #219b6a;
  --text-light: #737373;
  --extra-light: #f3f4f6;
  --white: #ffffff;
  --max-width: 1200px;
}

        body {
            font-family: Arial, sans-serif;
            background-color: #e9f5e9;
            padding: 20px;
        }
        .forum {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
        }
        nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #219b6a;
    padding: 15px 20px;
    position: relative;
}

.nav__header .nav__logo img {
    width: 150px;
    height: auto;
}

.nav__links {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav__links li {
    margin-left: 20px;
}

.nav__links a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    padding: 10px;
    display: block;
}

.nav__links a:hover {
    background-color: #68d69d;
    border-radius: 5px;
}

.nav__menu__btn {
    display: none;
    cursor: pointer;
    font-size: 24px;
    color: white;
}

.back {
    position: absolute;
    top: 15px;
    left: 15px;
}

.back-button {
    background-color: #219b6a;
    color: white;
    padding: 10px 20px;
    border-radius: 5rem;
    font-size: 1rem;
    text-decoration: none;
    border: none;
    cursor: pointer;
}

.back-button:hover {
    background-color: #68d69d;
}

/* Menu Responsivo - Mostra no mobile */
@media screen and (max-width: 768px) {
    .nav__links {
        display: none;
        width: 100%;
        flex-direction: column;
        background-color: #219b6a;
        position: absolute;
        top: 70px;
        left: 0;
        padding: 10px;
    }

    .nav__links.active {
        display: flex;
    }

    .nav__menu__btn {
        display: block;
    }

    .nav__links li {
        margin-left: 0;
        padding: 10px 0;
        text-align: center;
    }
}

/* Estilos gerais */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #e9f5e9;
}

a {
    text-decoration: none;
    color: inherit;
}

button {
    cursor: pointer;
}
        .pergunta, .resposta {
            background-color: #fff;
            margin: 15px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: flex-start;
            flex-direction: column;
        }
        .pergunta h3, .resposta h4 {
            font-size: 18px;
            margin: 0;
        }
        .pergunta p, .resposta p {
            font-size: 14px;
            margin: 5px 0;
        }
        .foto-perfil {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }
        .post-content {
            display: flex;
            align-items: flex-start;
        }
        form {
            margin: 20px 0;
        }
        form input, form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #45a049;
        }

        .back-button {
            padding: 0.75rem 1.5rem;
            outline: none;
            border: none;
            font-size: 1rem;
            white-space: nowrap;
            color: white;
            background-color: #219b6a; 
            border-radius: 5rem;
            transition: 0.3s;
            cursor: pointer;
            text-decoration: none;
        }

        button{
            appearance: auto;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    font-variant-alternates: ;
    font-variant-position: ;
    font-weight: ;
    font-stretch: ;
    font-size: ;
    font-family: ;
    font-optical-sizing: ;
    font-size-adjust: ;
    font-kerning: ;
    font-feature-settings: ;
    font-variation-settings: ;
    text-rendering: auto;
    color: buttontext;
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    box-sizing: border-box;
    background-color: buttonface;
    margin: 0em;
    padding-block: 1px;
    padding-inline: 6px;
    border-width: 2px;
    border-style: outset;
    border-color: buttonborder;
    border-image: initial;
        }

        a{
            text-decoration: none;
            color: #f3f4f6;
        }

            .back-button:hover {
     background-color: #68d69d;
}
        


    </style>
</head>
<body>


<div class="forum">
    <?php if (isset($_SESSION['usuario_id'])): ?>
        <h2>Enviar uma nova publicação</h2>
        <form action="" method="POST">
            <input type="text" name="titulo" placeholder="Título da pergunta" required>
            <textarea name="descricao" placeholder="Descrição da pergunta" required></textarea>
            <button type="submit">Enviar dúvida</button>
        </form>
    <?php endif; ?>

    <h2>Publicações Recentes</h2>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='pergunta'>";
            echo "<div class='post-content'>";
            echo "<img src='" . $row['foto'] . "' alt='Foto de " . $row['Nome'] . "' class='foto-perfil'>";
            echo "<div>";
            echo "<h3>" . $row['titulo'] . "</h3>";
            echo "<p>" . $row['descricao'] . "</p>";
            echo "<p><small>Enviado por: " . $row['Nome'] . " em " . $row['data_criacao'] . "</small></p>";
            echo "</div></div>";

            // Exibir respostas relacionadas
            $pergunta_id = $row['id'];
            $sql_resposta = "SELECT r.descricao, u.Nome, u.foto, r.data_criacao
                             FROM respostas r
                             JOIN usuario u ON r.usuario_id = u.id
                             WHERE r.pergunta_id = '$pergunta_id'
                             ORDER BY r.data_criacao ASC";
            $result_resposta = $conn->query($sql_resposta);

            if ($result_resposta->num_rows > 0) {
                echo "<h4>Respostas:</h4>";
                while($resposta = $result_resposta->fetch_assoc()) {
                    echo "<div class='resposta'>";
                    echo "<div class='post-content'>";
                    echo "<img src='" . $resposta['foto'] . "' alt='Foto de " . $resposta['Nome'] . "' class='foto-perfil'>";
                    echo "<div>";
                    echo "<p>" . $resposta['descricao'] . "</p>";
                    echo "<p><small>Respondido por: " . $resposta['Nome'] . " em " . $resposta['data_criacao'] . "</small></p>";
                    echo "</div></div>";
                    echo "</div>";
                }
            } else {
                echo "<p>Sem respostas ainda.</p>";
            }

            // Formulário para adicionar resposta apenas se o usuário estiver logado
            if (isset($_SESSION['usuario_id'])) {
                echo "<h4>Adicionar Resposta</h4>";
                echo "<form action='' method='POST'>";
                echo "<textarea name='descricao' placeholder='Escreva sua resposta' required></textarea>";
                echo "<input type='hidden' name='pergunta_id' value='$pergunta_id'>";
                echo "<button type='submit'>Enviar resposta</button>";
                echo "</form>";
            }
            
            echo "</div>";
        }
    } else {
        echo "<p>Nenhuma pergunta encontrada.</p>";
    }
    ?>
</div>

</body>
</html>

<?php
// Fechar conexão
$conn->close();
?>
