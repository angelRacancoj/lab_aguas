<?php
  require "../../model/Entity/Provider.php";
  require "../../controller/Provider/providerController.php";

  if (isset($_POST['add'])) {
    $newProvider = new Provider();
    $newProvider->setIdProvider($_POST['provider_dpi']);
    $newProvider->setNameProvider($_POST['provider_name']);
    $newProvider->setPhoneProvider($_POST['phone']);
    $newProvider->setDirectionProvider($_POST['direction']);
    if (newProvider($newProvider)) {
      echo "Agregado exitosamente";
    } else {
      echo "Error al crear el Proveedor";
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

    <title>Crear Proveedor | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Crear Proveedor</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Crear Proveedor</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="#" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">ID<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 12345678909" name="provider_dpi" minlength="11" type="number" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre Completo<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej:Jose Morales" name="provider_name" minlength="5" type="text" required />
                      </div>
                    </div>
                      <div class="form-group ">
                          <label for="cname" class="control-label col-lg-2">Número de Telefono<span class="required">*</span></label>
                          <div class="col-lg-10">
                              <input class="form-control" placeholder="Ej: 77315820" name="phone" minlength="4" type="number" required />
                          </div>
                      </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Dirección del Proveedor:</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 10ma avenida 60-10 Zona 11" name="direction" type="text" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button herf="" class="btn btn-primary" type="submit" name="add">Crear</button>
                        <button class="btn btn-default" type="button" name="back">Regresar</button>
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