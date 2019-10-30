<?php
  require_once("model/Entity/Employee.php");
  require_once("controller/User/userController.php");
  require_once("controller/User/UserSession.php");
  require_once("controller/User/encription.php");
  $message;
  if(isset($_POST['send'])){
      $employee=new Employee();
      $converter = new Encryption();
      $str =$_POST['userPassword'];
      $encoded = $converter->encode($str);
      $employee->setDpiEmployee($_POST['userName']);
      $employee->setPassword($encoded);
      $employeeCon=getEmployeeByDpiAndPass($employee);
      if(isset($employeeCon)){
            //se inicio sesion correctamente
            $message='Sesion iniciada';
            $session=new UserSession();
            $session->setUserName($employeeCon->getDpiEmployee());
            $session->setUserRol($employeeCon->getStaffPosition()->getIdStaffPosition());
            header('Location: ../../index.php');
      }else{
          //no se pudo iniciar session
          $message='No se pudo encontrar datos ingresados';
      }

  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/lab_aguas/view/CSS/Forms/forms.css">
  </head>
  <body>
        <form class="form" action="#" method="post">
          <?php if(isset($message)){echo '<h5>'.$message.'</h5>';} ?>
          <h2>Iniciar Sesion</h2>
          <p type="Dpi:"><input type="text" name="userName" placeholder="Ingrese su numero de DPI" required></input></p>
          <p type="Contraseña:"><input type="password" name="userPassword" placeholder="Ingrese su Contraseña" required></input></p>
          <button name="send">Ingresar</button>
        </form>
  </body>
</html>
