<?php
  require_once("../../controller/Equipment/equipmentController.php");
  require_once("../../model/Entity/Equipment.php");
  $equipmentCon;
  if(isset($_POST['back'])){
      header('Location: /lab_aguas');
  }else if(isset($_POST['send'])){
      $nameEquipment=$_POST['nameEquipment'];
      $modelEquipment=$_POST['modelEquipment'];
      if(!empty($nameEquipment)&&!empty($modelEquipment)){

      }else if(!empty($nameEquipment)){
        
      }else if(!empty($modelEquipment)){

      }else{
          $equipmentCon=getAllEquipment();
      }
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

     <title>Buscar Equipo | Laboratorio de aguas</title>

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
             <h3 class="page-header"><i class="fa fa-files-o"></i>Buscar Equipo</h3>

           </div>
         </div>
         <!-- Form validations -->
         <div class="row">
           <div class="col-lg-12">
             <section class="panel">
               <header class="panel-heading">Buscar Equipo</header>
               <div class="panel-body">
                 <div class="form">
                   <form class="form-validate form-horizontal" id="feedback_form" method="post">
                     <div class="form-group">
                       <label class="control-label col-lg-2" for="inputSuccess">Busqueda:</label>
                       <div class="col-lg-10">
                         <div class="row">
                           <div class="col-lg-2">
                             <input class="form-control" type="text" name="nameEquipment" placeholder="Ingrese el nombre"></input>
                           </div>
                           <div class="col-lg-3">
                             <input class="form-control" type="text" name="modelEquipment" placeholder="Seleccione puesto"></input>
                           </div>
                           <div class="col-lg-3">
                             <button class="btn btn-primary" name="send">Buscar</button>
                             <button class="btn btn-primary" name="back">Volver</button>
                           </div>
                         </div>

                       </div>
                     </div>

                     <div class="row">
                       <div class="col-lg-12">
                         <section class="panel">
                           <header class="panel-heading">Lista de Insumo</header>

                           <table class="table table-striped table-advance table-hover">
                             <tbody>
                               <tr>
                                 <th><i class="icon_id"></i>Nombre</th>
                                 <th><i class="icon_cogs"></i>Modelo</th>
                                 <th><i class="icon_cogs"></i>Tiempo vida(hrs)</th>
                                 <th><i class="icon_cogs"></i>Tiempo mantenimiento(hrs)</th>
                               </tr>
                               <?php
                               foreach ($equipmentCon as $equipment1) {
                                 echo "<tr>";
                                 echo '<td>'.$equipment1->getNameEquipment().'</td>';
                                 echo '<td>'.$equipment1->getModelEquipment().'</td>';
                                 echo '<td>'.$equipment1->getWorkingHours().'</td>';
                                 echo '<td>'.$equipment1->getMaintenanceTime().'</td>';
                                 echo '<td>
                                   <div class="btn-group">
                                     <a class="btn btn-primary" name="update" href="modifyEquipment.php?id='.$equipment1->getIdEquipment().'" title="Modificar"><i class="icon_plus_alt2"></i></a>
                                   </div>
                                 </td>';
                                 echo "</tr>";
                               }
                               ?>
                             </tbody>
                           </table>
                         </section>
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
