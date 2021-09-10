<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<?php
include('menu.php');
?>
    
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><b><i class="fa fa-calendar-o"></i> Consultas Agendadas</h3></b>
        
              
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">

                    
            <div class="content-panel">

              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                  	<th><i class="fa fa-calendar"></i> Data</th>
                    <th><i class="fa fa-clock-o"></i> Horário</th>
                    <th><i class="fa fa-user"></i> Paciente</th>
                    <th><i class="fa fa-user-md"></i> Médico</th>
                    <th><i class="fa fa-check"></i> Status da Consulta</th>
                  </tr>
                </thead>
                <tbody>                	

<?php

$concon = 'Confirmada';
$conneu = 'Aguardando';
$concan = 'Suspendida';  


$sqlselect = "SELECT * FROM consulta ORDER BY data_consulta ASC ";

require("conexaobd.php");

$result = mysqli_query($link, $sqlselect);

while ($cont = mysqli_fetch_array($result)) {

	if ($cont['status'] === $concon ) {
		$cor = 'btn-success';
    $frase = 'Confirmada';
    $icone = "<i class='fa fa-check'></i>";
	}elseif ($cont['status'] === $concan ) {
		$cor = 'btn-danger';
    $frase = 'Suspendida';
    $icone = "<i class='fa fa-times'></i>";
	}else{
		$cor = 'btn-warning';
    $frase = 'Aguardando';
    $icone = "<i class='fa fa-repeat'></i>";
	}

  echo "<tr>
    <td>".$cont['data_consulta']."</td>
    <td>".$cont['hora_inicio']."</td>
    <td>".$cont['nome_paciente']."</td>
    <td>".$cont['nome_medico']."</td>

    <td>
    <div class='btn-group'>
    <button type='button' class='btn ".$cor." dropdown-toggle btn-sm' data-toggle='dropdown'> <b> ".$icone." ".$frase." </b> <span class='caret'></span></button>
    <ul class='dropdown-menu' role='menu'>
    <li><a href='agenda_status.php?status=".$concon."&id=".$cont['id']."&paciente=".$cont['nome_paciente']."&medico=".$cont['nome_medico']."'><i class='fa fa-check'></i> Confirmar</a></li>
    <li><a href='agenda_status.php?status=".$conneu."&id=".$cont['id']."&paciente=".$cont['nome_paciente']."&medico=".$cont['nome_medico']."'><i class='fa fa-repeat'></i>  Neutro</a></li>
    <li><a href='agenda_status.php?status=".$concan."&id=".$cont['id']."&paciente=".$cont['nome_paciente']."&medico=".$cont['nome_medico']."'><i class='fa fa-times'></i>  Cancelar</a></li>
    </ul>
    </div>
    </td>
    </tr>";
                            

  }
?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>RB Enterprise</strong>. All Rights Reserved
        </p>
        
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
  <script src="assets/js/sparkline-chart.js"></script> 

  <!--script for this page-->

</body>

</html>
