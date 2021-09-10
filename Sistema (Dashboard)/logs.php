<!DOCTYPE html>
<html lang="pt-br">

    <?php
    include('menu.php');
    ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-sitemap"></i> Registros de Atividades</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>Nº</th>
                      <th>Ação Realizada</th>
                      <th class="numeric">Horário</th>
                      <th class="numeric">Usuário</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    require("conexaobd.php");
                    $sqlselect = "SELECT * FROM logs ORDER BY hora DESC ";
                    $result = mysqli_query($link, $sqlselect);

                    while ($cont = mysqli_fetch_array($result)) {

                    echo "<tr>                        
                    <td>".$cont['id']."</td>
                    <td>".$cont['acao']."</td>
                    <td>".$cont['hora']."</td>
                    <td>".$cont['usuario']."</td>
                    <tr>"; }

                    ?>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
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
        <a href="responsive_table.html#" class="go-top">
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
