
<?php

$cod    = $_POST["cod"];
$tipo_id   = $_POST["tipo_id"];
$nome_cli  = $_POST["nome_cli"];
$nome_predio = $_POST["nome_predio"];
$email = $_POST["email"];
$andares = $_POST["andares"];
$apart_salas = $_POST["apart_salas"];
$endereco = $_POST["endereco"];
$elevadores = $_POST["elevadores"];
$idade_pred = $_POST["idade_pred"];
$telefone = $_POST["telefone"];
$cel = $_POST["cel"];
$detalhes = $_POST["detalhes"];
$status = $_POST["status"]

include_once 'conexao.php';

$sql = "UPDATE orcamento set tipo_id='{$tipo_id}', nome_cli='{$nome_cli}', nome_predio='{$nome_predio}', email='{$email}', andares='{$andares}', apart_salas='{$apart_salas}', endereco='{$endereco}', elevadores='{$elevadores}', idade_pred='{$idade_pred}', telefone='{$telefone}', cel='{$cel}', detalhes='{$detalhes}', status='{$status}' where cod='{$cod}'";

$msg = (mysqli_query($con, $sql)) ? "Atualizado com sucesso" : "Erro ao atualizar";

mysqli_close($con);

header("location:msg.php?msg=".$msg);

?>