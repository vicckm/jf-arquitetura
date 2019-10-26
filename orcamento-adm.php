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
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#telefone-name").mask("(000)0000-0000");
      $("#celular-name").mask("(000)00000-0000");
    })
  </script>
  <script>
    document.documentElement.classList.add("js")
  </script>

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
         <a href="logout.php">Sair</a>
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
						//$sql = "SELECT * FROM `orcamento`";
                        
                        $sql = "SELECT o.*, t.nome AS 'tipo_nome' 
                                FROM orcamento o, tipo t 
                                WHERE o.tipo_id = t.id";
                        
                        
						$busca = mysqli_query($con, $sql);
        
						while ($array = mysqli_fetch_array($busca)){
						$cod = $array['cod'];
						$tipo_nome = $array['tipo_nome'];
						$nome_cli = $array['nome_cli'];
                        $nome_predio = $array['nome_predio'];    
						$email = $array ['email'];
						$telefone = $array['telefone'];
						$cel = $array['cel'];
						$status = $array['status'];
                        $and = $array['andares'];
                        $apart = $array['apart_salas'];
                        $elev = $array['elevadores'];
                        $end = $array['endereco'];
                        $idade_predio = $array['idade_pred'];
                        $det = $array['detalhes'];    
                            
                            
                            
						?>

                <td><?php echo $tipo_nome ?></td>
                <td><?php echo $nome_cli ?></td>
                <td><?php echo $email ?></td>
                <td id="tel"><?php echo $telefone ?></td>
                <td id="cel"><?php echo $cel ?></td>
                <td>
                  <!-- Button trigger modal -->

                  <button type="button" class="btn btn-dark ml-4" data-toggle="modal" data-det="<?php $det ?>" data-idade="<?php echo $idade_predio ?>" data-elev="<?php echo $elev ?>" data-apart="<?php echo $apart ?>" data-and="<?php echo $and ?>" data-tipo="<?php echo $tipo_nome ?>" data-end="<?php echo $end ?>" data-target="#exampleModal" data-predio="<?php echo $nome_predio ?>" data-telefone="<?php echo $telefone ?>" data-celular="<?php echo $cel ?>" data-email="<?php echo $email ?>" data-whatever="<?php echo $nome_cli ?>" data-det-name="<?php echo $det?>">+</button>



                </td>
                <td><?php echo $status ?></td>

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
                              <input type="text" disabled class="form-control ml-3" id="recipient-name">
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
                              <textarea class="form-control ml-3" disabled id="det-name" cols="50" rows="5"></textarea>
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
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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