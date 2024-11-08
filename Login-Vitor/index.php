<!DOCTYPE html>
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
        <form action="" method="post" class="form">
            <label for="username">Usuário</label>
            <input type="text" name="username" id="username">
            <label for="password">Senha</label>
            <input type="text" name="password" id="password">
            <div class="keep-me">
                <input type="checkbox" name="keep" id="keep_btn">
                <span id="keep_label" >Lembrar de mim</span>
            </div>
            <input id="login_btn" type="button" value="Entrar">
        </form>
    </div>
</body>
</html>