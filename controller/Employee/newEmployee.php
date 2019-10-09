<?php
      require 'employee.php';
      $employeeDpi=$_POST['employeeDpi'];
      $employeeName=$_POST['employeeName'];
      $employeePhone=$_POST['employeePhone'];
      $employeePosition=$_POST['employeePosition'];
      newEmployee($employeeDpi,$employeeName,$employeePhone,$employeePosition);
 ?>
