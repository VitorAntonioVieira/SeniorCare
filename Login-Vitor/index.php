<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Login - SeniorCare</title>
</head>
<body>
    <div class="container">
        <img id="logo_img" src="../assets/seniorcarelogo.png" alt="Logo">
        <h1 class="title" >Acesse o <br><span>Senior Care</span></h1>
        <?php if (isset($erro)) { echo "<p class='error'>$erro</p>"; } ?>
        <form action="./login.php" method="post" class="form">
            <label for="username">Email</label>
            <input type="text" name="email" id="username" required>
            <label for="password">Senha</label>
            <input type="text" name="senha" id="password" required>
            <div class="keep-me">
                <input type="checkbox" name="keep" id="keep_btn">
                <span id="keep_label" >Lembrar de mim</span>
            </div>
            <input id="login_btn" type="submit" value="Entrar">
        </form>
        <span id="or_label" >ou</span>
        <a id="signin_btn" href="./registrar.php">Cadastre-se</a>
    </div>
</body>
</html>