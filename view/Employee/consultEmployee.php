<?php
  require_once("../../controller/Employee/employeeController.php");
  require_once("../../model/Entity/Employee.php");
  $employeeCon;
  if(isset($_POST['send'])){
        $employee=new Employee();
        $nameEmployee=$_POST['employeeName'];
        $dpiEmployee=$_POST['employeeDpi'];
        if(!empty($nameEmployee)&&!empty($dpiEmployee)){
            getEmployeePositionbyName($nameEmployee);
            $employee->setNameEmployee($nameEmployee);
            $employee->setDpiEmployee($dpiEmployee);
        }else if(!empty($nameEmployee)){
            $employee->setNameEmployee($nameEmployee);
        }else if(!empty($dpiEmployee)){
            $employee->setDpiEmployee($dpiEmployee);
        }else{
            $employeeCon=getAllEmployee();
        }
  }else if($_POST['update']){
      echo "update";
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

    <title>Buscar Empleado | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Buscar Equipo</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Buscar Empleado</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Busqueda:</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-2">
                            <input class="form-control" type="text" name="employeeName" placeholder="Ingrese el nombre"></input>
                          </div>
                          <div class="col-lg-3">
                            <input class="form-control" type="text" name="employeeDpi" placeholder="Seleccione puesto"></input>
                          </div>
                          <div class="col-lg-3">
                            <button class="btn btn-primary" name="send">Buscar</button>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <section class="panel">
                          <header class="panel-heading">Lista de Insumo</header>

                          <table class="table table-striped table-advance table-hover">
                            <tbody>
                              <tr>
                                <th><i class="icon_id"></i>Dpi</th>
                                <th><i class="icon_profile"></i>Nombre</th>
                                <th><i class="icon_cogs"></i>Telefono</th>
                                <th><i class="icon_cogs"></i>Puesto</th>
                                <th><i class="icon_cogs"></i>Estado</th>
                                <th><i class="icon_cogs"></i>Actualizar</th>
                              </tr>
                              <?php
                              foreach ($employeeCon as $employee1) {
                                echo "<tr>";
                                echo '<td>'.$employee1->getDpiEmployee().'</td>';
                                echo '<td>'.$employee1->getNameEmployee().'</td>';
                                echo '<td>'.$employee1->getPhoneEmployee().'</td>';
                                echo '<td>'.$employee1->getStaffPosition()->getNameStaffPosition().'</td>';
                                echo '<td>'.$employee1->getIsActive().'</td>';
                                //echo '<td>File</td>';
                                echo '<td>
                                  <div class="btn-group">
                                    <a class="btn btn-primary" name="update" href="modifyEmployee.php?dpi='.$employee1->getDpiEmployee().'" title="Modificar"><i class="icon_plus_alt2"></i></a>
                                  </div>
                                </td>';
                                echo "</tr>";
                              }
                              ?>
                            </tbody>
                          </table>
                        </section>
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
