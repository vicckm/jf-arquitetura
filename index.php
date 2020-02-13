<!DOCTYPE html>
<html lang="pt-br">
<?php session_start(); ?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/grid.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/owl.theme.default.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="js/owl.carousel.js"></script>
  <script>
    document.documentElement.classList.add("js");
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#telefone-name").mask("(000)0000-0000");
      $("#celular-name").mask("(000)00000-0000");
    })
  </script>
  <title>JF Arquitetura</title>
</head>

<body>
  <header>
    <div id="index" class="logo">
      <img src="img/logo.jpg" alt="JF Arquitetura" />
    </div>
    <nav class="nav-bar abs-pos">
      <ul>
        <li class="int-link"><a href="#index">Início</a></li>
        <li class="int-link"><a href="#quem-somos">Quem Somos</a></li>
        <li class="int-link">
          <a href="#area-de-atuacao">Área de Atuação</a>
        </li>
        <li class="int-link">
          <a href="#servicos-realizados">Serviços Realizados</a>
        </li>
        <li class="int-link"><a href="#orcamento">Orçamento</a></li>
      </ul>
    </nav>
  </header>
  <section class="ghost"></section>
  <main>
    <section id="inicio">
      <div id="wrapper">
        <div id="slider-area" class="owl-carousel">
         <div style="background-image: url(img/slide1.jpg);"></div>
          <div style="background-image: url(img/slide2.jpg);"></div>
          <div style="background-image: url(img/slide3.jpg);"></div>
        </div>

        <div class="slider-text">
          <h2>Seja bem-vindo</h2>
          <p>
            ao website da JF Arquitetura. Faça já o seu orçamento!
          </p>
          <a href="#orcamento">Orçamento</a>
        </div>
      </div>
    </section>

    <section id="quem-somos">
      <div class="container_grid">
        <h1 class="titulo-branco">Quem Somos</h1>
        <div class="grid-8">
          <img src="img/exemplo.png" alt="Funcionários" />
        </div>
        <div class="grid-8 quem-somos-texto">
          <h2>Nossa História</h2>
          <p>
            A JF Arquitetura é uma empresa que foi criada em 2018 para satisfazer a
            demanda de serviços de construção e reformas, vistoria predial e perícia de imóveis.
            Essa firma teve crescimento moderado com um aumento de números de contratos a
            partir do 2º semestre de 2018 em função do crescimento imobiliário no Rio de Janeiro.
          </p>
        </div>
      </div>
    </section>
    <section id="area-de-atuacao">
      <div class="container_grid">
        <h1 class="titulo">Área de Atuação</h1>
        <ul class="cards">
          <li class="grid-1-3">
            <a onclick="iniciaModal('modal-cartao')" class="titulo-mais-info"></a>
            <div class="card-titulo card-foto">
              <p onclick="iniciaModal('modal-cartao')" class="subtitulo-preto titulo-mais-info">
                Autovistoria Predial
              </p>
            </div>
            <div id="modal-cartao" class="modal-container-index">
              <div class="modal-index">
                <button class="fechar">x</button>
                <div class="modal-corpo">
                  <p class="subtitulo-preto">Autovistoria Predial</p>
                  <p>
                    A vistoria técnica, também conhecida como autovistoria, é
                    uma inspeção predial realizada por profissional legalmente
                    habilitado, com objetivo de avaliar o estado geral da
                    edificação no que diz respeito a sua conservação,
                    estabilidade e segurança.
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="grid-1-3">
            <a onclick="iniciaModal('modal-cartao-2')" class="titulo-mais-info"></a>
            <div class="card-titulo">
              <p onclick="iniciaModal('modal-cartao-2')" class="subtitulo-preto titulo-mais-info">
                Vistoria Locativa
              </p>
            </div>

            <div id="modal-cartao-2" class="modal-container-index">
              <div class="modal-index">
                <button class="fechar">x</button>
                <div class="modal-corpo">
                  <p class="subtitulo-preto">Vistoria Locativa</p>
                  <p>
                    A Vistoria Locativa registra para o locador e locatário o
                    estado imóvel antes e depois do período de locação. Evita
                    dúvidas e incertezas que normalmente ocorrem quando é
                    feita a vistoria e possibilita a comparação com o estado
                    inicial do imóvel.
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li class="grid-1-3">
            <a onclick="iniciaModal('modal-cartao-3')" class="titulo-mais-info"></a>
            <div class="card-titulo">
              <p onclick="iniciaModal('modal-cartao-3')" class="subtitulo-preto titulo-mais-info">
                Laudo Técnico
              </p>
            </div>

            <div id="modal-cartao-3" class="modal-container-index">
              <div class="modal-index">
                <button class="fechar">x</button>
                <div class="modal-corpo">
                  <p class="subtitulo-preto">Laudo Técnico</p>
                  <p>
                    É de fundamental importância porque possibilita detectar a
                    ocorrência de possíveis patologias construtivas nas
                    diversas edificações, independente da idade do imóvel.
                    Nele são apontados todos os problemas que estejam ou
                    venham a causar danos de natureza materiais, pessoas e de
                    responsabilidades civis.
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="grid-1-3">
            <a onclick="iniciaModal('modal-cartao-4')" class="titulo-mais-info"></a>
            <div class="card-titulo">
              <p onclick="iniciaModal('modal-cartao-4')" class="subtitulo-preto titulo-mais-info titulo-meio">
                Laudo Técnico de Recebimento de Obra
              </p>
            </div>

            <div id="modal-cartao-4" class="modal-container-index">
              <div class="modal-index">
                <button class="fechar">x</button>
                <div class="modal-corpo">
                  <p class="subtitulo-preto">
                    Laudo Técnico de Recebimento de Obra
                  </p>
                  <p>
                    Trata-se de uma vistoria que tem como objetivo formalizar
                    a entrega da obra junto ao construtor, mediante
                    verificação do seu estado construtivo, bem como de seus
                    sistemas instalados, de forma a analisar a sua
                    conformidade técnica com projetos, memoriais descritivos e
                    demais documentação apresentada previamente.
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="grid-1-3">
            <a onclick="iniciaModal('modal-cartao-5')" class="titulo-mais-info"></a>
            <div class="card-titulo">
              <p onclick="iniciaModal('modal-cartao-5')" class="subtitulo-preto titulo-mais-info titulo-meio">
                Laudo Técnico de Vizinhança
              </p>
            </div>

            <div id="modal-cartao-5" class="modal-container-index">
              <div class="modal-index">
                <button class="fechar">x</button>
                <div class="modal-corpo">
                  <p class="subtitulo-preto">Laudo Técnico de Vizinhança</p>
                  <p>
                    Este tipo de laudo tem por objetivo demonstrar em uma
                    determinada data, a real situação dos imóveis que existem
                    no entorno de uma futura obra.
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li class="grid-1-3">
            <a onclick="iniciaModal('modal-cartao-6')" class="titulo-mais-info"></a>
            <div class="card-titulo">
              <p onclick="iniciaModal('modal-cartao-6')" class="subtitulo-preto titulo-mais-info titulo-meio">
                Laudo de Inspeção de Edifício em Garantia
              </p>
            </div>

            <div id="modal-cartao-6" class="modal-container-index">
              <div class="modal-index">
                <button class="fechar">x</button>
                <div class="modal-corpo">
                  <p class="subtitulo-preto">
                    Laudo de Inspeção de Edifício em Garantia
                  </p>
                  <p>
                    Este laudo serve para constatar as condições técnicas da
                    obra, uma vez que já foi entregue, e encontra-se em pleno
                    uso e funcionamento com todos os sitemas instalados, agora
                    na fase pós entrega.
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="grid-1-3">
            <a onclick="iniciaModal('modal-cartao-7')" class="titulo-mais-info"></a>
            <div class="card-titulo">
              <p onclick="iniciaModal('modal-cartao-7')" class="subtitulo-preto titulo-mais-info titulo-ultimo">
                Laudo Técnico de Reforma
              </p>
            </div>

            <div id="modal-cartao-7" class="modal-container-index">
              <div class="modal-index">
                <button class="fechar">x</button>
                <div class="modal-corpo">
                  <p class="subtitulo-preto">Laudo Técnico de Reforma</p>
                  <p>
                    O objetivo do Laudo Técnico de Reforma visa reduzir a
                    possibilidade da existência de atropelos durante a
                    execução dos serviços, que normalmente ocorrem numa
                    reforma.
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li class="grid-1-3">
            <a onclick="iniciaModal('modal-cartao-8')" class="titulo-mais-info"></a>
            <div class="card-titulo">
              <p onclick="iniciaModal('modal-cartao-8')" class="subtitulo-preto titulo-mais-info">
                Manutenção Predial
              </p>
            </div>

            <div id="modal-cartao-8" class="modal-container-index">
              <div class="modal-index">
                <button class="fechar">x</button>
                <div class="modal-corpo">
                  <p class="subtitulo-preto">Manutenção Predial</p>
                  <p>
                    Manutenção predial e fachadas a empresa atende a
                    condomínios, prédios residenciais e comercias com serviço
                    de reforma de fachadas e serviços de manutenção
                    preventiva, com serviços períodicos de manutenção
                    preventiva ou serviços avulsos.
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li class="grid-1-3">
            <a onclick="iniciaModal('modal-cartao-9')" class="titulo-mais-info"></a>
            <div class="card-titulo">
              <p onclick="iniciaModal('modal-cartao-9')" class="subtitulo-preto titulo-mais-info titulo-ultimo">
                Desenvolvimento de Projetos
              </p>
            </div>

            <div id="modal-cartao-9" class="modal-container-index">
              <div class="modal-index">
                <button class="fechar">x</button>
                <div class="modal-corpo">
                  <p class="subtitulo-preto">Desenvolvimento de Projetos</p>
                  <p>
                    Elaboramos projetos arquitetônicos para os mais diversos
                    fins, bem como regularização de imóveis na prefeitura,
                    reforma e revitalização de edificações, projetos
                    executivos em instalações em geral.
                  </p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section id="servicos-realizados">
      <div class="container_grid">
        <h1 class="titulo-branco">Serviços Realizados</h1>
        <ul class="album">
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/niteroi/1.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação feita em Niteroí</div>
            </div>
          </li>
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/niteroi/2.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação feita em Niteroí</div>
            </div>
          </li>
<!--
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/niteroi/3.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação feita em Niteroí</div>
            </div>
          </li>
-->
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/barra-da-tijuca/1.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis na Barra da Tijuca</div>
            </div>
          </li>
<!--
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/barra-da-tijuca/2.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis na Barra da Tijuca</div>
            </div>
          </li>
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/barra-da-tijuca/3.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis na Barra da Tijuca</div>
            </div>
          </li>
-->
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/barra-da-tijuca/4.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis na Barra da Tijuca</div>
            </div>
          </li>
<!--
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/barra-da-tijuca/5.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis na Barra da Tijuca</div>
            </div>
          </li>
-->
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/recreio/1.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis no Recreio</div>
            </div>
          </li>
<!--
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/recreio/2.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis no Recreio</div>
            </div>
          </li>
-->
<!--
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/recreio/3.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis no Recreio</div>
            </div>
          </li>
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/recreio/4.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis no Recreio</div>
            </div>
          </li>
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/recreio/5.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis no Recreio</div>
            </div>
          </li>
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/recreio/6.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis no Recreio</div>
            </div>
          </li>
-->
          <li class="album-molde grid-1-3">
            <img class="album-image" src="img/album/recreio/7.jpg" />
            <div class="album-hover">
              <div class="album-text ">Avaliação em Perícia de Imóveis no Recreio</div>
            </div>
          </li>

        </ul>
      </div>
    </section>
    <section id="orcamento">
      <div class="container_grid">
        <h1 class="titulo">Orçamento</h1>

        <h2 class="subtitulo-preto">Atendemos apenas no Rio e Grande Rio</h2>

        <form action="recebe.php" method="post">
          <div class="contato_form grid-8">
            <label for="nome">Nome *</label>
            <input class="input_form" type="text" id="nome"  value="<?php if(isset($_SESSION['value_nome'])) {
    
    echo $_SESSION['value_nome'];
     
 }  ?>" name="nome" placeholder="Ex.: Maria Joaquina Rodrigues" />
            <?php
							if(!empty($_SESSION['value_nome'])){
								//echo "value='".$_SESSION['value_nome']."'";
								unset($_SESSION['value_nome']);
                                echo"<br>";
							}
						 ?>	
						 <?php
							if(!empty($_SESSION['vazio_nome'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_nome']."</p>";
								unset($_SESSION['vazio_nome']);
                                echo"<br>";
							}
						 ?>

            <label for="email">E-mail *</label>
            <input class="input_form" type="email" id="email" value="<?php if(isset($_SESSION['value_email'])) {
    
    echo $_SESSION['value_email'];
     
 }  ?>" name="email" placeholder="Ex.: seuemail@gmail.com" />
            <?php
							if(!empty($_SESSION['value_email'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_email']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_email'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_email']."</p>";
								unset($_SESSION['vazio_email']);
							}
						 ?>

            <label for="tel">Telefone</label>
            <input class="input_form" type="text" value="<?php if(isset($_SESSION['value_tel'])) {
    
    echo $_SESSION['value_tel'];
     
 }  ?>" id="tel" name="tel" placeholder="Digite seu DDD + número do telefone (opcional)" />

            <label for="cel">Celular *</label>
            <input class="input_form" type="text"  id="cel" value="<?php if(isset($_SESSION['value_cel'])) {
    
    echo $_SESSION['value_cel'];
     
 }  ?>" name="cel" placeholder="Digite seu DDD + número do celular" autocomplete="off" />
            <?php
							if(!empty($_SESSION['value_cel'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_cel']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_cel'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_cel']."</p>";
								unset($_SESSION['vazio_cel']);
							}
						 ?>

            <label for="nomedopredio">Nome/Razão Social do prédio *</label>
            <input class="input_form" type="text" value="<?php if(isset($_SESSION['value_predio'])) {
    
    echo $_SESSION['value_predio'];
     
 }  ?>" id="nomedopredio" name="nomedopredio" placeholder="Ex.: Condomínio Vicente de Carvalho" />
            <?php
							if(!empty($_SESSION['value_predio'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_predio']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_predio'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_predio']."</p>";
								unset($_SESSION['vazio_predio']);
							}
						 ?>			

            <label for="endereco">Endereço do prédio *</label>
            <input class="input_form" type="text" id="end" value="<?php if(isset($_SESSION['value_endereco'])) {
    
    echo $_SESSION['value_endereco'];
     
 }  ?>"  name="endereco" placeholder="Ex.: Rua São Clemente, 133" />
         <?php
							if(!empty($_SESSION['value_endereco'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_endereco']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_endereco'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_endereco']."</p>";
								unset($_SESSION['vazio_endereco']);
							}
						 ?>			
         
         
          </div>

          <div class="contato_form grid-8">
            <div class="tipo-de-servico">
              <label for="">Tipo de serviço *</label>
              <select class="form-control" required name="tipo_id" id="tipo_id" placeholder="" name="tipo_id">
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
            <input class="input_form" type="number" min="0" value="<?php if(isset($_SESSION['value_andares'])) {
    
    echo $_SESSION['value_andares'];
     
 }  ?>" id="numeroAndares" name="andares" placeholder="Ex.: 10"  />
            
							<?php
							if(!empty($_SESSION['value_andares'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_andares']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_andares'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_andares']."</p>";
								unset($_SESSION['vazio_andares']);
							}
						 ?>			

            <label for="">Nº de apartamentos ou salas *</label>
            <input class="input_form" type="number" value="<?php if(isset($_SESSION['value_apart'])) {
    
    echo $_SESSION['value_apart'];
     
 }  ?>" min="0" id="numeroAptoOuSalas" name="aps" placeholder="Ex.: 20" autocomplete="off"  />
           <?php
							if(!empty($_SESSION['value_apart'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_apart']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_apart'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_apart']."</p>";
								unset($_SESSION['vazio_apart']);
							}
						 ?>			
            

            <label for="">Nº de elevadores *</label>
            <input class="input_form" type="number" value="<?php if(isset($_SESSION['value_elev'])) {
    
    echo $_SESSION['value_elev'];
     
 }  ?>" min="0" id="numeroElevadores" name="elev" placeholder="Ex.: 3" autocomplete="off" />
            <?php
							if(!empty($_SESSION['value_elev'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_elev']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_elev'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_elev']."</p>";
								unset($_SESSION['vazio_elev']);
							}
						 ?>			
            

            <label for="">Idade do prédio *</label>
            <input class="input_form" type="number" value="<?php if(isset($_SESSION['value_idade'])) {
    
    echo $_SESSION['value_idade'];
     
 }  ?>" min="0" id="idadePredio" name="idade" placeholder="Ex.: 50" autocomplete="off" />
         <?php
							if(!empty($_SESSION['value_idade'])){
								//echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_idade']);
							}
						 ?>
						 <?php
							if(!empty($_SESSION['vazio_idade'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_idade']."</p>";
								unset($_SESSION['vazio_idade']);
							}
						 ?>			
          </div>
          <div class="form_textarea grid-16">
            <label for="detalhe">Detalhe sua solicitação</label>
            <textarea id="detalhe" name="det" maxlength="255" placeholder="Descreva aqui com detalhes a sua solicitação"></textarea>
          </div>
          <button type="submit" class="botao grid-4">Enviar</button>
        </form>
      </div>
    </section>
    <footer class="_footer">
      <p>JF Arquitetura - Todos os direitos reservados</p>
      <p>Feito com <span class="heart">❤</span> pelo Grupo D - 2019 CSI</p>
    </footer>
  </main>
  <script type="text/javascript" src="js/simple-slide"></script>
  <script src="https://kit.fontawesome.com/503bd455be.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>