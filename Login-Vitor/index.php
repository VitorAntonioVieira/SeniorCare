<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
      body {
          font-family: Arial, sans-serif;
          background-color: #e9f5e9;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
      }
      .login-container {
          width: 300px;
          padding: 20px;
          background-color: #f5f5f5;
          border-radius: 10px;
          box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
          text-align: center;
      }
      h2 {
          margin-bottom: 20px;
      }
      input[type="email"],
      input[type="password"] {
          width: 100%;
          padding: 10px;
          margin: 10px 0;
          border: 1px solid #ccc;
          border-radius: 5px;
      }
      button {
          width: 100%;
          padding: 10px;
          background-color: #4CAF50;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }
      button:hover {
          background-color: #45a049;
      }
      .error {
          color: red;
          font-size: 14px;
      }
  </style>
</head>
<body>

<div class="login-container">
  <h2>Login</h2>
  <?php if (isset($erro)) { echo "<p class='error'>$erro</p>"; } ?>
  <form action="login.php" method="POST">
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Entrar</button>
  </form>
</div>

</body>
</html>
