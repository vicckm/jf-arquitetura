<?php
echo "<link rel='stylesheet' href='css/style.css' />";
session_start();
include 'conexao.php';
 if(isset($_POST['nome'])) {
     if(empty($_POST['nome'])){
		$_SESSION['vazio_nome'] = "Campo nome é obrigatório";
		$url = 'http://localhost/jf-arquitetura/#orcamento';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else
     {
		$_SESSION['value_nome'] = $nome = $_POST['nome'];
        
	}
 }
 if(isset($_POST['email'])) {
     if(empty($_POST['email'])){
		$_SESSION['vazio_email'] = "Campo email é obrigatório";
		$url = 'http://localhost/jf-arquitetura/#orcamento';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_email'] = $email = $_POST['email'];
        
	}
 }

 if(isset($_POST['tel'])) {
 $tel = $_POST["tel"];
     
     $_SESSION['value_tel'] = $tel;
     $tel = str_replace('(', '', $tel);
     
     $tel = str_replace(')', '', $tel);
     
     $tel = str_replace('-', '', $tel);
     
     
 }
// if(isset($_POST['cel'])) {
     if(empty($_POST['cel'])){
		$_SESSION['vazio_cel'] = "Campo celular é obrigatório";
		$url = 'http://localhost/jf-arquitetura/#orcamento';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $cel = $_POST["cel"];
		$_SESSION['value_cel'] = $cel;
         
  $cel = str_replace('(', '', $cel);
  $cel = str_replace(')', '', $cel);
 
  $cel = str_replace('-', '', $cel);     
        
	}
//     
// }

if(isset($_POST['endereco'])) {
if(empty($_POST['endereco'])){
		$_SESSION['vazio_endereco'] = "Campo endereco é obrigatório";
		$url = 'http://localhost/jf-arquitetura/#orcamento';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $end = $_POST["endereco"];
		$_SESSION['value_endereco'] = $end;
         
 }}


if(isset($_POST['tipo_id'])) {
    $tipo_id = $_POST["tipo_id"];
}

if(isset($_POST['nomedopredio'])) {
    $nomedopredio = $_POST["nomedopredio"];
}

 if(isset($_POST['tipo'])) {
$tipo = $_POST["tipo"];
 }
 if(isset($_POST['andares'])) {
$andares = $_POST["andares"];
 }
 if(isset($_POST['aps'])) {
$aps = $_POST["aps"];
 }
 if(isset($_POST['elev'])) {
$elev = $_POST["elev"];
 }
 if(isset($_POST['idade'])) {
$idade = $_POST["idade"];
 }
 if(isset($_POST['det'])) {
$detalhe = $_POST["det"];
 }
 
$status = 0;
if(!empty($nome) && !empty($email) && !empty($cel && !empty($end))){
    
$sql = "INSERT INTO orcamento VALUES (null, '{$tipo_id}', '{$nome}','{$nomedopredio}', '{$email}', '{$andares}','{$aps}','{$end}','{$elev}','{$idade}','{$tel}','{$cel}','{$detalhe}', '{$status}')";
$msg = (mysqli_query($con, $sql)) ? "<h2 class='enviado-sucesso'>Enviado com sucesso!</h2>" : " <h2 class='nao-enviado'>Infelizmente houve um erro!</h2>";
header("location:msg.php?msg=".$msg);
}
   
    
?>