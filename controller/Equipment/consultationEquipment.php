<?php
    require 'equipment.php';
    $modEquipo=$_POST['$nomEquipo'];
    $modEquipo=$_POST['modEquipo'];
    if(isset($nomEquipo)&&isset($modEquipo)){
          consultarNombreyModelo($modEquipo,$modEquipo);
    }else if(isset($modEquipo)){
          consultarNombre($modEquipo);
    }else if(isset($modEquipo)){
          consultarModelo($modEquipo);
    }else{
          consultarTodo();
    }


 ?>
