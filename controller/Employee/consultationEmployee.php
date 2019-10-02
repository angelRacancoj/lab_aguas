<?php
    require 'employee.php';
    //se realizan consultas filtrando por nombre y cargoEmpleado
    $nomEmpleado=$_POST['nomEmpleado'];
    $cargoEmpleado=$_POST['$cargoEmpleado'];
    if(isset($nomEmpleado)&&isset($cargoEmpleado)){
          consultarNombreyCargo($nomEmpleado,$cargoEmpleado);
    }else if(isset($nomEmpleado)){
          consultarNombre($nomEmpleado);
    }else if(isset($cargoEmpleado)){
          consultarCargo($cargoEmpleado);
    }else{
          consultarTodo();
    }
 ?>
