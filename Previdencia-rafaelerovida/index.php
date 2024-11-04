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
            background-color: #cfe0d5;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: #3d3d3d;
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
            max-width: 800px;
            margin: 30px auto;
            padding: 15px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .section {
            margin-bottom: 30px;
        }
        .section h2 {
            color: #558b6e;
            font-size: 24px;
            margin-bottom: 15px;
        }
        .section p {
            font-size: 16px;
            line-height: 1.6;
        }
        .section img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 15px 0;
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
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="logo.png" alt="Logo" style="height: 40px;">
    </div>
    <div class="menu">
        <a href="#">Home</a>
        <a href="#">Fórum</a>
        <a href="#">Know How</a>
        <a href="#">Previdência</a>
        <a href="#">Matérias</a>
        <a href="#">Login</a>
        <button class="btn-registrar">Registrar</button>
    </div>
</div>

<div class="container">
    <div class="section">
        <h2>O que é previdência?</h2>
        <p>A previdência é um seguro social em que o trabalhador participa através de contribuições mensais. O benefício dessa contribuição é garantir ao trabalhador segurado uma renda na hora em que ele não puder mais trabalhar — ou seja, quando ele se aposentar.</p>
        <img src="previdencia1.png" alt="Imagem da Previdência">
    </div>

    <div class="section">
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

    <div class="section">
        <h2>Qual as idades mínimas para se aposentar?</h2>
        <p>Homens devem ter ao menos 65 anos e ter contribuído por pelo menos 15 anos, enquanto mulheres devem ter pelo menos 63 anos e também ter contribuído por pelo menos 15 anos. É importante destacar que, para as aposentadorias rurais, as regras são um pouco diferentes, e a idade mínima é reduzida para 60 anos para homens e 55 anos para mulheres.</p>
        <img src="previdencia2.png" alt="Imagem sobre aposentadoria">
    </div>

    <div class="section">
        <h2>O que é o tempo de contribuição?</h2>
        <p>O tempo de contribuição é o tempo em que existiu atividade compreendida pelo INSS. É quanto tempo o segurado (trabalhador ou facultativo) pagou à Previdência Social, sendo que esses recolhimentos podem ter sido realizados pelo empregador ou pelo próprio segurado.</p>
        <img src="previdencia3.png" alt="Imagem sobre tempo de contribuição">
    </div>
</div>

</body>
</html>
