<?php
  require "../../model/Entity/Shopping.php";
  require "../../model/Entity/Supply.php";
  require "../../model/Entity/Equipment.php";
  require "../../controller/Shopping/shoppingController.php";
  require "../../controller/Supply/supplyController.php";
  require "../../controller/Provider/providerController.php";
  require "../../controller/User/UserSession.php";
/*
  $newShopping = new Shopping();

      $newShopping->setDateShopping(new DateTime('2019-10-10'));
      $newShopping->setAmountPurchased('30');
      $newShopping->setNoteShopping('Nota 1');
      $newShopping->setSupply(getSupplyByCode('1'));
      $newShopping->setProvider(getProviderById(8));
      $newShopping->setEquipment(NULL);
      newPurchase($newShopping);
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
      $newShopping = new Shopping();

      $newShopping->setDateShopping(new DateTime($_POST['date']));
      $newShopping->setAmountPurchased($_POST['quantity']);
      $newShopping->setNoteShopping($_POST['nota']);
      $newShopping->setSupply(getSupplyByCode($_POST['supply']));
      $newShopping->setProvider(getProviderById($_POST['costumProvider']));
      //$newShopping->setEquipment(null);

      if (newPurchase($newShopping)) {
        echo "Compra realizada";
      } else {
        echo "Error al realizar la compra";
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

    <title>Realizar Compra | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Compra de Insumos</h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">Agregar Compra</header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" action="#" method="post">
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha de la compra<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" name="date" type="date" required />
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Insumo<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="supply">
                          <?php
                          foreach (getAllSupplies() as $supplyIn) {
                            echo '<option value="'.$supplyIn->getIdSupply().'">'.$supplyIn->getIdSupply().' - '.$supplyIn->getNameSupply().'</option>';
                          }
                          ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Proveedor<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="costumProvider">
                          <?php
                          foreach (getAllProviders() as $providerIn) {
                            echo '<option value="'.$providerIn->getIdProvider().'">'.$providerIn->getIdProvider().' - '.$providerIn->getNameProvider().'</option>';
                          }
                          ?>
                      </select>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Cantidad<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: 20" name="quantity" type="number" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nota de la compra:</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Ej: Compra segun factura No. 1" name="nota" type="text" />
                      </div>
                    </div>

                      
                      <!-- 
                      <div class="container">

                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buscar</button>

                        <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Titulo</h4>
                              </div>
                              <div class="modal-body">
                                

                                <table class="table table-striped table-advance table-hover">
                            <tbody>
                              <tr>
                                <th><i class="icon_id"></i>ID</th>
                                <th><i class="icon_profile"></i>Nombre</th>
                                <th><i class="icon_phone  "></i>Numero Telefónico</th>
                                <th><i class="icon_cogs"></i>Direccion</th>
                              </tr>

                              <tr>
                                 <td>1</td>
                                 <td>PROVEEDOR 1</td>
                                 <td>12345678</td>
                                 <td>DIRECCION 1</td>
                              </tr>

                              <tr>
                                 <td>2</td>
                                 <td>PROVEEDOR 2</td>
                                 <td>12345678</td>
                                 <td>DIRECCION 2</td>
                              </tr>

                              <tr>
                                 <td>3</td>
                                 <td>PROVEEDOR 3</td>
                                 <td>12345678</td>
                                 <td>DIRECCION 3</td>
                              </tr>

                              <?php
                              /*foreach (getAllProviders() as $providerId) {
                                echo "<tr>";
                                echo '<td>'.$providerId->getIdProvider().'</td>';
                                echo '<td>'.$providerId->getNameProvider().'</td>';
                                echo '<td>'.$providerId->getPhoneProvider().'</td>';
                                echo '<td>'.$providerId->getDirectionProvider().'</td>';
                                echo '<td>File</td>';
                                echo "</tr>";
                              }*/
                              ?>

                            </tbody>
                          </table>  


                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      -->

                    


                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button herf="" class="btn btn-primary" type="submit" name="add">Comprar</button>
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
