<?php
require 'employee.php';
$nomEmpleado=$_POST['nomEmpleado'];
$dpiEmpleado=$_POST['dpiEmpleado'];
$telEmpleado=$_POST['telEmpleado'];
$cargoEmpleado=$_POST['$cargoEmpleado'];
if(isset($nomEmpleado)){
      modificarNombre($nomEmpleado);
}
if(isset($dpiEmpleado)){
      modificarDpi($dpiEmpleado);
}
if(isset($telEmpleado)){
      modificarTelefono($telEmpleado);
}
if(isset($cargoEmpleado)){
      modificarCargo($cargoEmpleado);
}


 ?>
