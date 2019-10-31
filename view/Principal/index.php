<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Laboratorio de Aguas</title>

  <!-- Bootstrap CSS -->
  <link href="view/Principal/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="view/Principal/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="view/Principal/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="view/Principal/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="view/Principal/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="view/Principal/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="view/Principal/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="view/Principal/css/owl.carousel.css" type="text/css">
  <link href="view/Principal/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="view/Principal/css/fullcalendar.css">
  <link href="view/Principal/css/widgets.css" rel="stylesheet">
  <link href="view/Principal/css/style.css" rel="stylesheet">
  <link href="view/Principal/css/style-responsive.css" rel="stylesheet" />
  <link href="view/Principal/css/xcharts.min.css" rel=" stylesheet">
  <link href="view/Principal/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Menu" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Ingenieria CUNOC <span class="lite">Laboratorio de aguas</span></a>
      <!--logo end-->




      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">Tienes 6 tareas</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Estudio Aguas</div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% completado</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Proyecto 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% completado (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Aguas residuales</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Diseño</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Otra tarea</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">Ver todas las tareas</a>
              </li>
            </ul>
          </li>


          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/student.png">
                            </span>
                            <span class="username"><?php echo $name;?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Mi Perfil</a>
              </li>

              <li>
                <a href="controller/User/logOut.php"><i class="icon_key_alt"></i> Salir</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
              <i class="icon_house_alt"></i>
              <span>Menu Principal</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>Parametros</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="view/Parameter/NewParameter.php">Crear</a></li>
              <li><a class="" href="view/Parameter/EditParameter.php">Modificar</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>Paquetes</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="view/Package/NewPackage.php">Crear</a></li>
              <li><a class="" href="view/Package/EditPackage.php">Modificar</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>Compras</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="/lab_aguas/view/Shopping/newShoppingSupply.php">Insumos</a></li>
              <li><a class="" href="/lab_aguas/view/Shopping/newShoppingEquipment.php">Equipo</a></li>
              <li><a class="" href="/lab_aguas/view/Shopping/findShopping.php">Consultar</a></li>
              <li><a class="" href="/lab_aguas/view/Shopping/editShopping.php">Modificacion</a></li>
            </ul>
          </li>


          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>Muestras</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="/lab_aguas/view/Sample/newSample.php">Crear</a></li>
              <li><a class="" href="/lab_aguas/view/Sample/findSample.php">Consultar</a></li>
            </ul>
          </li>


          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>Analisis</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="/lab_aguas/view/Analysis/newAnalysis.php">Crear</a></li>
              <li><a class="" href="/lab_aguas/view/Analysis/findAnalysis.php">Consultar</a></li>
            </ul>
          </li>



          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_desktop"></i>
              <span>Equipo</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="/lab_aguas/view/Equipment/newEquipmentForm.php">Crear</a></li>
              <li><a class="" href="/lab_aguas/view/Equipment/consultEquipment.php">Consultar</a></li>
            </ul>
          </li>





          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_desktop"></i>
              <span>Insumos</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="/lab_aguas/view/Supply/newSupply.php">Crear</a></li>
              <li><a class="" href="/lab_aguas/view/Supply/findSupply.php">Consulta</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_genius"></i>
              <span>Clientes</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="/lab_aguas/view/Client/newClient.php">Crear</a></li>
              <li><a class="" href="/lab_aguas/view/Client/findClient.php">Consulta</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_genius"></i>
              <span>Proveedores</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="/lab_aguas/view/Provider/newProvider.php">Crear</a></li>
              <li><a class="" href="/lab_aguas/view/Provider/findProvider.php">Consultar</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_genius"></i>
              <span>Empleados</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <?php
                if($rolUser==1){//rol uno administrador
                    echo '<li><a class="" href="/lab_aguas/view/Employee/newEmployeForm.php">Crear</a></li>';
                }
             ?>
              <li><a class="" href="/lab_aguas/view/Employee/consultEmployee.php">Consultar</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_desktop"></i>
              <span>Mantenimiento</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="/lab_aguas/view/Maintenance/newMaintenance.php">Agregar</a></li>
              <li><a class="" href="/lab_aguas/view/Maintenance/findMaintenance.php">Consultar</a></li>
            </ul>
          </li>

          <li>
            <a class="" href="widgets.html">
              <i class="icon_piechart"></i>
              <span>Resultados</span>
            </a>
          </li>
<!-- aca termina-->

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Principal</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
              <li><i class="fa fa-laptop"></i>Principal</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count">6.674</div>
              <div class="title">Parametros</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">7.538</div>
              <div class="title">Compras</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">4.362</div>
              <div class="title">Estudios</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">1.426</div>
              <div class="title">Insumos</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->



          <!--/col-->
          <div class="col-md-3">

            <div class="social-box facebook">
              <i class="fa fa-facebook"></i>
              <ul>
                <li>
                  <strong>256k</strong>
                  <span>friends</span>
                </li>
                <li>
                  <strong>359</strong>
                  <span>feeds</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->
          </div>
          <div class="col-md-3">

            <div class="social-box google-plus">
              <i class="fa fa-google-plus"></i>
              <ul>
                <li>
                  <strong>962</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>256</strong>
                  <span>circles</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box twitter">
              <i class="fa fa-twitter"></i>
              <ul>
                <li>
                  <strong>1562k</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>2562</strong>
                  <span>tweets</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->

        </div>



        <!-- statics end -->



        </div><br><br>

        <div class="row">
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Calendario</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>

              </div><br><br><br>
              <div class="panel-body">
                <!-- Widget content -->

                <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                <div id="calendar"></div>

              </div>
            </div>

          </div>

          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Recordatorio</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Titulo</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title">
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Recordatorio</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" id="content"></textarea>
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Categoria</label>
                        <div class="col-lg-10">
                          <select class="form-control">
                                                  <option value="">- Categoria -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">nuevo</option>
                                                  <option value="3">Advertencia</option>
                                                  <option value="4">Error</option>
                                                </select>
                        </div>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Descripcion</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags">
                        </div>
                      </div>


                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Publicar</button>
                          <button type="submit" class="btn btn-danger">Guardar</button>
                          <button type="reset" class="btn btn-default">Borrar</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="view/Principal/js/jquery.js"></script>
  <script src="view/Principal/js/jquery-ui-1.10.4.min.js"></script>
  <script src="view/Principal/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="view/Principal/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="view/Principal/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="view/Principal/js/jquery.scrollTo.min.js"></script>
  <script src="view/Principal/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="view/Principal/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="view/Principal/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="view/Principal/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="view/Principal/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="view/Principal/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="view/Principal/js/calendar-custom.js"></script>
    <script src="view/Principal/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="view/Principal/js/jquery.customSelect.min.js"></script>
    <script src="view/Principal/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="view/Principal/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="view/Principal/js/sparkline-chart.js"></script>
    <script src="view/Principal/js/easy-pie-chart.js"></script>
    <script src="view/Principal/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="view/Principal/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="view/Principal/js/xcharts.min.js"></script>
    <script src="view/Principal/js/jquery.autosize.min.js"></script>
    <script src="view/Principal/js/jquery.placeholder.min.js"></script>
    <script src="view/Principal/js/gdp-data.js"></script>
    <script src="view/Principal/js/morris.min.js"></script>
    <script src="view/Principal/js/sparklines.js"></script>
    <script src="view/Principal/js/charts.js"></script>
    <script src="view/Principal/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
