<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<?php

    include 'imports.php'; 
    include 'verificaLogin.php';
    
    ?>
	<title>Cadastrar Orçamento</title>
	<script>
    document.documentElement.classList.add("js");
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#telefone-name").mask("(00)0000-0000");
      $("#celular-name").mask("(00)00000-0000");
    })
  </script>
</head>
<style>
	
	.botao {
		color: #c0c0c0;
		text-transform: uppercase;
		background: none;
		border: 3px solid #c0c0c0;
		padding: 10px 10px;
		font-style: 14px;
		letter-spacing: 0.1em;
		font-weight: bold;
	}

	#cadastro .botao {
		margin-top: 10px;
		outline: none;
		letter-spacing: 0.1em;
	}
	
	#cadastro .botao-right {
		float: right;
		margin-top: 10px;
		margin-bottom: 20px;
		outline: none;
		letter-spacing: 0.1em;
	}

	.botao:hover {
		text-decoration: none;
	}

	#cadastro a {
		text-align: center;
		font-size: 16px;
	}
</style>

<body>
	<?php include 'header.php'; ?>
	<section id="cadastro">
		<div class="container_grid">
		<a class="botao grid-3" href="painel.php"><i class="fas fa-angle-left mr-3"></i>Voltar</a>
			<h1 class="titulo">Cadastro de Orçamento</h1>
			<form action="recebe2.php" method="post">
				<div class="contato_form grid-8">
					<label for="nome">Nome *</label>
					<input class="input_form" type="text" id="nome" value="<?php if(isset($_SESSION['value_nome1'])) {
    
    echo $_SESSION['value_nome1'];
     
 }  ?>" name="nome" placeholder="Ex.: Maria Joaquina Rodrigues" />
					 <?php
							if(!empty($_SESSION['value_nome1'])){
								//echo "value='".$_SESSION['value_nome']."'";
								unset($_SESSION['value_nome1']);
                                echo"<br>";
							}
						 ?>	
					<?php 
                    
                    if(!empty($_SESSION['vazio_nome1'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_nome1']."</p>";
								unset($_SESSION['vazio_nome1']);
                                echo"<br>";
							}
                    
                    ?>

					<label for="email">E-mail *</label>
					<input class="input_form" type="email" id="email" value="<?php if(isset($_SESSION['value_email1'])) {
    
    echo $_SESSION['value_email1'];
     
 }  ?>" name="email" placeholder="Ex.: seuemail@gmail.com" />

                 <?php
							if(!empty($_SESSION['value_email1'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_email1']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_email1'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_email1']."</p>";
								unset($_SESSION['vazio_email1']);
							}
						 ?>
                
                
					<label for="tel">Telefone</label>
					<input class="input_form" type="text" id="telefone-name" value="<?php if(isset($_SESSION['value_tel1'])) {
    
    echo $_SESSION['value_tel1'];
     
 }  ?>"  name="tel" placeholder="Digite seu DDD + número do telefone (opcional)" />

					<label for="cel">Celular *</label>
					<input class="input_form" type="text" id="celular-name" value="<?php if(isset($_SESSION['value_cel1'])) {
    
    echo $_SESSION['value_cel1'];
     
 }  ?>"  name="cel" placeholder="Digite seu DDD + número do celular" autocomplete="off" />
                    
                     <?php
							if(!empty($_SESSION['value_cel1'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_cel1']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_cel1'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_cel1']."</p>";
								unset($_SESSION['vazio_cel1']);
							}
						 ?>

					<label for="nomedopredio">Nome/Razão Social do prédio *</label>
					<input class="input_form" type="text"  value="<?php if(isset($_SESSION['value_predio1'])) {
    
    echo $_SESSION['value_predio1'];
     
 }  ?>" id="nomedopredio" name="nomedopredio" placeholder="Ex.: Condomínio Vicente de Carvalho" />
                   <?php
							if(!empty($_SESSION['value_predio1'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_predio1']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_predio1'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_predio1']."</p>";
								unset($_SESSION['vazio_predio1']);
							}
						 ?>			  
                    

					<label for="tel">Endereço do prédio *</label>
					<input class="input_form" type="text" id="end" value="<?php if(isset($_SESSION['value_endereco1'])) {
    
    echo $_SESSION['value_endereco1'];
     
 }  ?>" name="endereco" placeholder="Ex.: Rua São Clemente, 133" />
            
             <?php
							if(!empty($_SESSION['value_endereco1'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_endereco1']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_endereco1'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_endereco1']."</p>";
								unset($_SESSION['vazio_endereco1']);
							}
						 ?>			
            
				</div>

				<div class="contato_form grid-8">
					<div class="tipo-de-servico">
						<label for="">Tipo de serviço *</label>
						<select name="tipo_id" id="tipo_id" placeholder="" name="tipo_id">
							<option value="" disabled selected>- Escolha -</option>
							<?php
               include_once 'conexao.php';

                $sql = "SELECT * FROM tipo ORDER BY nome ASC";

                $busca = mysqli_query($con, $sql);

                while($array = mysqli_fetch_array($busca)){

                $id     = $array['id'];
                $nome   = $array['nome'];

            ?>

							<option value='<?php echo $id ?>'><?php echo $nome ?></option>

							<?php } ?>
						</select>
					</div>
				</div>

				<div class="form_right grid-8">
            <label for="">Nº de andares *</label>
            <input class="input_form" type="number" min="0" id="numeroAndares" value="<?php if(isset($_SESSION['value_andares1'])) {
    
    echo $_SESSION['value_andares1'];
     
 }  ?>" name="andares" placeholder="Ex.: 10"  />
            
            <?php
							if(!empty($_SESSION['value_andares1'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_andares1']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_andares1'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_andares1']."</p>";
								unset($_SESSION['vazio_andares1']);
							}
						 ?>			

            <label for="">Nº de apartamentos ou salas *</label>
            <input class="input_form" type="number" min="0" id="numeroAptoOuSalas" value="<?php if(isset($_SESSION['value_apart1'])) {
    
    echo $_SESSION['value_apart1'];
     
 }  ?>" name="aps" placeholder="Ex.: 20" autocomplete="off"  />
           
             <?php
							if(!empty($_SESSION['value_apart1'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_apart1']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_apart1'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_apart1']."</p>";
								unset($_SESSION['vazio_apart1']);
							}
						 ?>			
            
              
                

            <label for="">Nº de elevadores *</label>
            <input class="input_form" type="number" min="0" id="numeroElevadores" value="<?php if(isset($_SESSION['value_elev1'])) {
    
    echo $_SESSION['value_elev1'];
     
 }  ?> "name="elev" placeholder="Ex.: 3" autocomplete="off" />
           
              <?php
							if(!empty($_SESSION['value_elev1'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_elev']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_elev1'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_elev1']."</p>";
								unset($_SESSION['vazio_elev1']);
							}
						 ?>			
            
            
           
            
            

            <label for="">Idade do prédio *</label>
            <input class="input_form" type="number" min="0" id="idadePredio" value="<?php if(isset($_SESSION['value_idade1'])) {
    
    echo $_SESSION['value_idade1'];
     
 }  ?>" name="idade" placeholder="Ex.: 50" autocomplete="off" />
         
           <?php
							if(!empty($_SESSION['value_idade1'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_idade1']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_idade1'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_idade1']."</p>";
								unset($_SESSION['vazio_idade1']);
							}
						 ?>			
         
          </div>
          <div class="form_textarea grid-16">
            <label for="detalhe">Detalhe sua solicitação</label>
            <textarea id="detalhe" name="det" maxlength="255" placeholder="Descreva aqui com detalhes a sua solicitação"></textarea>
          </div>
				<button type="submit" class="botao grid-4 botao-right">Enviar</button>
			</form>
		</div>
	</section>
</body>

</html>