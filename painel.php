<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<?php 
    include 'imports.php'; 
    include 'verificaLogin.php';
    ?>
	<title>Painel do Sistema - JF Arquitetura</title>
</head>
<style>
	body {
		height: 100%;
	}

	#painel {
		height: 100%;
	}

	.painel_orcamento li {
		height: 300px;
		width: 300px;
		background: #d2d2d2;
		text-align: center;
		border: 5px solid white;
		box-shadow: 0 0 0 5px black;
		position: relative;
	}

	.painel_orcamento li:last-child {
		float: right;
	}

	.clear {
		clear: both;
	}

	#painel .botao {
		color: #c0c0c0;
		text-transform: uppercase;
		background: none;
		border: 3px solid #c0c0c0;
		padding: 10px 10px;
		font-style: 14px;
		letter-spacing: 0.1em;
		font-weight: bold;
	}

	#painel .botao {
		margin-top: 10px;
		outline: none;
		letter-spacing: 0.1em;
	}

	#painel .botao:hover {
		border-color: #000;
		color: #000;
	}

	#painel a {
		text-align: center;
		font-size: 16px;
	}

	#painel img {
		margin-top: 50px;
	}

	#painel p {
		letter-spacing: 0.1em;
		text-align: center;
		margin-top: 20px;
		font-size: 20px;
		color: #000;
	}
	
	#painel p:hover {
		color: #fff;
		cursor: pointer;
	}
	
	#painel p:hover::after {
		content: "";
  display: block;
  width: 30px;
  height: 3px;
  background: #fff;
  margin: 2px auto;
	}
	
	._footer{
		position: fixed;
		bottom: 0;
	}

</style>

<body>
	<?php include 'header.php'; ?>
	<section id="painel">
		<div class="container_grid">
			<a class="botao grid-3 pl-1" href="logout.php"><i class="fas fa-angle-left mr-3"></i>Sair</a>
<!--
			<h3><?php
//            if(isset($_GET["msg"]))
//                echo $_GET["msg"];
           ?></h3>
-->
			<h1 class="titulo">Painel do Sistema</h1>
			<ul class="painel_orcamento">
				<li class="grid-1-3"><a href="orcamento-adm.php">
						<div class="img"><img src="img/lupa.png" alt="Ícone de lupa"></div>
						<p>Orçamentos Pendentes</p>
					</a></li>
				<li class="grid-1-3"><a href="cadastrar.php">
				<div class="img"><img src="img/cadastro.png" alt="Ícone de cadastro"></div>
						<p>Cadastrar Orçamento</p>
				</a></li>
				<li class="grid-1-3"><a href="consultar.php">
				<div class="img"><img src="img/consulta.png" alt="Ícone de consulta"></div>
						<p>Consultar Orçamento</p>
                  </a></li>
				<div class="clear"></div>
			</ul>
		</div>
	</section>
	
</body>

</html>