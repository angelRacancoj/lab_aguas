<?php
  require "../../model/Entity/Shopping.php";
  require "../../model/Entity/Supply.php";
  require "../../model/Entity/Equipment.php";
  require "../../model/Entity/Provider.php";
  require "../../model/Entity/Measure.php";
  require "../../controller/Shopping/shoppingController.php";
  require "../../controller/User/UserSession.php";

   $session = new UserSession();
   $session_role = 0;
   
   if (isset($session)) {
    if ($session->getUserRol() !== null) {
      $session_role = $session->getUserRol();
    }
   }
   
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

  <title>Buscar Compra | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Buscar Compra</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Compra
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Busqueda:</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-2">
                            <input type="number" class="form-control" placeholder="DPI" name="find_dpi">
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
                                <th><i class="icon_calendar"></i>Fecha de Compra</th>
                                <th><i class="icon_profile"></i>Proveedor</th>
                                <th><i class="icon_plus_alt2"></i>Insumo</th>
                                <th><i class="icon_plus_alt2"></i>Equipo</th>
                                <th><i class="icon_cogs"></i>Cantidad</th>
                                <th><i class="icon_mail_alt"></i>Nota</th>
                                  <?php
                                  if ($session_role == 1) {
                                    echo '<th><i class="icon_cogs"></i>Actualizar</th>';
                                  }
                                  ?>
                              </tr>
                              <?php
                              foreach (getAllPurchases() as $shoppingObject) {
                                echo "<tr>";
                                echo '<td>'.$shoppingObject->getIdShopping().'</td>';
                                echo '<td>'.$shoppingObject->getDateShopping().'</td>';
                                echo '<td>'.$shoppingObject->getProvider()->getNameProvider().'</td>';
                                echo '<td>'.$shoppingObject->getSupply()->getNameSupply().'</td>';
                                echo '<td>'.$shoppingObject->getEquipment()->getNameEquipment().'</td>';
                                echo '<td>'.$shoppingObject->getAmountPurchased().'</td>';
                                echo '<td>'.$shoppingObject->getNoteShopping().'</td>';
                                                                
                                if ($session_role == 1) {
                                  echo '<td>
                                    <div class="btn-group">
                                      <a class="btn btn-primary" href="editShopping.php?idShop='.$shoppingObject->getIdShopping().'" title="Actualizar Datos" >
                                        <i class="icon_plus_alt2"></i>
                                      </a>
                                    </div>
                                  </td>';
                                  echo "</tr>";
                                }
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
                        <button class="btn btn-default" type="button">
                          <a href="/lab_aguas/" title="Regresar al Menu Principal" >Regresar</a>
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
