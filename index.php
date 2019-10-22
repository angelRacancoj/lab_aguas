<?php
  require("controller/User/UserSession.php");
  $session=new UserSession();
  if(isset($_SESSION['userName'])) {//Existe session, acceder a pagina principal
    echo 'Hay sesion: '.$_SESSION['userName'];
    $session->closeSession();
  }else{//no existe session mostrar formulario de login
    $session->setUserName("juanito");
    echo 'No hay session';
  }
 ?>
