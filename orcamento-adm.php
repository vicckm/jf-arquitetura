<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <?php include 'imports.php'; ?>
  <title>Controle dos Orçamentos</title>

  <script>
    $(document).ready(function() {
      $("input[name='status']").click(function() {
        var status = $(this).prop('checked') ? "Feito" : "Pendente";
        var cod = $(this).val();
        $.ajax({
          url: 'status.php',
          type: 'POST',
          data: 'status=' + status + '&cod=' + cod,
          success:
          function(data) {
             window.location.reload()
            $("#resposta_ajax").addClass("alert alert-success").html(data);
          }
        });
      });
    });
  </script>
</head>

<style>
  body {
    height: 100vh;
  }
  
  #controle_orcamento {
    height: 100vh;
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


  #controle_orcamento .botao {
    margin-top: 10px;
    outline: none;
    letter-spacing: 0.1em;
  }

  #controle_orcamento a {
    text-align: center;
    font-size: 16px;
  }
</style>

<body>
  <?php include 'header.php'; ?>
  <section id="controle_orcamento">
    <div class="container_grid">
      <a class="botao grid-3" href="painel.php"><i class="fas fa-angle-left mr-3"></i>Voltar</a>
      <h1 class="titulo">Orçamentos Pendentes</h1>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Data &amp; Hora</th>
              <th scope="col">Serviço</th>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Telefone</th>
              <th scope="col">Celular</th>
              <th scope="col">Informações</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <?php 
						include 'conexao.php';
						//$sql = "SELECT * FROM `orcamento`";
                        
                        $sql = "SELECT o.*, t.nome AS 'tipo_nome', DATE_FORMAT(`data`, '%d/%m/%Y &nbsp; &nbsp; &nbsp; %H:%i') as 'data' 
                                FROM orcamento o, tipo t 
                                WHERE o.tipo_id = t.id and o.status = 'Pendente' ";
                        
                        
						$busca = mysqli_query($con, $sql);
        
						while ($array = mysqli_fetch_array($busca)){
						$cod = $array['cod'];
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
                            
                            
                            
						?>
              <td><?php echo $data ?></td>
              <td><?php echo $tipo_nome ?></td>
              <td><?php echo $nome_cli ?></td>
              <td><?php echo $email ?></td>
              <td><?php echo $telefone ?></td>
              <td><?php echo $cel ?></td>

              <td>
                <!-- Button trigger modal -->

                <button type="button" class="btn btn-dark ml-4" data-toggle="modal" data-det="<?php echo $det ?>" data-idade="<?php echo $idade_predio ?>" data-elev="<?php echo $elev ?>" data-apart="<?php echo $apart ?>" data-and="<?php echo $and ?>" data-tipo="<?php echo $tipo_nome ?>" data-end="<?php echo $end ?>" data-target="#exampleModal" data-predio="<?php echo $nome_predio ?>" data-telefone="<?php echo $telefone ?>" data-celular="<?php echo $cel ?>" data-email="<?php echo $email ?>" data-whatever="<?php echo $nome_cli ?>">+</button>


              <td>
                <form action="" method="post">
                  <input class="ml-3" type="checkbox" name="status" value="<?php echo $cod ?>" <?php if($array['status'] == "Feito"){echo 'checked="checked"';} ?> />
                </form>
              </td>



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
                            <label for="recipient-name" class="form-label ml-3">Nome:</label>
                            <input type="text" disabled class="form-control ml-3" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-4">Email:</label>
                            <input type="text" disabled class="form-control ml-4" id="email-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-3">Telefone:</label>
                            <input type="text" disabled class="form-control ml-3" id="telefone-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-4">Celular:</label>
                            <input type="text" disabled class="form-control ml-4" id="celular-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-3">Nome do Predio/Casa:</label>
                            <input type="text" disabled class="form-control ml-3" id="predio-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-4">Endereço do Predio/Casa:</label>
                            <input type="text" disabled class="form-control ml-4" id="end-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-3">Tipo de Serviço:</label>
                            <input type="text" disabled class="form-control ml-3" id="tipo-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-4">Andares:</label>
                            <input type="text" disabled class="form-control ml-4" id="and-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-3">Apartamentos ou Salas:</label>
                            <input type="text" disabled class="form-control ml-3" id="apart-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-4">Elevadores</label>
                            <input type="text" disabled class="form-control ml-4" id="elev-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-3">Idade do Prédio</label>
                            <input type="text" disabled class="form-control ml-3" id="idade-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-label ml-3">Detalhes</label>
                            <textarea class="form-control ml-3" type="text" disabled id="det-name" name="data-det" cols="35" rows="3"></textarea>
                          </div>


                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </tr>

            <?php } ?>
          </tbody>

        </table>
      </div>
    </div>

  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $('#exampleModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
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
      modal.find('.modal-body input').val(recipient)
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

    })
  </script>
</body>

</html>