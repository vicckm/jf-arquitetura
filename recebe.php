
<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$predio = $_POST["predio"];
$tel = $_POST["tel"];
$cel = $_POST["cel"];
$end = $_POST["endereco"];
$tipo = $_POST["tipo"];
$andares = $_POST["andares"];
$aps = $_POST["aps"];
$elev = $_POST["elev"];
$idade = $_POST["idade"];
$detalhe = $_POST["det"];
$status = 0;


include 'conexao.php';

$sql = "INSERT INTO orcamento VALUES (null, '{$tipo}', '{$nome}','{$predio}', '{$email}', '{$andares}','{$aps}','{$end}','{$elev}','{$idade}','{$tel}','{$cel}','{$detalhe}', '{$status}')";

 if (mysqli_query($con, $sql)) {
       
     echo ("boa");
       
       
}

    else {
        
        
        echo("ERROU");
        
    }


    
?>    