<!DOCTYPE html>
<html lang="en">

<?php
include('menu.php');
?>
    
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><b><i class="fa fa-book "></i> Relatório de Consultas Feitas</h3></b>
        
              
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">

                    
            <div class="content-panel">

              <table class="table table-striped table-advance table-hover">

               <div class="col-md-12">
                <div class="input-group date form_datetime-component">
                  <form method="POST" action="">
                      <input type="text" class="form-control" name="pesquisa" placeholder="Insira a data da Consulta">
                      <span class="input-group-btn">
                        <button type="submit"  value="pesquisa" class="btn btn-theme date-set"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
</div>
                <hr>
                <thead>
                  <tr>
                  	<th><i class="fa fa-calendar"></i> Data</th>
                    <th><i class="fa fa-clock-o"></i> Hora Inicial</th>
                    <th><i class="fa fa-clock-o"></i> Hora Final</th>
                    <th><i class="fa fa-user"></i> Paciente</th>
                    <th><i class="fa fa-user-md"></i> Médico</th>
                    <th class="hidden-phone"><i class="fa fa-check"></i> Consulta Requerida</th>
                    
                    
                   
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php


@$pesquisa = $_POST['pesquisa'];

if(isset($pesquisa)){
  $sqlselect = "SELECT * FROM consulta WHERE data_consulta LIKE '%$pesquisa%' ORDER BY data_consulta ASC ";
}else{
  $sqlselect = "SELECT * FROM consulta ORDER BY data_consulta ASC";
}

require("conexaobd.php");

$result = mysqli_query($link, $sqlselect);

  while ($cont = mysqli_fetch_array($result)) {

                            echo "<tr>
                                  
                                  <td>".$cont['data_consulta']."</td>
                                  <td>".$cont['hora_inicio']."</td>
                                  <td>".$cont['hora_final']."</td>
                                  <td>".$cont['nome_paciente']."</td>
                                  <td>".$cont['nome_medico']."</td>
                                  <td>".$cont['consulta']."</td>
                         
                                 
       
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
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
