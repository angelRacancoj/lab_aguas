<?php
  require "../../model/Entity/Maintenance.php";
  require "../../model/Entity/Equipment.php";
  require "../../model/Entity/Provider.php";
  require "../../controller/Maintenance/maintenanceController.php";
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

  <title>Buscar Mantenimiento | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Buscar Mantenimiento</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Buscar Mantenimiento</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Busqueda:</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-2">
                            <input type="number" class="form-control" placeholder="Codigo Mantenimiento" name="find_code_mant">
                          </div>
                          <div class="col-lg-2">
                            <input type="number" class="form-control" placeholder="Codigo del Equipo" name="find_code_equi">
                          </div>
                          <div class="col-lg-2">
                            <input type="number" class="form-control" placeholder="Codigo del Proveedor" name="find_code_prov">
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <section class="panel">
                          <header class="panel-heading">Historial Mantenimiento</header>

                          <table class="table table-striped table-advance table-hover">
                            <tbody>
                              <tr>
                                <th><i class="icon_id"></i>Codigo</th>
                                <th><i class="icon_calendar"></i>Fecha</th>
                                <th><i class="icon_cogs"></i>Costo</th>
                                <th><i class="icon_id"></i>Codigo Equipo</th>
                                <th><i class="icon_profile"></i>Nombre Equipo</th>
                                <th><i class="icon_id"></i>Codigo Proveedor</th>
                                <th><i class="icon_profile"></i>Nombre Proveedor</th>
                              </tr>
                              <?php
                              foreach (getAllMaintenances() as $maintenancesi) {
                                echo "<tr>";
                                echo '<td>'.$maintenancesi->getIdMaintenance().'</td>';
                                echo '<td>'.$maintenancesi->getMaintenanceDate().'</td>';
                                echo '<td>'.$maintenancesi->getMaintenanceCost().'</td>';
                                echo '<td>'.$maintenancesi->getEquipment()->getIdEquipment().'</td>';
                                echo '<td>'.$maintenancesi->getEquipment()->getNameEquipment().'</td>';
                                echo '<td>'.$maintenancesi->getProvider()->getIdProvider().'</td>';
                                echo '<td>'.$maintenancesi->getProvider()->getNameProvider().'</td>';
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
                        <button herf="" class="btn btn-primary" type="submit">Buscar</button>
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
