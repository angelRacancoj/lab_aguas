<?php
  require("controller/User/UserSession.php");
  $session=new UserSession();
  //Eliminar
  $session->setUserName("Prueba");
  $session->setUserRol(1);
  //Eliminar
  $name=$session->getUserName();
  $rolUser=$session->getUserRol();
  if(isset($name)){
      require("view/Principal/index.php");
  }else{
      require("view/User/login.php");
  }
 ?>
