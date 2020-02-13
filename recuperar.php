<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
	<?php include 'imports.php'; 
    include 'conexao.php';
    
   
    ?>
  <title>Recuperar Senha</title>
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
//    $(document).ready(function(){
//        $('#formesqueceusenha').submit(function(event) {
//             event.preventDefault();
//             // seleciona o botão de submit
//             var botao = $(this).find('input[type="submit"]');
//             // desabilita o botão para evitar multiplos envio
//             botao.prop("disabled", true).val("Enviando..").css('opacity', '0.5');
//             data = $("#formesqueceusenha").serialize();
//             $.ajax({
//                type: "post",
//                url: $(this).attr('action'),
//                dataType: "json",
//                data: data,
//            }).done(function(data){
//                alert(data.status);
//                $('#formesqueceusenha')[0].reset();
//                botao.prop("disabled", false).val("Enviar").css('opacity', '1');
//            });
//        });
//    });
    </script>
</head>

<body>
  <main>
    <section id="form_adm">
      <div class="logo">
        <img src="img/logo.jpg" alt="JF Arquitetura">
      </div>
      <div class="container_grid">
       <a class="botao grid-3" href="administrador.php"><i class="fas fa-angle-left mr-3"></i>Voltar</a>
        <h2 class="subtitulo mt-5">Recuperar Senha</h2>
        <form id="formesqueceusenha" action="trocando.php" method="post">
          <div class="form-card ">
            <label>Digite seu e-mail</label>
            <input placeholder="E-mail" type="text" name="email" required>
            <label>Digite seu código de segurança</label>
            <input placeholder="Código de segurança" type="password" name="token" required>
            <input type="submit" class="botao-adm">
          </div>
          <h3 style="color: red; text-align: center;">
           <?php
            if(isset($_GET["msg"]))
                echo $_GET["msg"];
           ?>
           </h3>
        </form>
      </div>
    </section>
  </main>
</body>

</html>