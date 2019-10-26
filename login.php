<?php
include 'conexao.php';

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('Location: index.php');
}

$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '".$usuario."' and senha = md5('".$senha."')";

$result = mysqli_query($con, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	session_start();
	$_SESSION['usuario'] = $usuario;
	header('Location:orcamento-adm.php');
} else {
	header('Location:index.php');
}

?>