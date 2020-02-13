<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <title>JF Arquitetura</title>
</head>

<?php 
    $msg = $_GET["msg"]; 
    
    ?>


<body>
  <main>
    <section id="enviado">
      <div class="logo">
        <img src="img/logo.jpg" alt="JF Arquitetura">
      </div>
      <div class="container_grid">
        <div class="enviado">
          <?php echo $msg; ?>
           
            
          <a href="administrador.php" class="voltar">Voltar para o painel de administrador</a>
        </div>
      </div>
    </section>
  </main>
</body>

</html>