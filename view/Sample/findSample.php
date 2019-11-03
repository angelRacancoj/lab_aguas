<?php
  require "../../model/Entity/Sample.php";
  require "../../model/Entity/Municipality.php";
  require "../../model/Entity/Client.php";
  require "../../model/Entity/CostumClient.php";
  require "../../controller/Sample/sampleController.php";
  require "../../controller/User/UserSession.php";

   $session = new UserSession();
   $session_role = 0;
   
   if (isset($session)) {
    if ($session->getUserRol() !== null) {
      $session_role = $session->getUserRol();
    }
   }
   
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

  <title>Buscar Muestra | Laboratorio de aguas</title>

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

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Buscar Muestra</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Muestra
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Busqueda:</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-2">
                            <input type="number" class="form-control" placeholder="DPI" name="find_dpi">
                          </div>
                          <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder="Nombre" name ="find_name">
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <section class="panel">
                          <header class="panel-heading">Lista de Muestras</header>

                          <table class="table table-striped table-advance table-hover">
                            <tbody>
                              <tr>
                                <th><i class="icon_id"></i>ID</th>
                                <th><i class="icon_profile"></i>Fecha de Admision</th>
                                <th><i class="icon_pin_alt"></i>Fecha de Toma</th>
                                <th><i class="icon_pin_alt"></i>Lote</th>
                                <th><i class="icon_pin_alt"></i>Hora</th>
                                <th><i class="icon_mobile"></i>Contenedor</th>
                                <th><i class="icon_mobile"></i>Refrigerado</th>
                                <th><i class="icon_mobile"></i>Temperatura</th>
                                <th><i class="icon_mail_alt"></i>Cantidad</th>
                                <th><i class="icon_mail_alt"></i>Nacimiento</th>
                                <th><i class="icon_mail_alt"></i>Aldea</th>
                                <th><i class="icon_mail_alt"></i>Observaciones</th>
                                <th><i class="icon_mail_alt"></i>Pueblo</th>
                                <th><i class="icon_mail_alt"></i>Nota</th>
                                <th><i class="icon_mail_alt"></i>Aceptado</th>
                                <th><i class="icon_mail_alt"></i>Boleta</th>
                                <th><i class="icon_mail_alt"></i>Municipalidad</th>
                                <th><i class="icon_mail_alt"></i>Cliente</th>
                                  <?php
                                  /*
                                  if ($session_role == 1) {
                                    echo '<th><i class="icon_cogs"></i>Actualizar</th>';
                                  }
                                  */
                                  ?>
                              </tr>
                              <?php
                              foreach (getAllSamples() as $sampleObject) {
                                echo "<tr>";
                                echo '<td>'.$sampleObject->getIdSample().'</td>';
                                echo '<td>'.$sampleObject->getAdmissionDate()->format('d/m/yy').'</td>';
                                echo '<td>'.$sampleObject->getSamplingDate()->format('d/m/yy').'</td>';
                                echo '<td>'.$sampleObject->getBatch().'</td>';
                                echo '<td>'.$sampleObject->getSamplingTime()->format('H:m').'</td>';
                                echo '<td>'.$sampleObject->getContainer().'</td>';
                                echo '<td>'.$sampleObject->getIsRefrigerated().'</td>';
                                echo '<td>'.$sampleObject->getTemperature().'</td>';
                                echo '<td>'.$sampleObject->getSampleQuantity().'</td>';
                                echo '<td>'.$sampleObject->getIsWaterBirth().'</td>';
                                echo '<td>'.$sampleObject->getHamlet().'</td>';
                                echo '<td>'.$sampleObject->getObservations().'</td>';
                                echo '<td>'.$sampleObject->getVillage().'</td>';
                                echo '<td>'.$sampleObject->getNoteSample().'</td>';
                                echo '<td>'.$sampleObject->getAcceptance().'</td>';
                                echo '<td>'.$sampleObject->getBoletaDePago().'</td>';

                                echo '<td>'.$sampleObject->getMunicipality()->getNameMunicipality().'</td>';
                                echo '<td>'.$sampleObject->getClientDpi()->getNameClient().'</td>';
                                /*
                                if ($session_role == 1) {
                                  echo '<td>
                                    <div class="btn-group">
                                      <a class="btn btn-primary" href="editSample.php?id='.$sampleObject->getIdSample().'" title="Actualizar Datos" >
                                        <i class="icon_plus_alt2"></i>
                                      </a>
                                    </div>
                                  </td>';
                                  echo "</tr>";
                                }
                                */
                              }
                              ?>
                            </tbody>
                          </table>
                        </section>
                      </div>
                    </div>
<!--botones de Regresar y Crear-->

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-default" type="button">
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
