<?php
  //require "model/Entity/Parameter.php";
  //require "controller/Client/parameterController.php";
  //require "controller/CostumClient/costumClientController.php";

//  if (isset($_POST['add'])) {
  //  $newParameter = new Parameter();
    //$newParameter->setDpiClient(trim($_POST['client_dpi'],' '));
//    $newParameter->setNameClient($_POST['client_name']);
  //  $newParameter->setDirectionClient($_POST['direction']);
    //$newParameter->setCityClient($_POST['department']);
  //  $newParameter->setCompanyClient($_POST['company']);
    //$newParameter->setPhoneClient($_POST['phone']);
    //$newParameter->setPhoneClientExtra($_POST['extra_phone']);
    //$newParameter->setPhoneExtra($_POST['extra_phone2']);
    //$newParameter->setEmailClient(trim($_POST['email'],' '));
    //$newParameter->setWebsiteClient(trim($_POST['web'],' '));
    //revisar metodo
    //$newClient->setCostumClient(getCostumClientById($_POST['costum']));

    //if (newParameter($newParameter)) {
      //echo "Agregado exitosamente";
    //} else {
      //echo "Error al crear el cliente";
    //}
  //}
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

  <title>Crear Parametro | Laboratorio de aguas</title>

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

  <!--yo -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Parametro</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Crear Parametro
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">ID Parametro <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="idParametro"  type="text" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre del Parametro <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="nombreParametro"  type="text" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">codigo MR <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="codigoMr"  type="text" required />
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Limite bajo</label>
                      <div class="col-lg-10">
                        <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                            </label>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Medida</label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>


                      </div>
                    </div>




<!--botones de Regresar y Crear-->




<div class="container">
  <h2>Pequeño modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Emergente</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Titulo</h4>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>






                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button herf="" class="btn btn-primary" type="submit">Crear</button>
                        <button class="btn btn-default" type="button"><a href="/lab_aguas">Regresar</a></button>
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

          Designed by <a href="https://daniel">Daniel Gonzalez</a>
        </div>
    </div>

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
