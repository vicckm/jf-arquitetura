<?php

//$tipo_id = $_POST['tipo_id'];
//echo("tipo_id: " . $tipo_id);

//$nomedopredio = $_POST["nomedopredio"];
//echo("nomedopredio: " . $nomedopredio);



echo "<link rel='stylesheet' href='css/style.css' />";
session_start();
include 'conexao.php';
 if(isset($_POST['nome'])) {
     if(empty($_POST['nome'])){
		$_SESSION['vazio_nome1'] = "Este campo é obrigatório!";
		$url = 'http://localhost/jf-arquitetura/cadastrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else
     {
		$_SESSION['value_nome1'] = $nome = $_POST['nome'];
        
	}
 }
 if(isset($_POST['email'])) {
     if(empty($_POST['email'])){
		$_SESSION['vazio_email1'] = "Este campo é obrigatório!";
		$url = 'http://localhost/jf-arquitetura/cadastrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_email1'] = $email = $_POST['email'];
        
	}
 }

 if(isset($_POST['tel'])) {
 $tel = $_POST["tel"];
     
     $_SESSION['value_tel1'] = $tel;
     $tel = str_replace('(', '', $tel);
     
     $tel = str_replace(')', '', $tel);
     
     $tel = str_replace('-', '', $tel);
     
     $_SESSION['value_tel1'] = $tel;
     
 }
 if(isset($_POST['cel'])) {
     if(empty($_POST['cel'])){
		$_SESSION['vazio_cel1'] = "Este campo é obrigatório!";
		$url = 'http://localhost/jf-arquitetura/cadastrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $cel = $_POST["cel"];
		$_SESSION['value_cel1'] = $cel;
         
  $cel = str_replace('(', '', $cel);
  $cel = str_replace(')', '', $cel);
 
  $cel = str_replace('-', '', $cel);     
        
	}
     
 }

if(isset($_POST['endereco'])) {
if(empty($_POST['endereco'])){
		$_SESSION['vazio_endereco1'] = "Este campo é obrigatório!";
		$url = 'http://localhost/jf-arquitetura/cadastrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $end = $_POST["endereco"];
		$_SESSION['value_endereco1'] = $end;
         
 }}


//if(isset($_POST['tipo_id'])) {
//    $tipo_id = $_POST["tipo_id"];
//}

if(isset($_POST['tipo_id'])) {

if(empty($_POST['tipo_id'])){
		$_SESSION['vazio_tipo1'] = "Este campo é obrigatório!";
		$url = 'http://localhost/jf-arquitetura/cadastrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else
    
    $tipo_id = $_POST["tipo_id"];
    $_SESSION['value_tipo1'] = $tipo_id;
}



if(isset($_POST['nomedopredio'])) {
if(empty($_POST['nomedopredio'])){
		$_SESSION['vazio_predio1'] = "Este campo é obrigatório!";
		$url = 'http://localhost/jf-arquitetura/cadastrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $nomedopredio = $_POST["nomedopredio"];
		$_SESSION['value_predio1'] = $nomedopredio;
         


 }}


 if(isset($_POST['andares'])) {
     
     if(empty($_POST['andares'])){
		$_SESSION['vazio_andares1'] = "Este campo é obrigatório!";
		$url = 'http://localhost/jf-arquitetura/cadastrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $andares = $_POST["andares"];
		$_SESSION['value_andares1'] = $andares;
         


 }}

 
 if(isset($_POST['aps'])) {

     
     if(empty($_POST['aps'])){
		$_SESSION['vazio_apart1'] = "Este campo é obrigatório!";
		$url = 'http://localhost/jf-arquitetura/cadastrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $aps = $_POST["aps"];
		$_SESSION['value_apart1'] = $aps;
         


 }}
 
 if(isset($_POST['elev'])) {
     
       if(empty($_POST['elev'])){
		$_SESSION['vazio_elev1'] = "Este campo é obrigatório!";
		$url = 'http://localhost/jf-arquitetura/cadastrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $elev = $_POST["elev"];
		$_SESSION['value_elev1'] = $elev;
         


 }

 }
 if(isset($_POST['idade'])) {
     
       if(empty($_POST['idade'])){
		$_SESSION['vazio_idade1'] = "Este campo é obrigatório!";
		$url = 'http://localhost/jf-arquitetura/cadastrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $idade = $_POST["idade"];
		$_SESSION['value_idade1'] = $idade;
         

 }}
 if(isset($_POST['det'])) {
$detalhe = $_POST["det"];
 }


$status = "Pendente";


    
    
if(!empty($nome) && !empty($email) && !empty($cel) && !empty($end) && !empty($tipo_id) && !empty($nomedopredio) && !empty($andares) && !empty($aps) && !empty($idade) ){
    
    
$sql = "INSERT INTO orcamento VALUES (null, '{$tipo_id}', '{$nome}','{$nomedopredio}', '{$email}', '{$andares}','{$aps}','{$end}','{$elev}','{$idade}','{$tel}','{$cel}','{$detalhe}', '{$status}', NOW(), null)";
$msg = (mysqli_query($con, $sql)) ? "<h2 class='enviado-sucesso'>Enviado com sucesso!</h2>" : " <h2 class='nao-enviado'>Infelizmente houve um erro!</h2>";
header("location:msg2.php?msg=".$msg);
    
}
   
    
   