<?php
//    include 'conexao.php';
//    
//    $senhanova = sha1($_POST['senhanova']);
//    $confirmasenhanova = sha1($_POST['confirmasenhanova']);
//    $chave_senha = $_POST["chave"];
//    if(empty($senhanova) || empty($confirmasenhanova)){
//        echo "Verifique se todos os campos obrigatórios foram preenchidos";
//    } else{
//    
//        //Verifica se as senhas são iguais
//        if($senhanova == $confirmasenhanova){
//            //Grava a nova senha no banco de dados
//            $alterasenha = "UPDATE usuario SET senha = '$senhanova' WHERE chave_senha = '$chave_senha'";
//            if(mysqli_query($con, $alterasenha)){
//                echo "sucesso";
//            }else{
//                echo "Erro ao connectar com o banco";
//            }
//        } else{
//            echo "Senhas diferentes";
//        }
//    }
//    
//    mysqli_close($con);
?>
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
        <form id="formesqueceusenha" action="redefinirsenha.php" method="post">
          <div class="form-card ">
            <label>Digite seu e-mail:</label>
            <input placeholder="E-mail" type="text" name="email">
            <label>Digite sua nova senha:</label>
            <input placeholder="Senha" type="password" name="senha">
            <label>Confirme sua nova senha:</label>
            <input placeholder="Confirmar senha" type="password" name="consenha">
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


