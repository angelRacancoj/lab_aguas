<?php
    require "../../model/Entity/Provider.php";
    require "../../controller/Provider/providerController.php";
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

  <title>Buscar Proveedor | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Buscar Proveedor</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Proveedor
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Busqueda:</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-2">
                            <input type="text" class="form-control" placeholder="ID" name="find_id">
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
                          <header class="panel-heading">Lista de Proveedores</header>

                          <table class="table table-striped table-advance table-hover">
                            <tbody>
                              <tr>
                                  <th><i class="icon_id"></i>Id</th>
                                  <th><i class="icon_profile"></i>Nombre Completo</th>
                                  <th><i class="icon_mobile"></i>Telefono</th>
                                  <th><i class="icon_pin_alt"></i>Dirección</th>
                                  <?php
                                  if ($session_role == 1 || $session_role == 2) {
                                      echo '<th><i class="icon_cogs"></i>Actualizar</th>';
                                  }
                                  ?>
                              </tr>
                              <?php
                              foreach (getAllProviders() as $provider) {
                                  echo "<tr>";
                                  echo '<td>' . $provider->getIdProvider() . '</td>';
                                  echo '<td>' . $provider->getNameProvider() . '</td>';
                                  echo '<td>' . $provider->getPhoneProvider() . '</td>';
                                  echo '<td>' . $provider->getDirectionProvider() . '</td>';
                                  if ($session_role == 1) {
                                      echo '<td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="#" title="Modificar" >
                                                <i class="icon_plus_alt2"></i>
                                            </a>
                                        </div>
                                    </td>';
                                      echo "</tr>";
                                  }
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
                        <button herf="" class="btn btn-primary" type="submit">Buscar</button>
                        <button class="btn btn-default" type="button" href="/lab_aguas/index.php">
                            <a href="/lab_aguas/index.php" title="Regresar al Menu Principal" >Regresar</a>
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
