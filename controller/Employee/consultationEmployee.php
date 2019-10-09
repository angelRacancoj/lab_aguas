<?php
    require 'employee.php';
    //se realizan consultas filtrando por nombre y cargoEmpleado
    $employeeName=$_POST['employeeName'];
    $employeePosition=$_POST['employeePosition'];
    if(isset($employeeName)&&isset($employeePosition)){
          getByNameAndPosition($employeeName,$employeePosition);
    }else if(isset($employeeName)){
          getByName($employeeName);
    }else if(isset($employeePosition)){
          getByPosition($employeePosition);
    }else{
          getAll();
    }
 ?>
