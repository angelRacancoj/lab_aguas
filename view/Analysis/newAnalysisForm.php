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

    <title>Realizar Analisis | Laboratorio de aguas</title>

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
                Parametro
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha del Analisis<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input type="datetime" name="fecha"  value="<?php echo date("Y-m-d");?>"  disabled/>
                      </div>
                    </div><br><br>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Costo <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="nota" minlength="5" type="text" required />
                      </div>
                    </div><br><br>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Muestra <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="Muestra" minlength="5" type="text" required  disabled/>
                        <br><button herf="" class="btn btn-primary" type="submit">SELECCIONAR MUESTRA</button>
                      </div>
                    </div><br><br>

                    
                    
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Paquete <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="package" name="email" required  disabled/>
                        <br><button herf="" class="btn btn-primary" type="submit">SELECCIONAR PAQUETE</button>
                      </div>
                    </div><br><br>


                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Empleado <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="employee" name="email" required  disabled/>
                        <br><button herf="" class="btn btn-primary" type="submit">SELECCIONAR EMPLEADO</button>
                        <!-- ACA SE ASIGNARIA EL EMPLEADO QUE ESTE LOGUEANDO EN EL MOMENTO -->
                      </div>
                    </div><br><br>

                    
                    
                    

       

                 <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                        <button herf="" class="btn btn-primary" type="submit">REALIZAR ANALISIS</button>
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
