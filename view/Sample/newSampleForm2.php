<?php
  require_once("../../controller/Sample/sampleController.php");
  require_once("../../model/Entity/Sample.php");
  require_once "../../model/Entity/StaffPosition.php";

  
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

    <title>Crear Muestra | Laboratorio de aguas</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i> Muestra</h3>

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
                      <label for="cname" class="control-label col-lg-2">Fecha de Admision <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input type="datetime" name="fecha de admision"  value="<?php echo date("Y-m-d");?>"  disabled/>
                      </div>
                    </div><br>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha de Toma <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31" required  />
                      </div>
                    </div><br>

                    
                    
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Lote <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input type="number" min="0" max="50" step="1" value="0" size="6" name="cantidad" required />
                      </div>
                    </div><br>

                    
                    
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Hora</label>
                      <div class="col-lg-10">
                        <input type="time" name="hora" />
                      </div>
                    </div><br>




                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Contenedor <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="contenedor" minlength="5" type="text" required />
                      </div>
                    </div><br>



                    <div class="form-group">
                      <label class="control-label col-lg-2" for="inputSuccess">Esta Refrigerado</label>
                      <div class="col-lg-10">
                            <div class="form-group ">
                      <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                 Si
                              </label>
                        </div>
                        <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                 No
                              </label>
                        </div>
                    </div>
                      </div>
                    </div><br>

                    
                    
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Temperatura <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input type="number" min="0" max="500" step="1" value="0" size="6" name="cantidad" required />
                      </div>
                    </div><br>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2"> Cantidad de Muestra <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input type="number" min="0" max="500" step="1" value="0" size="6" name="cantidad" required />
                      </div>
                    </div><br>


                      <label class="control-label col-lg-2" for="inputSuccess">Es Nacimiento de Agua</label>
                      <div class="col-lg-10">
                            <div class="form-group ">
                      <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios2" id="optionsRadios21" value="option1" checked>
                                 Si
                              </label>
                        </div>
                        <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios2" id="optionsRadios22" value="option2">
                                 No
                              </label>
                        </div>
                    </div>
                      </div>
                    </div><br><br><br><br><br>




                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Aldea <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="aldea" minlength="5" type="text" required />
                      </div>
                    </div><br><br><br><br><br><br>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Observaciones <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="aldea" minlength="5" type="text" required />
                      </div>
                    </div><br><br><br><br><br><br>



                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Pueblo <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="pueblo" minlength="5" type="text" required />
                      </div>
                    </div><br><br><br><br><br><br>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Nota de la Muestra <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="pueblo" minlength="5" type="text" required />
                      </div>
                    </div><br><br><br><br><br><br>


                    <label class="control-label col-lg-2" for="inputSuccess">Es Aceptada</label>
                      <div class="col-lg-10">
                            <div class="form-group ">
                      <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadio3" id="optionsRadios31" value="option1" checked>
                                 Si
                              </label>
                        </div>
                        <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios3" id="optionsRadios32" value="option2">
                                 No
                              </label>
                        </div>
                    </div>
                      </div>
                    </div><br><br><br><br><br><br>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Boleta de Pago <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="pueblo" minlength="5" type="text" required />
                      </div>
                    </div><br><br><br><br><br><br>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Municipio <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="Municipality" minlength="5" type="text" required  disabled/>
                        <br><button herf="" class="btn btn-primary" type="submit">SELECCIONAR MUNICIPIO</button>
                      </div>
                    </div><br><br><br><br><br><br>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> DPI del Cliente <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="Client" minlength="5" type="text" required  disabled/>
                        <br><button herf="" class="btn btn-primary" type="submit">SELECCIONAR CLIENTE</button>
                      </div>
                    </div><br>                  


        
                 <br><br><br><br><br><br><br><br><div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                        <button herf="" class="btn btn-primary" type="submit">CREAR MUESTRA</button>
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


