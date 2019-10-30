<?php
  require "/var/www/html/lab_aguas/model/Entity/Client.php";
  require "/var/www/html/lab_aguas/controller/Client/clientController.php";
  require "/var/www/html/lab_aguas/controller/CostumClient/costumClientController.php";

  $dpi_c=$name_c=$direction_c=$department_c=$company_c=$phone_c="";
  $extra_phone_c=$extra_phone2_c=$email_c=$web_c=$custom_category="";

  echo "DPI: ". $_GET['dpi'];
  $dpi_c = $_GET['dpi'];

  if (isset($dpi_c)) {
      $clienti = getClientById($dpi_c);

      $name_c = $clienti->getNameClient();
      $direction_c = $clienti->getDirectionClient();
      $department_c = $clienti->getCityClient();
      $company_c = $clienti->getCompanyClient();
      $phone_c = $clienti->getPhoneClient();
      $extra_phone_c = $clienti->getPhoneClientExtra();
      $extra_phone2_c = $clienti->getPhoneExtra();
      $email_c = $clienti->getEmailClient();
      $web_c = $clienti->getWebSiteClient();
      $custom_category = $clienti->getCostumClient()->getIdCostumCategory();
    }

  if ($_POST['update'] && isset($dpi_c)) {
    $newClient = getClientById($dpi_c);
    
    if (strcmp($newClient->getNameClient(),$_POST['client_name']) != 0) {
      $newClient->setNameClient($_POST['client_name']);
    }
    if (strcmp($newClient->getDirectionClient(),$_POST['direction']) != 0) {
      $newClient->setDirectionClient()($_POST['direction']);
    }
    if (strcmp($newClient->getCityClient(),$_POST['department']) != 0) {
      $newClient->setCityClient($_POST['department']);
    }
    if (strcmp($newClient->getCompanyClient(),$_POST['company']) != 0) {
      $newClient->setCompanyClient($_POST['company']);
    }
    if ($newClient->getPhoneClient() != $_POST['phone']) {
      $newClient->setPhoneClient($_POST['phone']);
    }
    if ($newClient->getPhoneClientExtra() != $_POST['extra_phone']) {
      $newClient->setPhoneClientExtra($_POST['extra_phone']);
    }
    if ($newClient->getPhoneExtra() != $_POST['extra_phone2']) {
      $newClient->setPhoneExtra($_POST['extra_phone2']);
    }
    if (strcmp($newClient->getWebSiteClient(),$_POST['web']) != 0) {
      $newClient->setWebSiteClient($_POST['web']);
    }
    if (strcmp($newClient->getEmailClient(),$_POST['email']) != 0) {
      $newClient->setEmailClient($_POST['email']);
    }
    if ($newClient->getCostumClient()->getIdCostumCategory() != $_POST['costum']) {
      $newClient->setCostumClient(getCostumClientById($_POST['costum']));
    }

    if (updateClient($newClient)) {
      echo "Modificacion exitosa";
    } else {
      echo "Modificacion fallida";
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

    <title>Actualizar Cliente | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Actualizar Cliente</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Actualizar Cliente</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="#" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">DPI<span class="required">*</span></label>
                      <label for="cname" class="control-label col-lg-2"><b>
                        <?php echo $dpi_c; ?>
                      </b></label>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre Completo<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej:Jose Morales" name="client_name" minlength="5" type="text" required value= 
                          <?php echo '"'.$name_c.'"'; ?>
                        />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Direccion de la Empresa:</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 10ma avenida 60-10 Zona 11" name="direction" type="text" value= 
                          <?php echo '"'.$direction_c.'"'; ?>
                        />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Departamento</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: Quetzaltenango" name="department" type="text" value= 
                          <?php echo '"'.$department_c.'"'; ?>
                        />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre de la Compañia</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: Purificadora la Gotita" name="company" type="text" value= 
                          <?php echo '"'.$company_c.'"'; ?>
                        />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Numero de Telefono<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 77315820" name="phone" minlength="4" type="number" required value= 
                          <?php echo '"'.$phone_c.'"'; ?>
                        />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Numero de Telefono Secundarion</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 55481200" name="extra_phone" type="number" value= 
                          <?php echo '"'.$extra_phone_c.'"'; ?>/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Numero de Telefono Extra</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 55481200" name="extra_phone2" type="number" value= 
                          <?php echo '"'.$extra_phone2_c.'"'; ?>/>
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
                        <input class="form-control" placeholder="Ej: juanjose@lagotita.com" type="email" name="email" value= 
                          <?php echo '"'.$email_c.'"'; ?>
                        />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Sitio Web</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: http://www.lagotita.com" type="url" name="web" value= 
                          <?php echo '"'.$web_c.'"'; ?>
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Tipo de Cliente</label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="costum">
                          <?php
                            foreach (getAllCostumClient() as $cc) {
                              echo '<option value="'.$cc->getIdCostumCategory().'"';
                              if ($custom_category == $cc->getIdCostumCategory()) {
                                echo ' selected';
                              }
                              echo ' >'.$cc->getNameCostumCategory().'</option>';
                            }
                          ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button herf="" class="btn btn-primary" type="submit" name="update">Actualizar</button>
                        <button class="btn btn-default" type="button">
                          <a href="findClient.php" title="Regresar al Menu Principal" >Regresar</a>
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