<?php
  require "../../model/Entity/Sample.php";
  require "../../model/Entity/Client.php";
  require "../../model/Entity/CostumClient.php";
  require "../../model/Entity/Municipality.php";
  require "../../controller/Sample/sampleController.php";
  require "../../controller/Client/clientController.php";
  require "../../controller/User/UserSession.php";
/*
  $newSample = new Sample();

  $newSample->setAdmissionDate(new DateTime('2019-01-01'));
  $newSample->setSamplingDate(new DateTime('2019-01-01'));
  $newSample->setBatch('1');
  $newSample->setSamplingTime(new DateTime('10:10'));
  $newSample->setContainer('Contenedor PET');
  $newSample->setIsRefrigerated("1");
  $newSample->setTemperature(10);
  $newSample->setSampleQuantity(1);
  $newSample->setIsWaterBirth("1");
  $newSample->setHamlet('LA');
  $newSample->setObservations('no');
  $newSample->setVillage('LA');
  $newSample->setNoteSample('la');
  $newSample->setAcceptance("1");
  $newSample->setBoletaDePago('12345');
  $newSample->setClientDpi(getClientById('1112223330901'));
  $newSample->setMunicipality(findByIdMunicipality(1));

  newSample($newSample);
*/

  $session = new UserSession();
  $session_role = 0;
  if (isset($session)) {
    if ($session->getUserRol() !== null) {
      $session_role = $session->getUserRol();
    }
  }

  if ( ($session_role) == 1 ||  ($session_role == 2) ) {
    if (isset($_POST['add'])) {
      $newSample = new Sample();
      $newSample->setAdmissionDate(new DateTime($_POST['fecha_admision']));
      $newSample->setSamplingDate(new DateTime($_POST['fecha_toma']));
      $newSample->setBatch($_POST['lote']);
      $newSample->setSamplingTime(new DateTime($_POST['hora_toma']));
      $newSample->setContainer($_POST['contenedor']);
      $newSample->setIsRefrigerated($_POST['refrigerado']);
      $newSample->setTemperature($_POST['temperatura']);
      $newSample->setSampleQuantity($_POST['cantidad']);
      $newSample->setIsWaterBirth($_POST['nacimiento']);
      $newSample->setHamlet($_POST['aldea']);
      $newSample->setObservations($_POST['observaciones']);
      $newSample->setVillage($_POST['pueblo']);
      $newSample->setNoteSample($_POST['nota']);
      $newSample->setAcceptance($_POST['aceptado']);
      $newSample->setBoletaDePago($_POST['boleta']);
      $newSample->setClientDpi(getClientById($_POST['cliente']));
      $newSample->setMunicipality(findByIdMunicipality($_POST['municipalidad']));

      if (newSample($newSample)) {
        echo "Muestra Ingresada";
      } else {
        echo "Error al ingresar la muestra";
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

    <title>Ingreso de Muestra | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Ingreso de Muestra</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Muestra</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="#" method="post">
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha de Admision<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" name="fecha_admision" type="date" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha de la Toma<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" name="fecha_toma" type="date" required />
                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Lote<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="" name="lote" minlength="5" type="text" required />
                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Hora de Toma<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input type="time" id="appt" name="hora_toma" min="00:00" max="23:59" required> 
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Contenedor<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="" name="contenedor" minlength="5" type="text" required />
                      </div>
                    </div>



                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Esta Refrigerado<span class="required">*</span></label>
                      <div class="col-lg-10">
                        
                        <select name="refrigerado">
                          <option value="1">Si</option> 
                          <option value="0" selected>No</option>
                        </select>

                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Temperatura<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 12.5" name="temperatura" type="number" required />
                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Cantidad de la Muestra<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 12.5" name="cantidad" type="number" required />
                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Es Nacimiento de Agua<span class="required">*</span></label>
                      <div class="col-lg-10">
                        
                        <select name="nacimiento">
                          <option value="1">Si</option> 
                          <option value="0" selected>No</option>
                        </select>

                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Aldea<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej:Alcohol" name="aldea" minlength="5" type="text" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Observaciones<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej:Alcohol" name="observaciones" minlength="5" type="text" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Pueblo<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej:Alcohol" name="pueblo" minlength="5" type="text" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nota de la muestra<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej:Alcohol" name="nota" minlength="5" type="text" required />
                      </div>
                    </div>



                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Es Aceptada<span class="required">*</span></label>
                      <div class="col-lg-10">
                        
                        <select name="aceptado">
                          <option value="1">Si</option> 
                          <option value="0" selected>No</option>
                        </select>

                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Boleta de Pago<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej:Alcohol" name="boleta" minlength="5" type="text" required />
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Municipalidad</label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="municipalidad">
                          <?php
                          foreach (getAllMunicipalities() as $municipalityObject) {
                            echo '<option value="'.$municipalityObject->getIdMunicipality().'">'.$municipalityObject->getNameMunicipality().'</option>';
                          }
                          ?>
                      </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Cliente</label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="cliente">
                          <?php
                          foreach (getAllClient() as $clienteObject) {
                            echo '<option value="'.$clienteObject->getDpiClient().'">'.$clienteObject->getNameClient().'</option>';
                          }
                          ?>
                      </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button herf="" class="btn btn-primary" type="submit" name="add">Realizar</button>
                        <button class="btn btn-default" type="button" name="back">
                          <a href="/lab_aguas/" title="Regresar al Menu Principal" >Regresar</a>
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