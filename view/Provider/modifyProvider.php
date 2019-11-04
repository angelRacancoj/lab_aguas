<?php
  require_once("../../controller/Provider/providerController.php");
  require_once("../../model/Entity/Provider.php");
  $id=$_GET['id'];

  $employeeCon=getProviderById($id);

  if(isset($_POST['back'])){
      header('Location: /lab_aguas/view/Provider/findProvider.php');
  }else if(isset($_POST['send'])){
      $employeeCon->setNameProvider($_POST['providerName']);
      $employeeCon->setPhoneProvider($_POST['providerPhone']);
      $employeeCon->setDirectionProvider($_POST['providerDirection']);
      if (updateProvider($employeeCon)){
          echo "Modificado Correctamente";
      } else {
          echo "Error al Modificar";
      }
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Modificar Proveedor | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Modificar Proveedor</h3>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Modificar Proveedor</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre Proveedor<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="providerName" value="<?php echo $employeeCon->getNameProvider(); ?>" placeholder="Ej: Juan Lucas Garcia" maxlength="60" required></input>
                      </div>
                    </div>

                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Numero Telefono<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" pattern="\d*" name="providerPhone" value="<?php echo $employeeCon->getPhoneProvider(); ?>" placeholder="ej: 45897854" maxlength="10" required></input>
                      </div>
                    </div>

                      <div class="form-group ">
                          <label for="cname" class="control-label col-lg-2">Direccion</label>
                          <div class="col-lg-10">
                              <input class="form-control" type="text" pattern="\d*" name="providerDirection" value="<?php echo $employeeCon->getDirectionProvider(); ?>" placeholder="ej: 45897854" maxlength="10" required></input>
                          </div>
                      </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" name="send">Actualizar Proveedor</button>
                        <button class="btn btn-default" name="back">volver</button>
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
