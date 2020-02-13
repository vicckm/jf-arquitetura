<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <?php include 'imports.php';
    include 'verificaLogin.php';
    ?>
  <title>Consultar Orçamentos</title>
  <script>
    function excluir(cod) {
      if (confirm('Deseja realmente excluir este aluno?')) {
        location.href = 'excluir.php?cod=' + cod;
      }
    }
  </script>
</head>
<style>
  .form {
    width: 300px;
  }

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

  .botao-enviar {
    color: #c0c0c0;
    text-transform: uppercase;
    background: none;
    border: 3px solid #c0c0c0;
    padding: 2px 10px;
    letter-spacing: 0.1em;
    font-weight: bold;
  }

  .botao-enviar:hover {
    border-color: #000;
    color: #000;
    cursor: pointer;
    outline: none;
  }


  #consultar .botao {
    margin-top: 10px;
    outline: none;
    letter-spacing: 0.1em;
  }

  #consultar a {
    text-align: center;
    font-size: 16px;
  }

  #consultar .input_form {
    width: 300px;
    border: 4px solid #c0c0c0;
    background: none;
    padding: 2px 2px;
    margin-bottom: 10px;
    outline: none;
    font-size: 14px;
  }

  ._footer {
    position: fixed;
    bottom: 0;
  }
</style>

<body>
  <?php include 'header.php'; ?>
  <section id="consultar">
    <div class="container_grid">
      <a class="botao grid-3" href="painel.php"><i class="fas fa-angle-left mr-3"></i>Voltar</a>
      <h1 class="titulo">Consulta de Orçamento</h1>
      <form class="mb-3">
        <label class="label_form font-weight-bold">Nome: </label>
        <input type="text" name="nome" class="input_form">
        <button type="submit" class="botao-enviar">Enviar</button>
      </form>
      <?php
			if(isset($_GET["nome"])) {
				$nome = $_GET["nome"];
		include_once 'conexao.php';

								$sql = "SELECT o.*, t.nome AS 'tipo_nome', DATE_FORMAT(`data`, '%d/%m/%Y &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; %H:%i') as 'data' 
												FROM orcamento o, tipo t 
												WHERE o.tipo_id = t.id
												AND nome_cli like '{$nome}%'";
			
		$busca = mysqli_query($con, $sql);

		$totalRegistros = mysqli_num_rows($busca);

		if($totalRegistros > 0 ){?>
      <div class="table-responsive">
        <table class="table table-hover">
          <tr>
            <th scope="col">Data &amp; Hora</th>
            <th scope="col-lg-2">Serviço</th>
            <th scope="col-lg-2">Nome</th>
            <th scope="col-lg-2">E-mail</th>
            <th scope="col-lg-2">Informações</th>
            <th scope="col-lg-2">Status</th>
            <th scope="col-lg-2">Observações</th>
          </tr>

          <?php
									while ($array = mysqli_fetch_array($busca)){
                                    $id = $array['cod'];    
									$tipo_nome = $array['tipo_nome'];
									$nome_cli = $array['nome_cli'];
									$nome_predio = $array['nome_predio'];    
									$email = $array ['email'];
									$telefone = $array['telefone'];
									$cel = $array['cel'];
									$data = $array['data'];
									$status = $array['status'];
									$and = $array['andares'];
									$apart = $array['apart_salas'];
									$elev = $array['elevadores'];
									$end = $array['endereco'];
									$idade_predio = $array['idade_pred'];
									$det = $array['detalhes'];
                                    $obs = $array['observacoes'];    
										
									
								?>
          <tr>
            <td><?php echo $data; ?></td>
            <td><?php echo $tipo_nome; ?></td>
            <td><?php echo $nome_cli; ?></td>
            <td><?php echo $email; ?></td>

            <td>
              <button type="button" class="btn btn-dark ml-4" data-toggle="modal" data-det="<?php echo $det ?>" data-idade="<?php echo $idade_predio ?>" data-elev="<?php echo $elev ?>" data-apart="<?php echo $apart ?>" data-and="<?php echo $and ?>" data-tipo="<?php echo $tipo_nome ?>" data-end="<?php echo $end ?>" data-target="#exampleModal" data-predio="<?php echo $nome_predio ?>" data-telefone="<?php echo $telefone ?>" data-celular="<?php echo $cel ?>" data-email="<?php echo $email ?>" data-whatever="<?php echo $nome_cli ?>">+</button>
            </td>

            <td><?php echo $status ?></td>


            <td>
              <button class="ml-4" data-cod="<?php echo $id ?>" data-obs="<?php echo $obs ?>" data-whatever="<?php echo $nome_cli ?>" data-target="#edit-modal" data-toggle="modal" style="color: black;">
                <i class=" btn btn-dark fas fa-user-edit "></i>
              </button>
            </td>
            <?php
			
				echo '</tr>';
			 }
						}

			?>
          </tr>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-3">Nome:</label>
                        <input type="text" disabled class="form-control ml-3" id="recipent-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-4">Email:</label>
                        <input type="text" disabled class="form-control ml-4" id="email-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-3">Telefone:</label>
                        <input type="text" disabled class="form-control ml-3" id="telefone-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-4">Celular:</label>
                        <input type="text" disabled class="form-control ml-4" id="celular-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-3">Nome do Predio/Casa:</label>
                        <input type="text" disabled class="form-control ml-3" id="predio-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-4">Endereço do Predio/Casa:</label>
                        <input type="text" disabled class="form-control ml-4" id="end-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-3">Tipo de Serviço:</label>
                        <input type="text" disabled class="form-control ml-3" id="tipo-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-4">Andares:</label>
                        <input type="text" disabled class="form-control ml-4" id="and-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-3">Apartamentos ou Salas:</label>
                        <input type="text" disabled class="form-control ml-3" id="apart-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-4">Elevadores</label>
                        <input type="text" disabled class="form-control ml-4" id="elev-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-3">Idade do Prédio</label>
                        <input type="text" disabled class="form-control ml-3" id="idade-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label ml-3">Detalhes</label>
                        <textarea class="form-control ml-3" disabled id="det-name" cols="35" rows="3"></textarea>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="obs.php">
                    <div class="form-group">
                      <label for="recipient-name" style="display: none;" class="col-form-label">Código:</label>
                      <input type="text" name="cod" style="display: none;" class="form-control" id="cod">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nome:</label>
                      <input type="text" id="nome" name="nome" disabled class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Observações sobre o orçamento:</label>
                      <textarea class="form-control" id="obs" name="obs" id="message-text"></textarea>
                    </div>

                    <div class="modal-footer">
                      <input id="enviar" class="btn btn-secondary" type="submit">
                    </div>

                  </form>


                </div>

              </div>
            </div>
          </div>
          <?php	} ?>
        </table>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $('#exampleModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget)
      var recipient = button.data('whatever')
      var email = button.data('email')
      var telefone = button.data('telefone')
      var celular = button.data('celular')
      var predio = button.data('predio')
      var end = button.data('end')
      var tipo = button.data('tipo')
      var and = button.data('and')
      var apart = button.data('apart')
      var elev = button.data('elev')
      var idade = button.data('idade')
      var det = button.data('det')
      var modal = $(this)
      modal.find('.modal-title').text(recipient)
      modal.find('.modal-body #recipent-name').val(recipient)
      modal.find('.modal-body #email-name').val(email)
      modal.find('.modal-body #telefone-name').val(telefone)
      modal.find('.modal-body #celular-name').val(celular)
      modal.find('.modal-body #predio-name').val(predio)
      modal.find('.modal-body #end-name').val(end)
      modal.find('.modal-body #tipo-name').val(tipo)
      modal.find('.modal-body #and-name').val(and)
      modal.find('.modal-body #apart-name').val(apart)
      modal.find('.modal-body #elev-name').val(elev)
      modal.find('.modal-body #idade-name').val(idade)
      modal.find('.modal-body #det-name').val(det)

    });
    $('#edit-modal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget)
      var recipient = button.data('whatever')
      var id = button.data('cod')
      var obs = button.data('obs')
      var modal = $(this)
      var recipient = button.data('whatever')
      modal.find('.modal-title').text(recipient)
      modal.find('.modal-body #nome').val(recipient)
      modal.find('.modal-body #cod').val(id)
      modal.find('.modal-body #obs').val(obs)



    })
  </script>
</body>

</html>