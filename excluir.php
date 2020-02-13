<?php

if(isset($_GET["cod"]) && !empty($_GET["cod"])){
    $cod = $_GET["cod"];

    include_once 'conexao.php';

    $sql = "DELETE FROM orcamento WHERE cod=".$cod;

    $msg = (mysqli_query($con, $sql)) ? "Excluído com sucesso" : "Erro ao excluir";

    mysqli_close($con);
    
    header("location:msg.php?msg=".$msg);
}

?>