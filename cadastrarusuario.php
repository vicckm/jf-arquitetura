<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
	<?php include 'imports.php'; 
     include 'verificaLogin.php';
    ?>
  <title>Administrador</title>
</head>

<body>
  <main>
    <section id="form_adm">
      <div class="logo">
        <img src="img/logo.jpg" alt="JF Arquitetura">
      </div>
      <div class="container_grid">
        <h2 class="subtitulo">Cadastrar Usuário</h2>
        <form action="gravar.php" method="post">
          <div class="form-card ">
            <label>Login</label>
            <input type="text" required name="usuario">
             <label>Email</label>
            <input type="Email"  required name="email">
            <label>Senha</label>
            <input type="password" name="senha">
            <label>Confirmar Senha</label>
            <input type="password" name="consenha">
            <button type="submit" class="botao-adm">Entrar</button>
          </div>
          <h3 style="text-align:center; color: red;"><?php
            if(isset($_GET["msg"]))
               echo $_GET["msg"];
           ?></h3>
        </form>
      </div>
    </section>
  </main>
</body>

</html>