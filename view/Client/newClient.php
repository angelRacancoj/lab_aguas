<?php
  require "../../model/Entity/Client.php";
  require "../../controller/Client/clientController.php";
  require "../../controller/CostumClient/costumClientController.php";
  require "../../controller/User/UserSession.php";

   $session = new UserSession();
   $session_role = 0;
   
   if (isset($session)) {
    if ($session->getUserRol() !== null) {
      $session_role = $session->getUserRol();
    }
   }

  if ($session_role == 1) {
    if (isset($_POST['add'])) {
      $newClient = new Client();
      $newClient->setDpiClient(trim($_POST['client_dpi'],' '));
      $newClient->setNameClient($_POST['client_name']);
      $newClient->setDirectionClient($_POST['direction']);
      $newClient->setCityClient($_POST['department']);
      $newClient->setCompanyClient($_POST['company']);
      $newClient->setPhoneClient($_POST['phone']);
      $newClient->setPhoneClientExtra($_POST['extra_phone']);
      $newClient->setPhoneExtra($_POST['extra_phone2']);
      $newClient->setEmailClient(trim($_POST['email'],' '));
      $newClient->setWebsiteClient(trim($_POST['web'],' '));
      //revisar metodo
      $newClient->setCostumClient(getCostumClientById($_POST['costum']));

      if (newClient($newClient)) {
        echo "Agregado exitosamente";
      } else {
        echo "Error al crear el cliente";
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

    <title>Crear Cliente | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Crear Cliente</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Crear Cliente</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="#" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">DPI<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 1234567890901" name="client_dpi" minlength="12" type="number" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre Completo<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej:Jose Morales" name="client_name" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Direccion de la Empresa:</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 10ma avenida 60-10 Zona 11" name="direction" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Departamento</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: Quetzaltenango" name="department" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre de la Compañia</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: Purificadora la Gotita" name="company" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Numero de Telefono<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 77315820" name="phone" minlength="4" type="number" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Numero de Telefono Secundarion</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 55481200" name="extra_phone" type="number" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Numero de Telefono Extra</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 55481200" name="extra_phone2" type="number" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Numero FAX</label>
                      <div class="col-lg-10">
                        <input class="form-control" name="fax" type="number" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Correo Electronico</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: juanjose@lagotita.com" type="email" name="email" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Sitio Web</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: http://www.lagotita.com" type="url" name="web" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Tipo de Cliente</label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="costum">
                          <?php
                          foreach (getAllCostumClient() as $cc) {
                            echo '<option value="'.$cc->getIdCostumCategory().'">'.$cc->getNameCostumCategory().'</option>';
                          }
                          ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button herf="" class="btn btn-primary" type="submit" name="add">Agregar</button>
                        <button class="btn btn-default" type="button" >
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