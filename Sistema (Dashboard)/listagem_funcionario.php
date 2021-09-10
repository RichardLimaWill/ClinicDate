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
        <h3><b><i class="fa fa-address-book "></i> Listagem de Funcionários</h3></b>
        
              
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">

                    
            <div class="content-panel">

              <table class="table table-striped table-advance table-hover">

               <div class="col-md-12">
                <div class="input-group date form_datetime-component">
                        <form method="POST" action="">
                      <input type="text" class="form-control" name="pesquisa" placeholder="Insira o nome do Funcionários">
                      <span class="input-group-btn">
                        <button type="submit" value="pesquisa" class="btn btn-theme date-set"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
</div>
                <hr>
                <thead>
                  <tr>
                  	<th><i class="fa fa-hashtag"></i> ID</th>
                    <th><i class="fa fa-user"></i> Nome</th>
                    <th><i class="fa fa-tags"></i> Sexo</th>
                    <th class="hidden-phone"><i class="fa fa-calendar"></i> Data de Nascimento</th>
                    <th class="hidden-phone"><i class="fa fa-phone"></i> Telefone</th>
                    <th class="hidden-phone"><i class="fa fa-mobile"></i> Celular</th>
                    <th class="hidden-phone"><i class="fa fa-envelope"></i> Email</th>
                    <th class="hidden-phone"><i class="fa fa-cogs"></i> Cargo</th>
                   
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php


@$pesquisa = $_POST['pesquisa'];

if(isset($pesquisa)){
  $sqlselect = "SELECT * FROM funcionario WHERE nome LIKE '%$pesquisa%' ORDER BY 'nome' DESC ";
}else{
  $sqlselect = "SELECT * FROM funcionario ORDER BY 'nome' DESC ";
}

require("conexaobd.php");

$result = mysqli_query($link, $sqlselect);

  while ($cont = mysqli_fetch_array($result)) {

                            echo "<tr>
                                  
                                  <td>".$cont['id']."</td>
                                  <td>".$cont['nome']."</td>
                                  <td>".$cont['sexo']."</td>
                                  <td>".$cont['data_nascimento']."</td>
                                  <td>".$cont['telefone']."</td>
                                  <td>".$cont['celular']."</td>
                                   <td>".$cont['email']."</td>
                                    <td>".$cont['cargo']."</td>
                      
                      <td>
<a href='edit_funcionario.php?id=".$cont['id']."'><button type='button' class='btn btn-theme btn-sm btn-round'><i class='fa fa-arrow-right'></i></button></a>
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
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
