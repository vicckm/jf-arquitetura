<?php
    include_once ('info.php');
    include 'conexao.php';
    
    $email = $_POST["email"];
    date_default_timezone_set('America/Sao_Paulo');
    $data_senha = date('Y-m-d H:i:s', time()+1440*60);
    
    //Verifica se o email informado existe no banco
    $sql = mysqli_query($con, "SELECT * FROM usuario WHERE email = '$email'");
    //se a variável $sql foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico, o seu valor será igual a 1, então é gerada uma chave e uma senha e enviados o email de redefinição para o usuário
    if (mysqli_num_rows($sql) == 1){
        //Gera uma chave
        $chave_senha = geradorchave();
        //Coloca a chave e a data no banco de dados
        mysqli_query($con, "UPDATE usuario SET chave_senha = '$chave_senha', data_expiracao_senha = '$data_senha' WHERE email = '$email'");
        //Chama a função de enviar email passando como parametro a chave gerada
        $status = linksenha($chave_senha);
        
    //se a variável $sql não foi bem sucedida, ou seja se ela não estiver encontrado algum registro idêntico, o seu valor será igual a 0, então é exibido um alerta informando que o email informado não foi encontrado
    }else{
        $status = "E-mail não encontrado";
    }
    
    echo json_encode(
        array(
            "status" => $status
        )
    )
        
        
        
?>