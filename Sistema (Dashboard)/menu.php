<?php  
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }
 
$logado = $_SESSION['usuario'];
?>

<!--header start-->
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
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
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
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Menu de Navegação"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>CLINIC<span>DATE</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <button class="logout" data-toggle="modal" data-target="#myModalz">Desconectar</button>
          </li>
        </ul>
      </div>
    </header>
    <!-- Modal -->
              <div class="modal fade" id="myModalz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">ENCERRAR SESSÃO</h4>
                    </div>
                    <div class="modal-body">
                      Sua sessão será encerrada, você quer mante-lá ou realmente deseja se <B>DESCONECTAR?</B>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Manter</button>
                      <a href="desconectar.php"><button type="button" class="btn btn-danger">Desconectar</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    <!--header end-->
<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="index.php"><img src="img/cw.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">
          Castillo Will
          </h5>
          <li class="mt">
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dados gerais</span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="agenda.php">
              <i class="fa fa-calendar"></i>
              <span>Agenda</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-plus"></i>
              <span>Cadastro</span>
              </a>
            <ul class="sub">
              <li><a href="paciente.php">Paciente</a></li>
              <li><a href="funcionario.php">Funcionário</a></li>
              <li><a href="medico.php">Médico</a></li>
              <li><a href="consulta.php">Consulta</a></li>
            </ul>
          </li>

           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-sort-alpha-desc"></i>
              <span>Listagem</span>
              </a>
            <ul class="sub">
              <li><a href="listagem_paciente.php">Pacientes</a></li>
              <li><a href="listagem_funcionario.php">Funcionários</a></li>
              <li><a href="listagem_medico.php">Médicos</a></li>
              <li><a href="listagem_consulta.php">Consultas</a></li>

            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Relatório</span>
              </a>
            <ul class="sub">
              <li><a href="relatorio_consultas_feitas.php">Consultas Feitas</a></li>
              <li><a href="relatorio_consultas_medico.php">Consultas por Médico</a></li>
              <li><a href="relatorio_consultas_pacientes.php">Consultas por Paciente</a></li>

              <li><a href="relatorio_consultas_procedimento.php">Consultas por Especialidade</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="logs.php">
              <i class="fa fa-sitemap"></i>
              <span>Atividades</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="faq.php">
              <i class="fa fa-question-circle"></i>
              <span>F.A.Q</span>
              </a>
          </li>

        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

