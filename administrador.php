<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Administrador</title>
</head>

<body>
  <main>
    <section id="form_adm">
      <div class="logo">
        <img src="img/logo.jpg" alt="JF Arquitetura">
      </div>
      <div class="container">
        <h2 class="subtitulo">Seja bem-vindo!</h2>
        <div>
          <p>Erro: Usuário ou senha inválidos.</p>
        </div>
        <form action="login.php" method="post">
          <div class="form-card ">
            <label>Login</label>
            <input type="text" name="usuario">

            <label>Senha</label>
            <input type="password" name="senha">
            <button type="submit" class="btn-adm">Entrar</button>
          </div>
        </form>
      </div>
    </section>
  </main>
</body>

</html>