<?php
  require_once("../../controller/Sample/sampleController.php");
  require_once("../../model/Entity/Sample.php");
  require_once "../../model/Entity/StaffPosition.php";

  $send=$_POST['send'];
  if(isset($send)){
      $employee=new Employee();
      $staffPosition= getEmployeePositionbyName($_POST['position']);
      $isActive=1;
      if($_POST['state']=='Desactivo'){
          $isActive=0;
      }
      $employee->setDpiEmployee($_POST['employeeDpi']);
      $employee->setNameEmployee($_POST['employeeName']);
      $employee->setPassword($_POST['employeePosition']);
      $employee->setIsActive($isActive);
      $employee->setPhoneEmployee($_POST['employeePhone']);
      $employee->setStaffPosition($staffPosition);
      newEmployee($employee);
      //set atributos
      echo "Enviar";
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../CSS/Forms/forms.css">
  </head>
  <body>
      <form class="form" action="#" method="post">
        <h2>Registrar nuevo empleado</h2>
        <p type="Puesto:">
        <select name="position">
          <?php
            foreach (getAllEmployeePosition() as $position) {
                  echo '<option value="'.$position->getIdStaffPosition().'">'.$position->getNameStaffPosition().'</option>';
            }
           ?>
        </select>
        </p>
        <p type="Dpi:"><input type="text" pattern="\d*" name="employeeDpi" placeholder="Ingrese el numero de dpi del cliente" maxlength="14" required></input></p>
        <p type="Nombre:"><input type="text" name="employeeName" placeholder="Ingrese el nombre del Empleado" maxlength="60" required></input></p>
        <p type="Telefono:"><input type="text" pattern="\d*" name="employeePhone" value="" placeholder="Ingrese el numero de telefono del empleado" maxlength="10" required></input></p>
        <p type="Contraseña:"><input type="password" name="employeePosition" autocomplete="new-password" placeholder="Defina una Contraseña para el empleado" maxlength="15" required></input></p>
        <p type="Estado:">
          <select name="state">
            <option value="Activo">Activo</option>
            <option value="Desactivo">Desactivo</option>
          </select>
        </p>
        <button name="send">Registrar Empleado</button>
      </form>
  </body>
</html>
