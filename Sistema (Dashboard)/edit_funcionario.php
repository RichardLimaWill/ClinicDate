<?php

$id = $_GET['id'];

require 'conexaobd.php';
$sql = mysqli_query($link, "SELECT * FROM funcionario WHERE id = '$id'");
while($cont = mysqli_fetch_array($sql)){

?>

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
        <h3><i class="fa fa-pencil"><b></i>  Edição do Funcionário</h3></b>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Informações Gerais</h4>
              <form class="form-horizontal style-form" method="post" action="res_edit_funcionario.php">
                <div class="form-group">
                 
                  
                  
                  <div class="col-md-2">
                    <b>ID:</b>
                    <input type="text" name="id"  class="form-control" placeholder="ID AUTOMÁTICO" readonly="" value="<?php echo $cont['id']; ?>">
                  </div>
                  <div class="col-md-6">
                    <b>Nome:</b>
                    <input type="text" name="nome" class="form-control" placeholder="Digite o Nome" value="<?php echo $cont['nome']; ?>">
                  </div>
                  <div class="col-md-4">
                                                
                                                     <b>Sexo:</b>

                                                    <select name="sexo" class="form-control custom-select">
                                                        <option value="<?php echo $cont['sexo']; ?>">Manter o <?php echo $cont['sexo']; ?> </option>
                                                        <option value="Masculino">Masculino</option>
                                                        <option value="Feminino">Feminino</option>
                                                        
                                                    </select>
                                                    
<p>
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</p> 
                                       </div>
                                                <div class="col-md-4">
                                                 <b> Data de Nascimento: </b>
                                                <input type="date" name="data_nascimento" class="form-control" placeholder="dd/mm/aaaa" value="<?php echo $cont['data_nascimento']; ?>">
                                            
                </div>
                 <div class="col-md-2">
                    <b>RG:</b>
                    <input type="text" name="rg" class="form-control" placeholder="Digite o RG" value="<?php echo $cont['rg']; ?>">
                  </div>
                  <div class="col-md-3">
                    <b>Telefone Residencial:</b>
                    <input type="text" class="form-control" name="telefone" placeholder="Digite o Telefone Residencial" value="<?php echo $cont['telefone']; ?>">
                  </div>
                  <div class="col-md-3">
                    <b>Celular:</b>
                    <input type="text" class="form-control" name="celular" placeholder="Digite o Celular" value="<?php echo $cont['celular']; ?>">
                  </div>
                  <p>&nbsp;</p>
                 
                  <div class="col-md-4">
                    <b>CPF:</b>
                    <input type="text" name="cpf_funcionario"  class="form-control" placeholder="Digite o CPF" value="<?php echo $cont['cpf_funcionario']; ?>">
                  </div>
                  <div class="col-md-4">
                    <b>Email:</b>
                    <input type="text" class="form-control" name="email" placeholder="Digite o Email" value="<?php echo $cont['email']; ?>">
                  </div>
                  <div class="col-md-4">

                  <b>Cargo:</b>
                  <select name="cargo" class="form-control custom-select">
                  <option value="<?php echo $cont['cargo']; ?>">Manter o <?php echo $cont['cargo']; ?> </option>
                  <?php
                }
                   require('conexaobd.php');
                    $sql = "SELECT descricaocargo FROM cargo ORDER BY descricaocargo ASC ";
                    $resultado = mysqli_query($link, $sql);
                    while ($cont = mysqli_fetch_array($resultado)) {
                      echo "
                      <option>".$cont['descricaocargo']."</option>  
                      ";
                    }
                    require 'conexaobd.php';
                    $sql = mysqli_query($link, "SELECT * FROM funcionario WHERE id = '$id'");
                    while($cont = mysqli_fetch_array($sql)){
                    ?>   
                                                        
                  </select>
                  </div>


<p></p>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="col-md-12">
                  <h4 class="mb"><i class="fa fa-angle-right"></i> Endereço</h4>
                </div>
              <div class="col-md-6">
                    <b>Rua:</b>
                    <input type="text" name="rua" class="form-control" placeholder="Digite o nome da Rua" value="<?php echo $cont['rua']; ?>">
                  </div>
                  <div class="col-md-2">
                    <b>Número:</b>
                    <input type="text" name="numero" class="form-control" placeholder="Digite o Número " value="<?php echo $cont['numero']; ?>">
                  </div>
                  <div class="col-md-4">
                    <b>Bairro:</b>
                    <input type="text" name="bairro" class="form-control" placeholder="Digite o Bairro" value="<?php echo $cont['bairro']; ?>">
                  </div>
                  <p>  &nbsp;</p> 
                  <div class="col-md-4">
                    <b>Complemento:</b>
                    <input type="text" name="complemento" class="form-control" placeholder="Digite o Complemento" value="<?php echo $cont['complemento']; ?>">
                  </div>
                  <div class="col-md-2">
                    <b>Cidade:</b>
                    <input type="text" name="cidade" class="form-control" placeholder="Digite a Cidade" value="<?php echo $cont['cidade']; ?>">
                  </div>
<div class="col-md-4">
                                                
                                                     <b>Estado:</b>

                                                    <select name="estado" class="form-control custom-select">
                                                        <option value="<?php echo $cont['estado']; ?>">Manter o <?php echo $cont['estado']; ?> </option>
                                                        <option value="Acre">Acre</option>
                                                        <option value="Alagoas">Alagoas</option>
                                                        <option value="Amapá">Amapá</option>
                                                        <option value="Amazonas">Amazonas</option>
                                                        <option value="Bahia">Bahia</option>
                                                        <option value="Ceará">Ceará</option>
                                                        <option value="Distrito Federal">Distrito Federal</option>
                                                        <option value="Espírito Santo">Espírito Santo</option>
                                                        <option value="Goiás">Goiás</option>
                                                        <option value="Maranhão">Maranhão</option>
                                                        <option value="Mato Grosso">Mato Grosso</option>
                                                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                                        <option value="Minas Gerais">Minas Gerais</option>
                                                        <option value="Pará">Pará</option>
                                                        <option value="Paraíba">Paraíba</option>
                                                        <option value="Paraná">Paraná</option>
                                                        <option value="Pernambuco">Pernambuco</option>
                                                        <option value="Piauí">Piauí</option>
                                                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                                                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                                        <option value="Rondônia">Rondônia</option>
                                                        <option value="Roraima">Roraima</option>
                                                        <option value="Santa Catarina">Santa Catarina</option>
                                                        <option value="São Paulo">São Paulo</option>
                                                        <option value="Sergipe">Sergipe</option>
                                                        <option value="Tocantins">Tocantins</option>
                                                        
                                                    </select>
                                                    
<p>
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</p> 
                                       </div>
                  <div class="col-md-2">
                    <b>CEP:</b>
                    <input type="text" name="cep" class="form-control" placeholder="Digite o CEP" value="<?php echo $cont['cep']; ?>">
                  </div>
              </form>
              
                <p>  &nbsp;</p> 
<div class="col-md-12">
              <button type="submit" class="btn btn-theme"><i class="fa fa-check"></i>  Salvar</button>
              <button type="reset" value="Limpa" onClick="limpa()" class="btn btn-inverse"><i class="fa fa-repeat"></i>  Resetar</button>
              <button type='button' data-toggle='modal' data-target='#myModal' class='btn btn-danger'><i class='fa fa-remove'></i> Deletar</button>
<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
   <div class='modal-content'>
     <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title' id='myModalLabel'>Confirmação Necessária!</h4>
      </div>
      <div class='modal-body'>
        Você realmente deseja deletar <b><?php echo $cont['nome']; ?></b> e todos os seus dados?
      </div>
      <div class='modal-footer'>
      <button type='button' class='btn btn-default' data-dismiss='modal'>Cancelar</button>
      <?php 
      echo "<a href='del_funcionario.php?id=".$cont['id']."&rg=".$cont['rg']."&nome=".$cont['nome']."'><button type='button' class='btn btn-danger'>Deletar</button></a>";
      ?>
      </div>
    </div>
  </div>
</div>
</div>
              <?php
            }
              ?> <script>
function limpa() {
if(document.getElementById('id').value!="") {
document.getElementById('nome').value="";
document.getElementById('sexo').value="";
document.getElementById('data_nascimento').value="";
document.getElementById('rg').value="";
document.getElementById('telefone').value="";
document.getElementById('celular').value="";
document.getElementById('email').value="";
document.getElementById('cargo').value="";
document.getElementById('cpf').value="";
document.getElementById('rua').value="";
document.getElementById('numero').value="";
document.getElementById('bairro').value="";
document.getElementById('complemento').value="";
document.getElementById('cidade').value="";
document.getElementById('estado').value="";
document.getElementById('cep').value="";

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
