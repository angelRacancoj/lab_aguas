<?php
      require 'employee.php';
      $nomEmpleado=$_POST['nomEmpleado'];
      $dpiEmpleado=$_POST['dpiEmpleado'];
      $telEmpleado=$_POST['telEmpleado'];
      $cargoEmpleado=$_POST['$cargoEmpleado'];
      nuevoEmpleado($nomEmpleado,$dpiEmpleado,$telEmpleado,$cargoEmpleado);
 ?>
