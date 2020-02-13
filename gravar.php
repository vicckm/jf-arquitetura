<?php
include 'conexao.php';

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('Location: index.php');
}

$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, md5($_POST['senha']));
$email = mysqli_real_escape_string($con, $_POST['email']);
$consenha = mysqli_real_escape_string($con, md5($_POST['consenha']));
if($senha === $consenha) {
$query = "insert into usuario VALUES (null,'{$usuario}', '{$senha}' ,'{$email}')";

$result = mysqli_query($con, $query);
$msg = "Gravado com sucesso!";

if($result) {


	header('Location:msg2.php?msg='.$msg);
}
}

else{
    
    $msg = "Senhas divergentes!";
    header('Location:cadastrarusuario.php?msg='.$msg);
    
}

?>