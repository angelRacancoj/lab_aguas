<?php
  require "../../model/Entity/Sample.php";
  require "../../controller/Sample/sampleController.php";
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

  <title>Buscar Muestras | Laboratorio de aguas</title>

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
              <header class="panel-heading">Muestra</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Busqueda:</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-2">
                            <input type="number" class="form-control" placeholder="Codigo" name="find_code">
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
                                <th><i class="icon_cogs"></i>Fecha de toma</th>
                                <th><i class="icon_cogs"></i>Lote</th>
                                <th><i class="icon_cogs"></i>Hora de toma</th>
                                <th><i class="icon_cogs"></i>Contenedor</th>
                                <th><i class="icon_cogs"></i>Esta Refrigerado</th>
                                <th><i class="icon_cogs"></i>Temperatura</th>
                                <th><i class="icon_cogs"></i>Cantidad de la muestra</th>
                                <th><i class="icon_cogs"></i>Es Nacimiento de Agua</th>
                                <th><i class="icon_cogs"></i>Aldea</th>
                                <th><i class="icon_cogs"></i>Observaciones</th>
                                <th><i class="icon_cogs"></i>Pueblo</th>
                                <th><i class="icon_cogs"></i>Nota</th>
                                <th><i class="icon_cogs"></i>Es aceptada</th>
                                <th><i class="icon_cogs"></i>Boleta de Pago</th>
                                <th><i class="icon_cogs"></i>Municipalidad</th>
                                <th><i class="icon_cogs"></i>Cliente</th>
                              </tr>

                              <tr>
                                 <td>1</td>
                                 <td>2019-10-28</td>
                                 <td>2019-10-27</td>
                                 <td>Lote 1</td>
                                 <td>22:10</td>
                                 <td>Contenedor 1</td>
                                 <td>Si</td>
                                 <td>45.5</td>
                                 <td>50</td>
                                 <td>No</td>
                                 <td>Aldea 1</td>
                                 <td>Ninguna</td>
                                 <td>Pueblo 1</td>
                                 <td>Nota 1</td>
                                 <td>Si</td>
                                 <td>12346789</td>
                                 <td>1</td>
                                 <td>1</td>
                              </tr>

                              <tr>
                                 <td>2</td>
                                 <td>2019-10-28</td>
                                 <td>2019-10-27</td>
                                 <td>Lote 1</td>
                                 <td>22:10</td>
                                 <td>Contenedor 2</td>
                                 <td>Si</td>
                                 <td>45.5</td>
                                 <td>50</td>
                                 <td>No</td>
                                 <td>Aldea 2</td>
                                 <td>Ninguna</td>
                                 <td>Pueblo 2</td>
                                 <td>Nota 2</td>
                                 <td>Si</td>
                                 <td>12346789</td>
                                 <td>2</td>
                                 <td>2</td>
                              </tr>

                              <tr>
                                 <td>3</td>
                                 <td>2019-10-28</td>
                                 <td>2019-10-27</td>
                                 <td>Lote 1</td>
                                 <td>22:10</td>
                                 <td>Contenedor 3</td>
                                 <td>Si</td>
                                 <td>45.5</td>
                                 <td>50</td>
                                 <td>No</td>
                                 <td>Aldea 3</td>
                                 <td>Ninguna</td>
                                 <td>Pueblo 3</td>
                                 <td>Nota 3</td>
                                 <td>Si</td>
                                 <td>12346789</td>
                                 <td>3</td>
                                 <td>3</td>
                              </tr>

                              

                              <?php
                              foreach (getAllSamples() as $sampleId) {
                                echo "<tr>";
                                echo '<td>'.$sampleId->getIdSample().'</td>';
                                echo '<td>'.$sampleId->getAdmissionDate().'</td>';
                                echo '<td>'.$sampleId->getSamplingDate().'</td>';
                                echo '<td>'.$sampleId->getBatch().'</td>';
                                echo '<td>'.$sampleId->getSamplingTime().'</td>';
                                echo '<td>'.$sampleId->getContainer().'</td>';
                                echo '<td>'.$sampleId->getIsRefrigerated().'</td>';
                                echo '<td>'.$sampleId->getTemperature().'</td>';
                                echo '<td>'.$sampleId->getSampleQuantity().'</td>';
                                echo '<td>'.$sampleId->getIsWaterBirth().'</td>';
                                echo '<td>'.$sampleId->getHamlet().'</td>';
                                echo '<td>'.$sampleId->getObservations().'</td>';
                                echo '<td>'.$sampleId->getVillage().'</td>';
                                echo '<td>'.$sampleId->getNoteSample().'</td>';
                                echo '<td>'.$sampleId->getAcceptance().'</td>';
                                echo '<td>'.$sampleId->getBoletaDePago().'</td>';
                                echo '<td>'.$sampleId->getClientDpi().'</td>';
                                echo '<td>'.$sampleId->getMunicipality().'</td>';
                                echo '<td>File</td>';
                                echo "</tr>";
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
                        <button herf="" class="btn btn-primary" type="submit">Crear</button>
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
