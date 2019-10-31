<?php
  require "../../model/Entity/Analysis.php";
  require "../../model/Entity/Municipality.php";
  require "../../model/Entity/Client.php";
  require "../../model/Entity/CostumClient.php";
  require "../../controller/Analysis/analysisController.php";
  require "../../controller/Sample/sampleController.php";
  require "../../controller/Package/packageController.php";
  require "../../controller/Employee/employeeController.php";
  require "../../controller/User/UserSession.php";

  $session = new UserSession();
  $session_role = 0;
  $session_employee = "";
  if (isset($session)) {
    if ($session->getUserRol() !== null) {
      $session_role = $session->getUserRol();
      $session_employee = $session->getUserDpi();
    }
  }

  if ( ($session_role) == 1 ||  ($session_role == 3) ) {
    if (isset($_POST['add'])) {
      $newAnalysis = new Analysis();

      $newAnalysis->setDateAnalysis($_POST['fecha']);
      $newAnalysis->setCostAnalysis($_POST['costo']);
      $newAnalysis->setEmployeeDpi(getSupplyByCode($_POST['empleado']));
      $newAnalysis->setPackage(getSupplyByCode($_POST['paquete']));
      $newAnalysis->setSample(getProviderById($_POST['muestra']));

      if (newAnalysis($newAnalysis)) {
        echo "Analisis realizado";
      } else {
        echo "Error al realizar el analisis";
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

    <title>Realizar Compra | Laboratorio de aguas</title>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>
  <body>
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Compra de Insumos</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Agregar Compra</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="#" method="post">
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha del Analisis<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" name="fecha" type="date" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Costo<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 20" name="costo" type="number" required />
                      </div>
                    </div>

                    
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Muestra<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="muestra">
                          <?php
                          foreach (getAllSamples() as $sampleIn) {
                            echo '<option value="'.$sampleIn->getIdSample().'">'.$sampleIn->getIdSample().'</option>';
                          }
                          ?>
                      </select>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Paquete<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="paquete">
                          <?php
                          foreach (getAllPackages() as $packagesIn) {
                            echo '<option value="'.$packagesIn->getIdPackage().'">'.$packagesIn->getIdPackage().' - '.$packagesIn->getNamePackage().'</option>';
                          }
                          ?>
                      </select>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Empleado</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: Empleado" name="empleado" type="text" value= 
                          <?php echo '"'.$session_employee.'"'; ?>
                        />
                      </div>
                    </div>

                    

                    


                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button herf="" class="btn btn-primary" type="submit" name="add">Realizar</button>
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