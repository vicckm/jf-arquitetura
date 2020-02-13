<?php 
include "conexao.php";
include'verificarTroca';

if(isset($_POST['email'])) {
     $email = $_POST['email'];
    
    

    
    

 }
if(isset($_POST['senha'])) {
     $senha = md5($_POST['senha']);
    
    

    
    

 }
if(isset($_POST['consenha'])) {
    
     $consenha = md5($_POST['consenha']);
//      
}

if($senha === $consenha) {
    
    
$token = md5(time());

    
$sql = "UPDATE usuario SET senha = '{$consenha}', token = '{$token}'  WHERE email = '{$email}'";


if(mysqli_query($con, $sql))
{
    $msg = "Senha trocada com sucesso! Esse é seu novo código de segurança, guarde-o com cautela " .$token;        
    header('Location:msg3.php?msg='.$msg);
        
        
}
else{
    $msg = "E-mail não encontrado";
    header('Location:crianovasenha.php?msg='.$msg);
    
}

}

else{
    $msg ="Campo não coincide com nova senha";
    header('Location:crianovasenha.php?msg='.$msg);
    
}



