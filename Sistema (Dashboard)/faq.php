<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>ClinicDate</title>

  <!-- Favicons -->
  <link href="img/cw.png" rel="icon">
  <link href="img/cw.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <?php include('menu.php'); ?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt mb">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i> F.A.Q</h3>
            <br>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class=""><i class="dm-icon fa fa-info fa-3x"></i></a>
                </div>
                <h4>1. Utilidade do F.A.Q</h4>
                <p>O F.A.Q tem como função, trazer respostas às pergutans mais frequentes. <b>ATENÇÃO</b> leia todos as dúvidas comuns, pode ser que o seu questionamento já tenha sido respondido.</p>
              </div>
            </div>
            <!-- end dmbox -->
            
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class=""><i class="dm-icon fa fa-bug fa-3x"></i></a>
                </div>
                <h4>2. Atividade Incomum</h4>
                <p>Caso apareça uma mensagem ou informação que não seja habitual, feche o site e abra de novo, caso o erro persista entre em contato com o suporte para que a situação seja averiguada.</p>
              </div>
            </div>
            <!-- end dmbox -->

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class=""><i class="dm-icon fa fa-envelope-o fa-3x"></i></a>
                </div>
                <h4>3. Entrar em Contato</h4>
                <p>Em caso de alguma dúvida frequente sobre o funcionamento e funções desse site, que não esteja esclarecida abaixo, contate-nos em: </br> <b>rb.enterprise@gmail.com</b>
              </div>
            </div>
            <!-- end dmbox -->
          </div>
          <!--  /col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row content-panel">
          <h2 class="centered">Perguntas Mais Frequentes</h2>
          <div class="col-md-10 col-md-offset-1 mt mb">
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseOne">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Como realizar uma nova consulta?
                    </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>Vá até o menu, localizado no canto esquerdo de sua tela, selecione a opção CADASTRO e em sequência CONSULTA.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseTwo">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Cadastrei uma informação errada, o que devo fazer?
                    </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>Vá até o menu, localizado no canto esquerdo de sua tela, selecione a opção LISTAGEM e em sequência a área desejada, por fim encontre o dado intencional e escolha o ícone azul para editar as informações, e o ícone vermelho para deleta-lo.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseThree">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Como verificar a autencidade de uma consulta?
                    </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>Vá até o menu, localizado no canto esquerdo de sua tela, selecione a opção RELATÓRIO e em sequência escolha a opção de filtro de dados que convenha a sua situação, então realize uma pesquisa e conclua.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFour">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Como criar um novo usuário de acesso ou alterar um existente?
                    </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>Para o adicionar ou alterar um integrante de LOGIN, entre em contato com a equipe de suporte técnico.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseFive">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Como apagar um registro na aba atividades?
                    </a>
                </div>
                <div id="collapseFive" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>Todos os dados relatados em Registros de Atividades não podem ser editados ou apagados, eles são garantia da integridade das ações dos usuários.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="faq.html#collapseSix">
                    <em class="glyphicon glyphicon-chevron-right icon-fixed-width"></em>Como posso obter suporte técnico?
                    </a>
                </div>
                <div id="collapseSix" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>Para qualquer problema, ou ação que necessite de um suporte técnico, contate-nos em: <b>rb.enterprise@gmail.com</b> ou clique <a href="http://www.rbenterprise.com.br" target="_blank" ">AQUI</a>.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end accordion -->
          </div>
          <!-- col-md-10 -->
        </div>
        <!--  /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>RB Enterprise</strong>. All Rights Reserved
        </p>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
