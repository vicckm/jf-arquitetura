<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<?php include 'imports.php'; ?>
	<title>Editar Orçamento</title>
	<script type="text/javascript">
	$(document).ready(function() {
		$("#telefone-name").mask("(000)0000-0000");
		$("#celular-name").mask("(000)00000-0000");
	})
</script>
</head>

<body>
	<?php 
        $cod = $_GET["cod"];
        include 'conexao.php';
        $sql = "SELECT * FROM orcamento WHERE cod=".$cod;
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    
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
		<a class="botao grid-3" href="consultar.php"><i class="fas fa-angle-left mr-3"></i>Voltar</a>
			<h1 class="titulo">Edição de Orçamento</h1>
			<form action="atualizar.php" method="post">
				<div class="contato_form grid-8">
					<input type="hidden" readonly name="cod" value="<?php echo $row['cod'];?>">
					<label for="nome">Nome *</label>
					<input class="input_form" type="text" id="nome" name="nome" placeholder="Ex.: Maria Joaquina Rodrigues" />

					<label for="email">E-mail *</label>
					<input class="input_form" type="email" id="email" name="email" placeholder="Ex.: seuemail@gmail.com" />

					<label for="tel">Telefone</label>
					<input class="input_form" type="text" id="tel" name="tel" placeholder="Digite seu DDD + número do telefone (opcional)" />

					<label for="cel">Celular *</label>
					<input class="input_form" type="text" id="cel" name="cel" placeholder="Digite seu DDD + número do celular" autocomplete="off" />

					<label for="nomedopredio">Nome/Razão Social do prédio *</label>
					<input class="input_form" type="text" id="nomedopredio" name="nomedopredio" placeholder="Ex.: Condomínio Vicente de Carvalho" />

					<label for="endereco">Endereço do prédio *</label>
					<input class="input_form" type="text" id="end" name="endereco" placeholder="Ex.: Rua São Clemente, 133" />
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
            <input class="input_form" type="number" min="0" id="numeroAndares" name="andares" placeholder="Ex.: 10"  />

            <label for="">Nº de apartamentos ou salas *</label>
            <input class="input_form" type="number" min="0" id="numeroAptoOuSalas" name="aps" placeholder="Ex.: 20" autocomplete="off"  />

            <label for="">Nº de elevadores *</label>
            <input class="input_form" type="number" min="0" id="numeroElevadores" name="elev" placeholder="Ex.: 3" autocomplete="off" />

            <label for="">Idade do prédio *</label>
            <input class="input_form" type="number" min="0" id="idadePredio" name="idade" placeholder="Ex.: 50" autocomplete="off" />
          </div>
          <div class="form_textarea grid-16">
            <label for="detalhe">Detalhe sua solicitação</label>
            <textarea id="detalhe" name="det" maxlength="255" placeholder="Descreva aqui com detalhes a sua solicitação"></textarea>
          </div>
				<button type="submit" class="botao grid-4 botao-right">Enviar</button>
			</form>
		</div>
	</section>
	<footer class="_footer">
		<p>JF Arquitetura - Todos os direitos reservados</p>
		<p>Feito com <span class="heart">❤</span> pelo Grupo D - 2019 CSI</p>
	</footer>
	  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>