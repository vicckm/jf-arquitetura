<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/grid.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Controle dos Orçamentos</title>
</head>
<body>
<main>
	<section id="controle_orcamento">
		<div class="logo">
			<img src="img/logo.jpg" alt="JF Arquitetura">
		</div>
		<div class="container-controle_orcamento">
			<h2 class="subtitulo">Controle dos Orçamentos</h2>
			<div class="container">
				<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Serviço</th>
						<th scope="col">Nome</th>
						<th scope="col">E-mail</th>
						<th scope="col">Telefone</th>
						<th scope="col">Celular</th>
						<th scope="col">+ Informações</th>
						<th scope="col">Status</th>
					</tr>
					</thead>
					<tbody>

					<tr>
						<?php 
						include 'conexao.php';
						$sql = "SELECT * FROM `orcamento`";
						$busca = mysqli_query($con, $sql);

						while ($array = mysqli_fetch_array($busca)) {
						$cod = $array['cod'];
						$tipo = $array['tipo'];
						$nome_cli = $array['nome_cli'];
						$email = $array ['email'];
						$telefone = $array['telefone'];
						$cel = $array['cel'];
						$status = $array['status'];

						?>

						<td><?php echo $tipo ?></td>
						<td><?php echo $nome_cli ?></td>
						<td><?php echo $email ?></td>
						<td><?php echo $telefone ?></td>
						<td><?php echo $cel ?></td>
						<td>
						<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								Informações
							</button>

							
						<?</td>
						<td><?php echo $status ?></td>

					
						
					</tr>
						<?php } ?>
					</tbody>
				</table>
				<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel"></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<?php 
						include 'conexao.php';
						$sql = "SELECT * FROM `orcamento`";
						$busca = mysqli_query($con, $sql);

						while ($array = mysqli_fetch_array($busca)) {
						$cod = $array['cod'];
						$tipo = $array['tipo'];
						$nome_cli = $array['nome_cli'];
						$email = $array ['email'];
						$telefone = $array['telefone'];
						$cel = $array['cel'];
						$status = $array['status'];

						?>

						<?php echo $tipo ?>
						<BR></BR>
						<?php echo $nome_cli ?>
						<BR></BR>
						<?php echo $email ?>
						<BR></BR>
						<?php echo $telefone ?>
						<BR></BR>
						<?php echo $cel ?>
						
					
							
						
						

					
						
					
						<?php } ?>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
			</div>
		</div>
	</section>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>