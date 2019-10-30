<?php
  require "../../model/Entity/Supply.php";
  require "../../controller/Measure/measureController.php";
  require "../../controller/Supply/supplyController.php";

  $code_s = $name_s = $date_exp = $quantity_s = $measure_s = "";

  $code_s = $_GET['code'];

  if (isset($code_s)) {
    $supply_found = getSupplyByCode($code_s);

    $name_s = $supply_found->getNameSupply();
    $date_exp = $supply_found->getDateExpiry();
    $quantity_s = $supply_found->getQuantityAvailable();
    $measure_s = $supply_found->getMeasure()->getIdMeasure();
  }

  if (isset($_POST['update']) && isset($code_s)) {
    $supply_mod = getSupplyByCode($code_s);

    if (strcmp($supply_mod->getNameSupply(),$_POST['supply_name'])) {
      $supply_mod->setNameSupply($_POST['supply_name']);
    }
    if ($supply_mod->getQuantityAvailable() != $_POST['quantity_s']) {
      $supply_mod->setQuantityAvailable($_POST['quantity_s']);
    }
    if ($supply_mod->getMeasure()->getIdMeasure() != $_POST['measure']) {
      $supply_mod->setMeasure(getMeasureById($_POST['measure']));
    }

    if (updateSupply($supply_mod)) {
      echo "Agregado exitosamente";
    } else {
      echo "Error al crear el insumo";
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

    <title>Actualizar Insumo | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Actualizar Insumo</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Actualizar Insumo</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="#" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Codigo<span class="required">*</span></label>
                      <label for="cname" class="control-label col-lg-2"><b> <?php echo $code_s; ?> </b></label>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre Insumo<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej:Alcohol" name="supply_name" minlength="5" type="text" required value= <?php echo '"'.$name_s.'"'; ?> />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha de caducidad<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <label for="cname" class="control-label col-lg-2"><b> <?php echo $date_exp->format('d/m/yy'); ?> </b></label>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Cantidad Disponible<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej:1250.5" name="quantity_supply" type="number" required value= <?php echo '"'.$quantity_s.'"'; ?> />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Sistema de Medicion<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="measure">
                          <?php
                          foreach (getAllMeasure() as $measureIn) {
                            echo '<option value="'.$measureIn->getIdMeasure().'"';
                            if ($measure_s == $measureIn->getIdMeasure()) {
                              echo ' selected ';
                            }
                            echo '>'.$measureIn->getNameMeasure().'</option>';
                          }
                          ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button herf="" class="btn btn-primary" type="submit" name="update">Actualizar</button>
                        <button class="btn btn-default" type="button" name="back">
                          <a href="findSupply.php" title="Regresar a la busqueda" >Regresar</a>
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