<?php 
include "conexao.php";
if(isset($_POST['email'])) {
     $email = $_POST['email'];
    
    
//    echo $email;
    
    

 }
if(isset($_POST['token'])) {
    
     $token = $_POST['token'];
//        echo $token;
}

    
$sql = "SELECT * FROM usuario WHERE token = '{$token}' and email = '{$email}'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 1)
{
            
    header('Location:crianovasenha.php');
        
        
}
else{
    $msg = "Código de segurança ou e-mail incorreto!";
    header('Location:recuperar.php?msg='.$msg);
    
}
    










?>