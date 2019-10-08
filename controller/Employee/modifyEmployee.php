<?php
require 'employee.php';
$employeeDpi=$_POST['employeeDpi'];
$employeeName=$_POST['employeeName'];
$employeePhone=$_POST['employeePhone'];
$employeePosition=$_POST['employeePosition'];
if(isset($employeeName)){
      modifyName($employeeName);
}
if(isset($employeeName)){
      modifyDpi($employeeName);
}
if(isset($employeePhone)){
      modifyPhone($employeePhone);
}
if(isset($employeePosition)){
      modifyPosition($employeePosition);
}


 ?>
