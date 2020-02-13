<?php
    
    session_start();
    
	if(isset($_POST['status']) && isset($_POST['cod'])){
        
        include_once 'conexao.php';
        
        $status = $_POST['status'];
        $cod = $_POST['cod'];
        
		$sql = "UPDATE orcamento SET status = '$status' WHERE cod = $cod";

		if(mysqli_query($con, $sql)){
            if($status == "Feito"){
                echo "O comentário $cod agora é relevante e aparecerá na tela incial";
            }else{
                echo "O comentário $cod deixou de ser relevante e desaparecerá da tela incial";
            }
        }
        
        
        mysqli_close($con);
	}

?>