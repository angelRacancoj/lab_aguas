<?php
  /*require "/var/www/html/lab_aguas/model/Entity/Shopping.php";
  require "/var/www/html/lab_aguas/model/Entity/Supply.php";
  require "/var/www/html/lab_aguas/model/Entity/Equipment.php";
  require "/var/www/html/lab_aguas/model/Entity/Provider.php";
  require "/var/www/html/lab_aguas/model/Entity/Measure.php";
  require "/var/www/html/lab_aguas/controller/Shopping/shoppingController.php";
  require "../../controller/User/UserSession.php";*/

  require "../../model/Entity/Shopping.php";
  require "../../model/Entity/Supply.php";
  require "../..//model/Entity/Equipment.php";
  require "../..//model/Entity/Provider.php";
  require "../..//model/Entity/Measure.php";
  require "../..//controller/Shopping/shoppingController.php";
  require "../..//controller/Provider/providerController.php";
  require "../..//controller/Supply/supplyController.php";
  require "../..//controller/Equipment/equipmentController.php";
  require "../../controller/User/UserSession.php";


  $session = new UserSession();
  $session_role = 0;
  if (isset($session)) {
    if ($session->getUserRol() !== null) {
      $session_role = $session->getUserRol();
    }
  }

  //$dpi_c=$name_c=$direction_c=$department_c=$company_c=$phone_c="";
  //$extra_phone_c=$extra_phone2_c=$email_c=$web_c=$custom_category="";


  $id_s=$amount=$date_s=$note_s=$id_supply=$id_equip=$id_prov="";

  //echo "ID: ". $_GET['idShop'];
  $id_s = $_GET['idShop'];

  if ($session_role == 1) {
      if (isset($id_s)) {
        $shopObject = getPurchaseById($id_s);

        $amount = $shopObject->getAmountPurchased();
        $date_s = $shopObject->getDateShopping();
        $note_s = $shopObject->getNoteShopping();

        $id_supply = $shopObject->getSupply()->getIdSupply();
        $id_equip = $shopObject->getEquipment()->getIdEquipment();
        $id_prov = $shopObject->getProvider()->getIdProvider();

      }

    if ($_POST['update'] && isset($id_s)) {
      $newShopping = getPurchaseById($id_s);
      
      if (strcmp($newShopping->getAmountPurchased(),$_POST['cantidad']) != 0) {
        $newShopping->setAmountPurchased($_POST['cantidad']);
      }
      if (strcmp($newShopping->getDateShopping(),$_POST['fecha']) != 0) {
        $newShopping->setDateShopping()($_POST['fecha']);
      }
      if (strcmp($newShopping->getNoteShopping(),$_POST['nota']) != 0) {
        $newShopping->setNoteShopping($_POST['nota']);
      }
      if (strcmp($newShopping->getEquipment(),$_POST['equipo']) != 0) {
        $newShopping->setEquipment($_POST['equipo']);
      }
      if ($newShopping->getProvider() != $_POST['proveedor']) {
        $newShopping->setProvider($_POST['proveedor']);
      }
      if ($newShopping->getSupply() != $_POST['insumo']) {
        $newShopping->setSupply($_POST['insumo']);
      }
      

      if (updateShopping($newShopping)) {
        echo "Modificacion de compra exitosa";
      } else {
        echo "Modificacion de compra fallida";
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

    <title>Actualizar Compra | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Actualizar Compra</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Compra</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="#" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">ID<span class="required">*</span></label>
                      <label for="cname" class="control-label col-lg-2"><b>
                        <?php 
                        echo $id_s; 
                        ?>
                      </b></label>
                    </div>
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha de la compra<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" name="fecha" type="date" required value=
                          <?php echo '"'.$date_s.'"'; ?>
                        />
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Insumo</label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="insumo" >
                          <?php
                            foreach (getAllSupplies() as $insumoObject) {
                              echo '<option value="'.$insumoObject->getIdSupply().'"';
                              if ($id_supply == $insumoObject->getIdSupply()) {
                                echo ' selected';
                              }
                              echo ' >'.$insumoObject->getNameSupply().'</option>';
                            }
                          ?>
                      </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Equipo</label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="equipo">
                          <?php
                            foreach (getAllEquipment() as $equipoObject) {
                              echo '<option value="'.$equipoObject->getIdEquipment().'"';
                              if ($id_equip == $equipoObject->getIdEquipment()) {
                                echo ' selected';
                              }
                              echo ' >'.$equipoObject->getNameEquipment().'</option>';
                            }
                          ?>
                      </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Proveedor</label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="proveedor">
                          <?php
                            foreach (getAllProviders() as $proveedorObject) {
                              echo '<option value="'.$proveedorObject->getIdProvider().'"';
                              if ($id_prov == $proveedorObject->getIdProvider()) {
                                echo ' selected';
                              }
                              echo ' >'.$proveedorObject->getNameProvider().'</option>';
                            }
                          ?>
                      </select>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Cantidad<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 20" name="cantidad" type="number" required  value=
                          <?php echo '"'.$amount.'"'; ?>
                        />
                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nota de compra</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: Compra segun factura No. 1" name="nota" type="text" value= 
                          <?php echo '"'.$note_s.'"'; ?>
                        />
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