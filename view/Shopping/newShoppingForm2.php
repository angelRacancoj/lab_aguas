<?php
  require_once("../../controller/Provider/providerController.php");
  require_once("../../controller/Equipment/equipmentController.php");
  require_once("../../model/Entity/Shopping.php");
  require_once "../../model/Entity/Provider.php";
  require_once "../../model/Entity/Equipment.php";
  
  $send=$_POST['send2'];
  if(isset($send)){
      $shopping=new Purchase();
      $providerShop = createProviderTest();
      $equipmentShop = createEquipmentTest();
      
      $shopping->setAmountPurchased($_POST['cantidad']);
      $shopping->setDateShopping($_POST['fecha']);
      $shopping->setNoteShopping($_POST['noteShopping']);
      $shopping->setEquipment($equipmentShop);
      $shopping->setProvider($providerShop);
      
      newPurchase($shopping);
      //set atributos
      echo "Enviar";
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

    <title>Registrar Compra | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i> Compra </h3>

          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Compras
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input type="datetime" name="fecha"  value="<?php echo date("Y-m-d");?>"  disabled/>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Proveedor <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="Provider" minlength="5" type="text" required  disabled/>
                        <br><button herf="" class="btn btn-primary" type="submit">SELECCIONAR PROVEEDOR</button>
                      </div>
                    </div>

                    
                    
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Item <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="item" name="email" required  disabled/>
                        <br><button herf="" class="btn btn-primary" type="submit">SELECCIONAR ITEM</button>
                      </div>
                    </div>

                    
                    
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Cantidad</label>
                      <div class="col-lg-10">
                        <input type="number" min="0" max="50" step="1" value="0" size="6" name="cantidad" />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nota <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="nota" minlength="5" type="text" required />
                      </div>
                    </div>
                    

        <div class="row">
                      <div class="col-lg-12">
                        <section class="panel">
                          <header class="panel-heading">
                            Advanced Table
                          </header>

                          <table class="table table-striped table-advance table-hover">
                            <tbody>
                              <tr>
                                <th><i class="icon_profile"></i> FECHA </th>
                                <th><i class="icon_calendar"></i> PROVEEDOR </th>
                                <th><i class="icon_mail_alt"></i> ITEM </th>
                                <th><i class="icon_pin_alt"></i> CANTIDAD</th>
                                <th><i class="icon_mobile"></i> NOTA </th>
                              </tr>
                              <tr>
                                <td>24-10-2019</td>
                                <td>PROVEEDOR 1</td>
                                <td>INSUMO 1</td>
                                <td>20</td>
                                <td>COMPRA SEGUN FACTURA 5</td>
                                <td>
                                  <div class="btn-group">
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>24-10-2019</td>
                                <td>PROVEEDOR 2</td>
                                <td>EQUIPO 1</td>
                                <td>50</td>
                                <td>COMPRA SEGUN FACTURA 55</td>
                                <td>
                                  <div class="btn-group">
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>24-10-2019</td>
                                <td>PROVEEDOR 2</td>
                                <td>INSUMO 2</td>
                                <td>37</td>
                                <td>COMPRA SEGUN FACTURA 35</td>
                                <td>
                                  <div class="btn-group">
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>24-10-2019</td>
                                <td>PROVEEDOR 2</td>
                                <td>EQUIPO 2</td>
                                <td>84</td>
                                <td>COMPRA SEGUN FACTURA 8</td>
                                <td>
                                  <div class="btn-group">
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>24-10-2019</td>
                                <td>PROVEEDOR 3</td>
                                <td>EQUIPO 3</td>
                                <td>16</td>
                                <td>COMPRA SEGUN FACTURA 38</td>
                                <td>
                                  <div class="btn-group">
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>24-10-2019</td>
                                <td>PROVEEDOR 2</td>
                                <td>EQUIPO 4</td>
                                <td>42</td>
                                <td>COMPRA SEGUN FACTURA 19</td>
                                <td>
                                  <div class="btn-group">
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>24-10-2019</td>
                                <td>PROVEEDOR 3</td>
                                <td>EQUIPO 1</td>
                                <td>84</td>
                                <td>COMPRA SEGUN FACTURA 32</td>
                                <td>
                                  <div class="btn-group">
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>24-10-2019</td>
                                <td>PROVEEDOR 2</td>
                                <td>INSUMO 4</td>
                                <td>67</td>
                                <td>COMPRA SEGUN FACTURA 40</td>
                                <td>
                                  <div class="btn-group">
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </section>
                      </div>
                    </div>

                 <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                        <button herf="" class="btn btn-primary" type="submit">REALIZAR COMPRA</button>
                                        <button class="btn btn-default" type="button">CANCELAR</button>
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
