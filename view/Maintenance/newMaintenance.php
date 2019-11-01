<?php
  require "../../model/Entity/Maintenance.php";
  require "../../controller/Maintenance/maintenanceController.php";
  require "../../controller/Equipment/equipmentController.php";
  require "../../controller/Provider/providerController.php";
  require "../../controller/User/UserSession.php";

  $session = new UserSession();
  $session_role = 0;
  if (isset($session)) {
    if ($session->getUserRol() !== null) {
      $session_role = $session->getUserRol();
    }
  }

  if ($session_role == 1) {
    if (isset($_POST['add'])) {
      $newMaintenance = new Maintenance();
      $newMaintenance->setMaintenanceDate(new DateTime($_POST['supply_name']));
      $newMaintenance->setMaintenanceCost($_POST['expired_date']);
      //revisar metodo
      $newMaintenance->setEquipment(getEquipmetById($_POST['costumEquipment']));
      $newMaintenance->setProvider(getProviderById($_POST['costumProvider']));

      if (newSupply($newMaintenance)) {
        echo "Agregado exitosamente";
      } else {
        echo "Error al crear el insumo";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Agregar Mantenimiento | Laboratorio de aguas</title>

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
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Agregar Mantenimiento</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Agregar Mantenimiento</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="#" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha de mantenimiento<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" name="expired_date" type="date" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Costo de Mantenimiento (Q)<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 12.5" name="quantity" type="number" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Equipo<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="costumEquipment">
                          <?php
                          foreach (getAllEquipment() as $equipmentIn) {
                            echo '<option value="'.$equipmentIn->getIdEquipment().'">'.$equipmentIn->getIdEquipment().' - '.$equipmentIn->getNameEquipment().'</option>';
                          }
                          ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Proveedor<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="costumProvider">
                          <?php
                          foreach (getAllProviders() as $providerIn) {
                            echo '<option value="'.$providerIn->getIdProvider().'">'.$providerIn->getIdProvider().' - '.$providerIn->getNameProvider().'</option>';
                          }
                          ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button herf="" class="btn btn-primary" type="submit" name="add">Agregar</button>
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