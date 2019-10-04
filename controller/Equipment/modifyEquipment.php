<?php
    require 'equipment.php';
    $nomEquipo=$_POST['$nomEquipo'];
    $modEquipo=$_POST['modEquipo'];
    $vidaEquipo=$_POST['vidaEquipo'];
    $mantenEquipo=$_POST['$mantenEquipo'];
    if(isset($nomEquipo)){
          modificarNombre($nomEmpleado);
    }
    if(isset($modEquipo)){
          modificarModelo($modEquipo);
    }
    if(isset($vidaEquipo)){
          modificarVida($vidaEquipo);
    }
    if(isset($mantenEquipo)){
          modificarMantenimiento($mantenEquipo);
    }

?>
