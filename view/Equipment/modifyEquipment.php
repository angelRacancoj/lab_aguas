<?php
  require_once("../../controller/Equipment/equipmentController.php");
  require_once("../../model/Entity/Equipment.php");
  $id=$_GET['id'];
  $equipmentCon=getById($id);
  if(isset($_POST['back'])){
      header('Location: /lab_aguas/view/Equipment/consultEquipment.php');
  }else if(isset($_POST['send'])){
          $equipmentCon->setNameEquipment($_POST['nameEquipment']);
          $equipmentCon->setModelEquipment($_POST['equipmentModel']);
          $equipmentCon->setWorkingHours($_POST['equipmentWork']);
          $equipmentCon->setMaintenanceTime($_POST['equipmentMan']);
          updateEquipment($equipmentCon);
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

    <title>Modificar Equipo | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Modificar Equipo</h3>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Modificar Equipo</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre Equipo<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="nameEquipment" value="<?php echo $equipmentCon->getNameEquipment(); ?>" placeholder="Ej: Juan Lucas Garcia" maxlength="60" required></input>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Modelo<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="equipmentModel" value="<?php echo $equipmentCon->getModelEquipment(); ?>" placeholder="ej: 45897854" maxlength="10" required></input>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Tiempo Vida(hrs)<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" pattern="\d*" name="equipmentWork" value="<?php echo $equipmentCon->getWorkingHours(); ?>" placeholder="ej: 45897854" maxlength="10" required></input>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Tiempo mantenimiento(hrs)<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" pattern="\d*" name="equipmentMan" value="<?php echo $equipmentCon->getMaintenanceTime(); ?>" placeholder="ej: 45897854" maxlength="10" required></input>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" name="send">Actualizar Equipo</button>
                        <button class="btn btn-default" onclick="goBack()" name="back">volver</button>
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
<script>
function goBack() {
  window.history.back();
}
</script>
