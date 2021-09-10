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
        <h3><i class="fa fa-pencil"><b></i>  Cadastro de Funcionários</h3></b>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Informações Gerais</h4>
              <form class="form-horizontal style-form" method="post" action="res_funcionario.php">
                <div class="form-group">
                 
                  
                  
                  <div class="col-md-2">
                    <b>ID:</b>
                    <input required="" type="text" name="id"  class="form-control" placeholder="ID AUTOMÁTICO" disabled="">
                  </div>
                  <div class="col-md-6">
                    <b>Nome:</b>
                    <input required="" type="text" name="nome" class="form-control" placeholder="Digite o Nome">
                  </div>
                  <div class="col-md-4">
                                                
                                                     <b>Sexo:</b>

                                                    <select required="" name="sexo" class="form-control custom-select">
                                                        <option>Selecione o sexo</option>
                                                        <option value="Masculino">Masculino</option>
                                                        <option value="Feminino">Feminino</option>
                                                        
                                                    </select>
                                                    
<p>
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</p> 
                                       </div>
                                                <div class="col-md-4">
                                                 <b> Data de Nascimento: </b>
                                                <input required="" type="date" name="data_nascimento" class="form-control" placeholder="dd/mm/aaaa">
                                            
                </div>
                 <div class="col-md-2">
                    <b>RG:</b>
                    <input required="" type="text" name="rg" class="form-control" placeholder="Digite o RG">
                  </div>
                  <div class="col-md-3">
                    <b>Telefone Residencial:</b>
                    <input required="" type="text" class="form-control" name="telefone" placeholder="Digite o Telefone Residencial">
                  </div>
                  <div class="col-md-3">
                    <b>Celular:</b>
                    <input required="" type="text" class="form-control" name="celular" placeholder="Digite o Celular">
                  </div>
                  <p>&nbsp;</p>
                 
                  <div class="col-md-4">
                    <b>CPF:</b>
                    <input required="" type="text" name="cpf_funcionario"  class="form-control" placeholder="Digite o CPF">
                  </div>
                  <div class="col-md-4">
                    <b>Email:</b>
                    <input required="" type="text" class="form-control" name="email" placeholder="Digite o Email">
                  </div>
                  <div class="col-md-4">

                  <b>Cargo:</b>
                  <select required="" name="cargo" class="form-control custom-select">
                   <option>Selecione o Cargo</option>
                   <?php
                   require('conexaobd.php');
                    $sql = "SELECT descricaocargo FROM cargo ORDER BY descricaocargo ASC ";
                    $resultado = mysqli_query($link, $sql);
                    while ($cont = mysqli_fetch_array($resultado)) {
                      echo "
                      <option>".$cont['descricaocargo']."</option>  
                      ";
                    }
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
                    <input required="" type="text" name="rua" class="form-control" placeholder="Digite o nome da Rua">
                  </div>
                  <div class="col-md-2">
                    <b>Número:</b>
                    <input required="" type="text" name="numero" class="form-control" placeholder="Digite o Número ">
                  </div>
                  <div class="col-md-4">
                    <b>Bairro:</b>
                    <input required="" type="text" name="bairro" class="form-control" placeholder="Digite o Bairro">
                  </div>
                  <p>  &nbsp;</p> 
                  <div class="col-md-4">
                    <b>Complemento:</b>
                    <input type="text" name="complemento" class="form-control" placeholder="Digite o Complemento">
                  </div>
                  <div class="col-md-2">
                    <b>Cidade:</b>
                    <input required="" type="text" name="cidade" class="form-control" placeholder="Digite a Cidade">
                  </div>
                  <div class="col-md-4">
                    <b>Estado:</b>

                                                    <select name="estado" class="form-control custom-select">
                                                        <option>Selecione um Estado</option>
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
                  </div>
                  <div class="col-md-2">
                    <b>CEP:</b>
                    <input required="" type="text" name="cep" class="form-control" placeholder="Digite o CEP">
                  </div>
              </form>
                <p>  &nbsp;</p> 
<div class="col-md-12">
              <button type="submit" class="btn btn-theme"><i class="fa fa-check"></i>   Salvar</button>
              <button type="reset" value="Limpa" onClick="limpa()" class="btn btn-inverse"><i class="fa fa-remove"></i>  Limpar</button>
               <script>
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
