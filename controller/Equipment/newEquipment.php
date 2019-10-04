<?php
    require 'equipment.php';
    $nomEquipo=$_POST['$nomEquipo'];
    $modEquipo=$_POST['modEquipo'];
    $vidaEquipo=$_POST['vidaEquipo'];
    $mantenEquipo=$_POST['$mantenEquipo'];
    nuevoEquipo($nomEquipo,$modEquipo,$vidaEquipo,$mantenEquipo);
 ?>
