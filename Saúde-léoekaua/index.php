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
      <link rel="stylesheet" href="../Lazer-Cibeli/lazer.css" />
      <link rel="shortcut icon" type="image/jpg" href="../assets/icon.png"/>
      <title>Saúde dos Idosos | SeniorCare</title>
    </head>
    <body>
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <img src="../Lazer-Cibeli/seniorcarelogo.png" alt = "img"/>
            </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="../index.php">Página Inicial</a></li>
          <li><a href="../Forum-Igor/index.php">Fórum</a></li>
          <li><a href="./index.php">Saúde</a></li>
          <li><a href="../Lazer-Cibeli/index.php">Lazer</a></li>
          <li><a href="../Previdencia-rafaelerovida/index.php">Previdência</a></li>
          <li><a href="#">login</a></li>
        </ul>
        <div class="nav__btns">
          <button class="btn">login</button>
        </div>
      </nav>
      <header id="home" style="
    position: relative;
    padding: 0px 20px;
    color: #ffffff;
    background: url('./img/doente.jpg') no-repeat center center / cover;
  ">

  </header>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f9f1;
            color: #3d3d3d;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f9f1;
            color: #3d3d3d;
            margin: 0;
            padding: 0;
        }
        /* Botões */
        .btn-registrar {
            background-color: #97d9a0;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-registrar:hover {
            background-color: #7bb988;
        }
        /* Container principal */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        /* Seções */
        .section {
            display: flex;
            gap: 30px;
            align-items: flex-start;
            margin-bottom: 40px;
        }
        .section h2 {
            color: #558b6e;
            font-size: 28px;
            margin-bottom: 15px;
            flex: 1;
        }
        .section p {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
        }
        .section img {
            max-width: 450px;
            height: auto;
            border-radius: 8px;
        }
        /* Tabela */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table, .table th, .table td {
            border: 1px solid #d1d1d1;
        }
        .table th, .table td {
            padding: 12px;
            text-align: center;
            font-size: 16px;
        }
        .table th {
            background-color: #e3f2e1;
            font-weight: bold;
        }
        /* Rodapé */
        .footercontainer {
            background-color: white;
            padding: 30px 20px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            color: #3d3d3d;
            box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
        }
        .footer_logo img {
            height: 60px;
        }
        .footer__col h1, .footer__col h4 {
            color: #558b6e;
            font-size: 22px;
            margin-bottom: 12px;
        }
        .footer__col p {
            font-size: 14px;
            line-height: 1.6;
        }
        .footer__links {
            list-style: none;
            padding: 0;
        }
        .footer__links li {
            margin-bottom: 8px;
        }
        .footer__links a {
            color: #3d3d3d;
            text-decoration: none;
            font-size: 14px;
        }
        .footer__bar {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #3d3d3d;
        }
        /* Responsividade */
        @media (max-width: 768px) {
            .section {
                flex-direction: column;
                align-items: center;
            }
            .section img {
                max-width: 100%;
                margin-top: 20px;
            }
            .footercontainer {
                flex-direction: column;
                align-items: center;
            }
            .footer__col {
                margin-bottom: 20px;
                text-align: center;
            }
        }
        @import url("https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap");
:root {
  --primary-color: #5cb3a9;
  --primary-color-dark:#68d69d;
  --text-dark: #219b6a;
  --text-light: #737373;
  --extra-light: #f3f4f6;
  --white: #ffffff;
  --max-width: 1200px;
}header {
  margin-top: 0;
  padding-inline: 1rem;
  position: relative;
  isolation: isolate;
  overflow: hidden;
}
a{
color: #fff;
}
.review__card {
  padding: 1.5rem;
  max-width: 400px;
  border-radius: 1rem;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.05);
}
.header__container {
  display: grid;
  grid-template-columns:
    minmax(0, 1fr)
    repeat(5, minmax(0, calc(var(--max-width) / 5)))
    minmax(0, 1fr);
}
.header__content {
  grid-column: 2/4;
  padding-block: 8rem;
}
.header__content h1 {
  font-size: 4.5rem; /* maior para destaque */
  color: white;
  text-align: left;
}
.header__content h1 span {
  color: #449972;
}
.header__content p {
  font-size: 2rem;
  font-weight: 700;
  color: #ffff;
  text-align: left;
}
.header__btns {
  display: flex;
  justify-content: flex-start;
  gap: 1rem;
}
.header__btns .btn {
  padding: 1.5rem 3rem;
  font-size: 2rem;
}
.header__image {
  grid-column: 4/8;
  position: relative;
  isolation: isolate;
  height: 100%;
}
.header__image img {
  position: absolute;
  top: 2rem;
  left: 0;
  height: 100%;
  width: 100%;
}
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}
.section__header {
  margin-bottom: 9px;
  font-size: 2.5rem;
  font-weight: 700;
  color: #219b6a;
  text-align: center;
}
.section__description {
  max-width: 800px; /* Aumente conforme necessário */
  margin: 0 auto;
  color: var(--text-light);
  text-align: justify;
  line-height: 1.6; /* Melhor espaçamento entre linhas */
  padding: 10px; /* Espaçamento interno */
}


.btn {
  padding: 0.75rem 1.5rem;
  outline: none;
  border: none;
  font-size: 1rem;
  white-space: nowrap;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 5rem;
  transition: 0.3s;
  cursor: pointer;
}
.btn:hover {
  background-color: var(--primary-color-dark);
}
.logo {
  font-size: 1.75rem;
  font-weight: 800;
  color: var(--text-dark);
}
img {
  display: flex;
  width: 100%;
}
a {
  text-decoration: none;
  transition: 0.3s;
}
ul {
  list-style: none;
}
html,
body {
  scroll-behavior: smooth;
}
body {
  font-family: "DM Sans", sans-serif;
}
nav {
  position: fixed;
  isolation: isolate;
  top: 0;
  width: 100%;
  z-index: 9;
}
.nav__header {
  padding: 1rem;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: var(--primary-color);
}
.nav__logo .logo {
  font-size: 1.5rem;
  color: var(--white);
}
.nav__menu__btn {
  font-size: 1.5rem;
  color: var(--white);
  cursor: pointer;
}
.nav__links {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 2rem;
  background-color: var(--primary-color);
  transition: transform 0.5s;
  z-index: -1;
}
.nav__links.open {
  transform: translateY(100%);
}
.nav__links a {
  font-weight: 600;
  color: var(--white);
  white-space: nowrap;
}
.nav__links a:hover {
  color: var(--text-dark);
}
.nav__btns {
  display: none;
}
header {
  margin-top: 5rem;
  padding-inline: 1rem;
  position: relative;
  isolation: isolate;
  overflow: hidden;
}
header::before {
  position: absolute;
  content: "";
  height: 100%;
  width: calc(100% - 2rem);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-image: url("assets/fundoheader.jpg");
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  border-radius: 3rem;
  z-index: -1;
}
.header__container {
  display: grid;
}
.header__content {
  padding: 4rem 1rem;
}
.header__content p {
  margin-bottom: 5px;
  font-size: 1rem;
  font-weight: 600;
  color: var(--text-dark);
  text-align: center;
}
.header__content h1 {
  margin-bottom: 2rem;
  font-size: 4.5rem;
  font-weight: 600;
  color: #fff;
  line-height: 5.5rem;
  text-align: center;
}
.header__btns {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
}
.header__btns .btn {
  padding: 1rem 2rem;
}
.header__btns a {
  padding: 9px 13px;
  font-size: 1.5rem;
  color: var(--primary-color);
  background-color: var(--white);
  border-radius: 100%;
}
.header__btns a:hover {
  color: var(--white);
  background-color: var(--primary-color);
}
.destination__container :is(.section__header, .section__description) {
  text-align: left;
  margin-inline-start: unset;
}
.destination__grid {
  margin-top: 4rem;
  display: grid;
  gap: 2rem 1rem;
}
.destination__card img {
  border-radius: 1.5rem;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}
.destination__card__details {
  padding: 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
}
.destination__card__details h4 {
  margin-bottom: 5px;
  font-size: 1.2rem;
  font-weight: 600;
  columns: var(--text-dark);
}
.destination__card__details p {
  columns: var(--text-light);
}
.destination__rating {
  padding: 5px 10px;
  font-size: 0.9rem;
  white-space: nowrap;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 1rem;
  transition: 0.3s;
}
.destination__card:hover .destination__rating {
  background-color: var(--primary-color-dark);
}
.journey__grid {
  margin-top: 2rem;
  display: grid;
  gap: 0 1rem;
}
.journey__card {
  position: relative;
  isolation: isolate;
  padding-top: 4rem;
  overflow: hidden;
}
.journey__card__bg {
  padding: 2rem;
  background-color: var(--extra-light);
  border-top-right-radius: 1rem;
  border-top-left-radius: 1rem;
}
.journey__card__bg span {
  display: inline-block;
  margin-bottom: 4rem;
  font-size: 1.75rem;
  color: var(--primary-color);
}
.journey__card__bg h4 {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}
.journey__card__content {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 2rem;
  background-color: var(--primary-color);
  border-top-right-radius: 1rem;
  border-top-left-radius: 1rem;
  transition: 0.3s;
}
.journey__card:hover .journey__card__content {
  top: 0;
}
.journey__card__content span {
  display: inline-block;
  margin-bottom: 1rem;
  padding: 7px 9px;
  font-size: 1rem;
  color: var(--white);
  border: 2px solid var(--white);
  border-radius: 100%;
}
.journey__card__content h4 {
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--white);
}
.journey__card__content p {
  color: var(--extra-light);
}
footer {
  background-color: var(--extra-light);
}
.footer__container {
  display: grid;
  gap: 4rem 2rem;
}
.footer__col p {
  max-width: 300px;
  margin-block: 2rem;
  color: var(--text-light);
}
.footer__socials {
  display: flex;
  align-items: center;
  gap: 1rem;
  flex-wrap: wrap;
}
.footer__socials a {
  display: inline-block;
  padding: 7px 10px;
  font-size: 1.25rem;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 100%;
}
.footer__socials a:hover {
  background-color: var(--primary-color-dark);
}
.footer__col h4 {
  margin-bottom: 2rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}
.footer__links {
  display: grid;
  gap: 1rem;
}
.footer__links a {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--text-light);
}
.footer__links a:hover {
  color: var(--primary-color);
}
.footer__links a span {
  font-size: 1.25rem;
}
.footer__col form {
  display: grid;
  gap: 1rem;
}
.footer__col input {
  padding: 0.75rem;
  font-size: 1rem;
  color: var(--text-dark);
  background-color: var(--white);
  border: 1px solid var(--text-light);
  border-radius: 5px;
}
.footer__col input::placeholder {
  color: var(--text-light);
}
.footer__col .btn {
  border-radius: 5px;
}
.footer__bar {
  padding: 1rem;
  font-size: 0.9rem;
  color: var(--text-light);
  text-align: center;
}
@media (width > 540px) {
  .destination__grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .journey__grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .showcase__container {
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
  }
  .banner__container {
    grid-template-columns: repeat(2, 1fr);
  }
  .discover__grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .footer__container {
    grid-template-columns: repeat(2, 1fr);
  }
  .footer__col:last-child {
    grid-area: 2/1/3/2;
  }
}
@media (width > 768px) {
  nav {
    background-color: #fff;
    position: static;
    padding: 2rem 1rem;
    max-width: var(--max-width);
    margin-inline: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
  }
  .nav__header {
    flex: 1;
    padding: 0;
    background-color: transparent;
  }
  .nav__logo .logo {
    color: #fff;
  }
  .nav__menu__btn {
    display: none;
  }
  .nav__links {
    position: static;
    width: fit-content;
    padding: 0;
    flex-direction: row;
    background-color: transparent;
    transform: none !important;
  }
  .nav__links a {
    color: var(--text-dark);
  }
  .nav__links a:hover {
    color: var(--primary-color);
  }
  .nav__links li:last-child {
    display: none;
  }
  .nav__btns {
    flex: 1;
    display: flex;
    justify-content: flex-end;
  }
  .nav__btns button {
    padding: 0.75rem 2rem;
    background-color: var(--text-dark);
  }
  header {
    margin-top: 0;
  }
  .header__container {
    grid-template-columns:
      minmax(0, 1fr)
      repeat(5, minmax(0, calc(var(--max-width) / 5)))
      minmax(0, 1fr);
  }
  .header__content {
    grid-column: 2/4;
    padding-block: 8rem;
  }
  .header__content :is(p, h1) {
    text-align: left;
  }
  .showcase__container {
    grid-template-columns: repeat(3, 1fr);
  }
  .showcase__content {
    grid-column: 2/4;
  }
  .banner__container {
    grid-template-columns: repeat(3, 1fr);
  }
  .discover__grid {
    grid-template-columns: repeat(3, 1fr);
  }
  .footer__container {
    grid-template-columns: 2fr 1fr 1fr 1.5fr;
  }
  .footer__col:last-child {
    grid-area: unset;
  }
}
/* Ajuste para fontes e botões em dispositivos móveis */
@media (max-width: 540px) {
  .header__content h1 {
    font-size: 2.5rem;
    line-height: 3rem;
  }
  .header__btns .btn {
    font-size: 1rem;
    padding: 0.75rem 1.5rem;
  }
  .footer__container {
    gap: 2rem;
  }
  .footer__socials a {
    font-size: 1rem;
  }
}
        .btn-registrar {
            background-color: #97d9a0;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        .btn-registrar:hover {
            background-color: #7bb988;
        }
       
        .footercontainer {
            background-color: white;
            padding: 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            color: #3d3d3d;
        }
        .footer_logo img {
            height: 50px;
        }
        .footer__col h1, .footer__col h4 {
            color: #558b6e;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .footer__col p {
            font-size: 14px;
            line-height: 1.5;
        }
        .footer__links {
            list-style: none;
            padding: 0;
        }
        .footer__links li {
            margin-bottom: 5px;
        }
        .footer__links a {
            color: #3d3d3d;
            text-decoration: none;
        }
        .footer__bar {
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            color: #3d3d3d;
        }
    </style>


</head>

<body>

<div class="container">
    <div class="section">
        <div>
            <h2>Doenças Comuns em Idosos</h2>
            <p>À medida que envelhecemos, o corpo passa por diversas mudanças, o que pode aumentar o risco de várias doenças. Conheça algumas das condições mais comuns entre os idosos. É fundamental que os cuidadores e familiares estejam cientes desses problemas para garantir um acompanhamento adequado e uma qualidade de vida melhor. A prevenção e o tratamento precoce podem fazer uma grande diferença no bem-estar dos idosos.</p>
        </div>
    </div>
    <div class="section">
        <div>
            <h2>Alzheimer</h2>
            <p>O Alzheimer é uma doença neurodegenerativa que afeta a memória, o pensamento e comportamento. Os sintomas geralmente se desenvolvem lentamente e pioram com o tempo, interferindo nas atividades diárias do paciente. É a forma mais comum de demência entre os idosos. O tratamento pode incluir medicamentos para ajudar a controlar os sintomas, mas não existe cura. Além disso, atividades cognitivas e um ambiente familiar acolhedor são importantes para o paciente.</p>
        </div>
        <img src="img/alzheimer.png" alt="Imagem sobre alzheimer">
    </div>
    <div class="section">
        <div>
            <h2>Artrite</h2>
            <p>A artrite é uma condição que causa inflamação nas articulações, resultando em dor, desconforto e inchaço. É comum entre os idosos e pode afetar a mobilidade, tornando atividades cotidianas desafiadoras. Existem vários tipos de artrite, como a osteoartrite e a artrite reumatoide, que podem exigir diferentes abordagens de tratamento. Fisioterapia, medicamentos e mudanças na dieta podem ajudar a aliviar os sintomas e melhorar a qualidade de vida.</p>
        </div>
        <img src="img/artrite.png" alt="Imagem sobre tempo de artrite">
    </div>
    <div class="section">
        <div>
            <h2>Diabetes Tipo 2</h2>
            <p>O diabetes tipo 2 é uma condição crônica que afeta a maneira como o corpo processa o açúcar no sangue. É comum em idosos devido a fatores como resistência à insulina e estilo de vida. O controle da alimentação e a prática de exercícios são fundamentais no gerenciamento da doença. Monitorar os níveis de glicose regularmente é crucial, e o tratamento pode incluir medicamentos orais ou insulina. Além disso, um acompanhamento médico contínuo é importante para evitar complicações.</p>
        </div>
        <img src="img/diabete.png" alt="Imagem sobre tempo de artrite">
    </div>
    <div class="section">
        <div>
            <h2>Hipertensão</h2>
            <p>A hipertensão, ou pressão alta, é uma condição em que a pressão arterial nas artérias está elevada, aumentando o risco de doenças cardíacas e derrames. É importante que os idosos realizem verificações regulares da pressão arterial e sigam orientações médicas para mantê-la sob controle. Mudanças no estilo de vida, como uma dieta saudável, exercícios físicos e a redução do estresse, podem ser eficazes na gestão da hipertensão. Medicamentos também podem ser necessários para garantir que a pressão arterial permaneça em níveis seguros.</p>
        </div>
        <img src="img/hipertensao.png" alt="Imagem sobre tempo de artrite">
    </div>
</div>
</div>


<footer id="contact">
    <div class="section__container footer__container"><div class="footer__logo">
          <a href="#" class="logo">
            <img src="../Lazer-Cibeli/seniorcarelogo.png" alt="SeniorCare Logo" />
          </a>
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
