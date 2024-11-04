<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="../assets/icon.png"/>
    <title>Previdência</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f9f1;
            color: #3d3d3d;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: white;
            padding: 25px; /* Aumentado para deixar o cabeçalho maior */
            display: flex;
            align-items: center; /* Alinha a logo e os links verticalmente */
            justify-content: ; /* Espaça a logo e os links */
        }
        .navbar .logo {
            margin-right: 10px; /* Reduzido para aproximar a logo do menu */
        }
        .navbar .logo img {
            height: 40px; /* Altura da logo */
        }
        .navbar .menu {
            display: flex;
            align-items: center; /* Alinha os links e o botão verticalmente */
        }
        .navbar a {
            color: #558b6e; /* Mudança da cor das letras para verde */
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        .navbar a:hover {
            text-decoration: underline;
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
        .container {
            max-width: 1200px; /* Aumentado para ocupar mais espaço na página */
            margin: 30px auto;
            padding: 15px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .section {
            display: flex;
            gap: 20px;
            align-items: flex-start; /* Alinha os itens ao topo */
            margin-bottom: 30px;
        }
        .section h2 {
            color: #558b6e;
            font-size: 24px;
            margin-bottom: 10px;
            flex: 1; /* Permite que o texto ocupe espaço disponível */
        }
        .section p {
            font-size: 16px;
            line-height: 1.6;
        }
        .section img {
            max-width: 400px; /* Aumentando o tamanho das imagens */
            height: auto;
            border-radius: 5px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        .table, .table th, .table td {
            border: 1px solid #d1d1d1;
        }
        .table th, .table td {
            padding: 8px;
            text-align: center;
        }
        .table th {
            background-color: #e3f2e1;
            font-weight: bold;
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

<div class="navbar">
    <div class="logo">
        <img src="img/logo.png" alt="Logo">
    </div>
    <div class="menu">
        <a href="../index.html">Home</a>
        <a href="../Forum-Igor/index.php">Fórum</a>
        <a href="../Saúde-léoekaua/index.php">Saúde</a>
        <a href="../Lazer-Cibeli/index.php">Lazer</a>
        <a href="../Previdencia-rafaelerovida/index.php">Previdência</a>
        <a href="#">Login</a>
        <button class="btn-registrar">Registrar</button>
    </div>
</div>

<div class="container">
    <div class="section">
        <div>
            <h2>O que é previdência?</h2>
            <p>A previdência é um seguro social em que o trabalhador participa através de contribuições mensais. O benefício dessa contribuição é garantir ao trabalhador segurado uma renda na hora em que ele não puder mais trabalhar — ou seja, quando ele se aposentar.</p>
        </div>
        <img src="img/previdencia1.png" alt="Imagem da Previdência">
    </div>

    <div class="section">
        <div>
            <h2>Sistema de pontos: O que é e como funciona</h2>
            <p>A aposentadoria por pontos é uma regra de aposentadoria aplicada quando o trabalhador atinge uma pontuação mínima. Esta pontuação consiste na soma do tempo de contribuição e da idade do segurado. No entanto, não basta apenas atingir os pontos, deve-se cumprir o tempo mínimo exigido para o grupo, que, pela legislação, é de 30 anos para mulheres e 35 anos para homens.</p>
            <table class="table">
                <tr>
                    <th>Ano</th>
                    <th>Pontuação Masculina</th>
                    <th>Pontuação Feminina</th>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>97</td>
                    <td>87</td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>98</td>
                    <td>88</td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td>99</td>
                    <td>89</td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td>100</td>
                    <td>90</td>
                </tr>
            </table>
        </div>
        <img src="img/previdencia2.png" alt="Imagem sobre aposentadoria">
    </div>

    <div class="section">
        <div>
            <h2>Qual as idades mínimas para se aposentar?</h2>
            <p>Homens devem ter ao menos 65 anos e ter contribuído por pelo menos 15 anos, enquanto mulheres devem ter pelo menos 63 anos e também ter contribuído por pelo menos 15 anos. É importante destacar que, para as aposentadorias rurais, as regras são um pouco diferentes, e a idade mínima é reduzida para 60 anos para homens e 55 anos para mulheres.</p>
        </div>
        <img src="img/previdencia3.png" alt="Imagem sobre tempo de contribuição">
    </div>

    <div class="section">
        <div>
            <h2>O que é o tempo de contribuição?</h2>
            <p>O tempo de contribuição é o tempo em que existiu atividade compreendida pelo INSS. É quanto tempo o segurado (trabalhador ou facultativo) pagou à Previdência Social, sendo que esses recolhimentos podem ter sido realizados pelo empregador ou pelo próprio segurado.</p>
        </div>
    </div>
</div>

<footer id="contact">
    <div class="section_container footercontainer">
        <div class="footer_logo">
            <a href="#" class="logo">
                <img src="img/logo.png" alt="SeniorCare Logo" />
            </a>
        </div>
        <div class="footer__col">
            <h1>SeniorCare</h1>
            <p>
                A SeniorCare é uma plataforma criada por alunos de Desenvolvimento de Sistemas para informar os idosos sobre seus direitos, promovendo o empoderamento e a conscientização.
            </p>
        </div>

        <div class="footer__col">
            <h4>SESI Caçapava</h4>
            <ul class="footer__links">
                <li>
                    <a href="#">
                        <span><i class="ri-phone-fill"></i></span> (12) 3653-8500
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><i class="ri-record-mail-line"></i></span> sesicaçapava@sesisp.org.br
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

</body>
</html>
