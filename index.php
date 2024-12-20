<?php
session_start();


$host = 'localhost'; 
$dbname = 'senior_care'; 
$username = 'root';
$password = ''; // S

$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>

<!DOCTYPE html>
<html lang="en">
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
    <link rel="shortcut icon" type="image/jpg" href="assets/icon.png"/>
    <title> Senior Care</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <img src="assets/seniorcarelogo.png" alt="img" />
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="index.php">Página Inicial</a></li>
        <li><a href="./Forum-Igor/index.php">Fórum</a></li>
        <li><a href="./Saúde-léoekaua/index.php">Saúde</a></li>
        <li><a href="./Lazer-Cibeli/index.php">Lazer</a></li>
        <li><a href="./Previdencia-rafaelerovida/index.php">Previdência</a></li>
        <li><a href="Login-Vitor/index.php">Login</a></li>
      </ul>
      <?php if (!isset($_SESSION['usuario_id'])): ?>

    <?php endif; ?>
  </ul>
  <div class="nav__btns">
    <?php if (!isset($_SESSION['usuario_id'])): ?>
      <button class="btn"><a href="Login-Vitor/index.php">Login</a></button>
    <?php else: ?>
      <button class="btn"><a href="logout.php">Logout</a></button>
    <?php endif; ?>
    </nav>  

    <header id="home">
      <div class="header__container">
        <div class="header__content">
          
          <h1>Bem-vindo ao <span>Senior Care </span></h1>
          <div class="header__btns">
            <button class="btn">Saiba mais</button>
            <a href="#">
              
            </a>
          </div>
        </div>
        <div class="header__image">
          <img src="assets/img.png" alt="header" />
        </div>
      </div>
    </header>

    <section class="section__container showcase__container" id="package">
      <div class="showcase__image">
        <img src="./assets/fotinha5.jpg" alt="showcase" />
      </div>
      <div class="showcase__content">
        <h4> VIVER COM QUALIDADE</h4>
        <p>
          Envolva-se em um estilo de vida saudável e enriquecedor com nossas dicas e recursos. O bem-estar da pessoa idosa vai além da saúde física, abrangendo também o equilíbrio emocional, a alimentação saudável e a manutenção de relações sociais. Nosso objetivo é promover uma vida plena, onde cada dia é vivido com alegria e saúde, proporcionando segurança e conforto durante a terceira idade.
        </p>
        <p>
          Oferecemos orientações sobre atividades físicas, cuidados com a saúde mental, alimentação e até mesmo viagens e lazer, tudo voltado para garantir uma vida mais ativa e feliz. Com nossos recursos, buscamos inspirar e apoiar a pessoa idosa a viver de forma independente e saudável.
        </p>
        
        </div>
      </div>
    </section>
    

    <section class="section__container journey__container" id="tour">
      <h2 class="section__header"> Qualidade de Vida e Saúde</h2>
      <p class="section__description">
        Descubra formas de promover o bem-estar e a qualidade de vida na terceira idade, com dicas de saúde, lazer e autocuidado.
      </p>
      <div class="journey__grid">
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-heart-pulse-line"></i></span>
            <h4>Cuidados com a Saúde</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-heart-pulse-line"></i></span>
            <h4>Dicas para um Envelhecimento Saudável</h4>
            <p>
              Aprenda sobre hábitos que fortalecem a saúde na terceira idade, como alimentação balanceada, atividade física e acompanhamento médico regular.
            </p>
          </div>
        </div>
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-walk-line"></i></span>
            <h4>Atividades de Lazer</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-walk-line"></i></span>
            <h4>Exercícios e Atividades Recreativas</h4>
            <p>
              Conheça atividades físicas e recreativas adaptadas, que ajudam a melhorar a mobilidade e o bem-estar físico e mental.
            </p>
          </div>
        </div>
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-emotion-happy-line"></i></span>
            <h4>Conexões Sociais</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-emotion-happy-line"></i></span>
            <h4>Importância dos Laços Sociais</h4>
            <p>
              Saiba como manter e fortalecer as relações sociais, promovendo um envelhecimento mais feliz e menos solitário.
            </p>
          </div>
        </div>
      </div>
    </section>
    

    <section class="portfolio__container" id="portfolio">
      <div class="portfolio__content">
       
        <h2 class="section__header">
        Bem-Estar <span>da Pessoa Idosa</span>
        </h2>
        <p class="section__description">
        Um espaço dedicado ao bem-estar da pessoa idosa, onde você encontra tudo o que precisa para se manter informado e atualizado
        </p>
    
      </div>
      <div class="portfolio__image__wrapper">
        <div class="portfolio__image">
          <img src="./assets/fotinha.jpg" alt="portfolio" />
          <img src="./assets/fotinha2.jpg" alt="portfolio" />
          <img src="./assets/fotinha4.jpg" alt="portfolio" />
          <img src="./assets/fotinha5.jpg" alt="portfolio" />
        </div>
      </div>
    </section>

    <section class="find-caregiver__container" id="find-caregiver">
  <div class="section__header">
    <h2>Encontre um Cuidador de Idosos</h2>
    <p>
      Se você está procurando cuidadores especializados para proporcionar um cuidado de qualidade e seguro, clique no botão abaixo para encontrar profissionais qualificados.
    </p>
  </div>
  <div class="cansada">
    <a href="./pesquisa.php" class="btn">Encontrar Cuidador</a>
    <a href="#" class="btn" id="openModalBtn">Cadastre-se como cuidador</a>
  </div>
</section>
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="closeModalBtn">&times;</span>
        <h2>Cadastro de Cuidador</h2>
        <!-- Formulário de cadastro -->
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" required>

            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" required>

            <label for="valor_servico">Valor do Serviço:</label>
            <input type="text" name="valor_servico" id="valor_servico" required>

            <label for="servicos_prestados">Serviços Prestados:</label>
            <textarea name="servicos_prestados" id="servicos_prestados" required></textarea>

            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" required>

            <button type="submit" class="btn">Cadastrar</button>
        </form>
    </div>
</div>
<script>
    // Obtém o modal
    var modal = document.getElementById('modal');
    var openModalBtn = document.getElementById('openModalBtn');
    var closeModalBtn = document.getElementById('closeModalBtn');

    // Quando o botão "Cadastre-se como cuidador" é clicado, abre o modal
    openModalBtn.onclick = function() {
        modal.style.display = "block";
    }

    // Quando o "X" é clicado, fecha o modal
    closeModalBtn.onclick = function() {
        modal.style.display = "none";
    }

    // Quando o usuário clica fora do modal, fecha o modal
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>

<?php
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
    
<footer id="contact">
  <div class="section__container footer__container"><div class="footer__logo">
        <a href="#" class="logo">
          <img src="./assets/seniorcarelogo.png" alt="SeniorCare Logo" />
        </a>
      </div>
  <div class="footer__col">
    
  </div>

  <div class="footer__col">
    <h4>SESI Caçapava</h4>
    <ul class="footer__links">
      <li>
        <a href="#">
          <span><i class="ri-phone-fill"></i></span> (12) 3653-1943
        </a>
      </li>
      <li>
        <a href="#">
          <span><i class="ri-record-mail-line"></i></span> ce207@sesisp.org.br
        </a>
      </li>
      <li>
        <a href="#">
          <span><i class="ri-map-pin-2-fill"></i></span> Caçapava, SP
        </a>
      </li>
    </ul>
  </div>

  <div class="footer__col">
    <h4>SENAI Félix Guisard</h4>
    <ul class="footer__links">
      <li>
        <a href="#">
          <span><i class="ri-phone-fill"></i></span> (12) 3609-5701
        </a>
      </li>
      <li>
        <a href="#">
          <span><i class="ri-record-mail-line"></i></span> senaitaubate@sp.senai.br
        </a>
      </li>
      <li>
        <a href="#">
          <span><i class="ri-map-pin-2-fill"></i></span> Taubaté, SP
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="footer__bar">
  Copyright © 2024 SeniorCare.
</div>
</footer>
