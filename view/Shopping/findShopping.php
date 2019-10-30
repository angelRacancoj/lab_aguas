<?php
  require "../../model/Entity/Shopping.php";
  require "../../controller/Shopping/shoppingController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Buscar Compras | Laboratorio de aguas</title>

  <!-- Bootstrap CSS -->
  <link href="../Principal/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../Principal/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../Principal/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../Principal/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../Principal/css/style.css" rel="stylesheet">
  <link href="../Principal/css/style-responsive.css" rel="stylesheet" />

</head>

<body>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Buscar Compras</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Compras</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Busqueda:</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-2">
                            <input type="number" class="form-control" placeholder="Codigo" name="find_code">
                          </div>
                          <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder="Nombre" name ="find_name">
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <section class="panel">
                          <header class="panel-heading">Lista de Compras</header>

                          <table class="table table-striped table-advance table-hover">
                            <tbody>
                              <tr>
                                <th><i class="icon_id"></i>ID</th>
                                <th><i class="icon_profile"></i>Cantidad</th>
                                <th><i class="icon_cogs"></i>Fecha</th>
                                <th><i class="icon_cogs"></i>Nota</th>
                                <th><i class="icon_cogs"></i>Insumo</th>
                                <th><i class="icon_cogs"></i>Equipo</th>
                                <th><i class="icon_cogs"></i>Proveedor</th>
                              </tr>

                              <tr>
                                 <td>1</td>
                                 <td>45</td>
                                 <td>2019-10-28</td>
                                 <td>Compra segun factura No. 8</td>
                                 <td>1</td>
                                 <td>--</td>
                                 <td>1</td>
                              </tr>

                              <tr>
                                 <td>2</td>
                                 <td>30</td>
                                 <td>2019-10-28</td>
                                 <td>Compra segun factura No. 15</td>
                                 <td>--</td>
                                 <td>2</td>
                                 <td>2</td>
                              </tr>

                              <tr>
                                 <td>2</td>
                                 <td>115</td>
                                 <td>2019-10-28</td>
                                 <td>Compra segun factura No. 19</td>
                                 <td>2</td>
                                 <td>--</td>
                                 <td>3</td>
                              </tr>

                              <?php
                              foreach (getAllPurchases() as $shoppingId) {
                                echo "<tr>";
                                echo '<td>'.$shoppingId->getIdShopping().'</td>';
                                echo '<td>'.$shoppingId->getAmountPurchased().'</td>';
                                echo '<td>'.$shoppingId->getDateShopping().'</td>';
                                echo '<td>'.$shoppingId->getNoteShopping().'</td>';
                                echo '<td>'.$shoppingId->getEquipment().'</td>';
                                echo '<td>'.$shoppingId->getProvider().'</td>';
                                echo '<td>'.$shoppingId->getSupply().'</td>';
                                echo '<td>File</td>';
                                echo "</tr>";
                              }
                              ?>

                            </tbody>
                          </table>
                        </section>
                      </div>
                    </div>
<!--botones de Regresar y Crear-->

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button herf="" class="btn btn-primary" type="submit">Crear</button>
                        <button class="btn btn-default" type="button">
                          <a href="../Principal/index.html" title="Regresar al Menu Principal" >Regresar</a>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://daniel">Daniel Gonzalez</a>
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>