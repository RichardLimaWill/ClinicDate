<!DOCTYPE html>
<html lang="en">


    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <?php
    include('menu.php')
    ?>
    <!--header start-->
   
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
     <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-pencil"><b></i>  Cadastro de Consulta</h3></b>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Informações da Consulta</h4>
              <form class="form-horizontal style-form" method="post" action="res_consulta.php">
                <div class="form-group">
                 
                  
                  
                  <div class="col-md-4">
                    <b>Paciente:</b>
                    <select required="" name="nome_paciente" class="form-control custom-select">
                    <option>Selecione o Paciente</option>
                   <?php
                   require('conexaobd.php');
                    $sql = "SELECT * FROM paciente ORDER BY nome ASC ";
                    $resultado = mysqli_query($link, $sql);
                    while ($cont = mysqli_fetch_array($resultado)) {
                      $paciente = $cont['nome'];
                      echo "
                      <option value='$paciente'>".$paciente." - ".$cont['cpf']."</option>  
                      ";
                    }
                    ?>   

                  </select>
                  </div>
                  <div class="col-md-4">
                    <b>Nome do Médico:</b>
                    <select required="" name="nome_medico" class="form-control custom-select">
                    <option>Selecione o Médico</option>
                   <?php
                   require('conexaobd.php');
                    $sql = "SELECT * FROM medico ORDER BY nome ASC ";
                    $resultado = mysqli_query($link, $sql);
                    while ($cont = mysqli_fetch_array($resultado)) {
                      $medico = $cont['nome'];
                      echo "
                      <option value='$medico'>".$medico." - ".$cont['especialidade']."</option>  
                      ";
                    }
                    ?>   

                  </select>
                  </div>
                  
                                                <div class="col-md-4">
                                                 <b> Data da Consulta:</b>
                                                <input required="" type="date" name="data_consulta" class="form-control" placeholder="dd/mm/aaaa">
                                            
                </div>
                 <p> &nbsp;</p>
                 <div class="col-md-4">
                    <b>Horário Inicial:</b>
                    <input required="" type="time" name="hora_inicio" class="form-control" placeholder="Digite o Horario Inicial">
                  </div>
                  <div class="col-md-4">
                    <b>Horário Final:</b>
                    <input required="" type="time" name="hora_final" class="form-control" placeholder="Digite o Horário Final">
                  </div>
                  <div class="col-md-4">
                    <b>Consulta Requerida:</b>
                    <select required="" name="consulta" class="form-control custom-select">
                    <option>Selecione a Tipo</option>
                   <?php
                   require('conexaobd.php');
                    $sql = "SELECT * FROM especialidade ORDER BY descricaoespecialidade ASC ";
                    $resultado = mysqli_query($link, $sql);
                    while ($cont = mysqli_fetch_array($resultado)) {
                      $descricaoespecial = $cont['descricaoespecialidade'];
                      echo "
                      <option value='$descricaoespecial'>".$descricaoespecial."</option>  
                      ";
                    }
                    ?>   

                  </select>
                  </div>
                  
                  <p> &nbsp;</p>
                  <div class="col-md-12">
                    <b>Observações:</b>
                    <input required="" type="text" class="form-control" name="observacoes" placeholder="Digite as observações">
                  </div>
                
                 
              
              </form>
                <p></p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<div class="col-md-12">
  
              <button type="submit" class="btn btn-theme"><i class="fa fa-check"></i>   Salvar</button>

              <button type="reset" value="Limpa" onClick="limpa()" class="btn btn-inverse"><i class="fa fa-remove"></i>  Limpar</button>
               <script>
function limpa() {
if(document.getElementById('nome_paciente').value!="") {
document.getElementById('nome_medico').value="";
document.getElementById('data_consulta').value="";
document.getElementById('hora_inicio').value="";
document.getElementById('hora_final').value="";
document.getElementById('telefone').value="";
document.getElementById('consulta').value="";
document.getElementById('observacoes').value="";
}
}
</script>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        <!-- INLINE FORM ELELEMNTS -->
        
        <!-- /row -->
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
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <!--custom switch-->
  <script src="lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="lib/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="lib/form-component.js"></script>

</body>

</html>
