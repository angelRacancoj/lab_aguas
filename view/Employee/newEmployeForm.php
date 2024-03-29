<?php
  require_once("../../controller/Employee/employeeController.php");
  require_once("../../controller/User/encription.php");
  require_once("../../model/Entity/Employee.php");
  $send=$_POST['send'];
  $message;
  if(isset($send)){
      $employee=new Employee();
      $converter = new Encryption();
      $staffPosition= getEmployeePositionbyId($_POST['position']);
      $isActive=1;
      if($_POST['state']=='Desactivo'){
          $isActive=0;
      }
      $employee->setDpiEmployee($_POST['employeeDpi']);
      $employee->setNameEmployee($_POST['employeeName']);
      $str =$_POST['employeePassword'];
      $encoded = $converter->encode($str);
      $employee->setPassword($encoded);
      $employee->setIsActive($isActive);
      $employee->setPhoneEmployee($_POST['employeePhone']);
      $employee->setStaffPosition($staffPosition);
      $employeeCon=getByDpi($employee);
      //set atributos
      $inser=newEmployee($employee);
      if($inser){
        if(isset($employeeCon)){
            $message="El dpi del empleado ya se encuentra registrado";
        }else{
            $message="Empleado Registrado";
        }
      }else{
          $message="No se pudo registrar el empleado";
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

    <title>Registrar Empleado | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Registrar Empleado</h3>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Registrar Empleado</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">

                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Estado Empleado<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="position">
                          <?php
                            foreach (getAllEmployeePosition() as $position) {
                                  echo '<option value="'.$position->getIdStaffPosition().'">'.$position->getNameStaffPosition().'</option>';
                            }
                           ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Dpi Empleado<span class="required">*</span></label>
                      <div class="col-lg-10">
                          <input class="form-control" placeholder="Ej:3325985878251498" type="text" pattern="\d*" name="employeeDpi" maxlength="14" required></input>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre Empleado<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="employeeName" placeholder="Ej: Juan Lucas Garcia" maxlength="60" required></input>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Numero Telefono<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" pattern="\d*" name="employeePhone" value="" placeholder="ej: 45897854" maxlength="10" required></input>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Contraseña Empleado<span class="required">*</span></label>
                      <div class="col-lg-10">
                          <input class="form-control" type="password" name="employeePassword" autocomplete="new-password" placeholder="Defina una Contraseña para el empleado" maxlength="15" required></input>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Estado Empleado<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="state">
                          <option value="Activo">Activo</option>
                          <option value="Desactivo">Desactivo</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" name="send">Registrar empleado</button>
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
