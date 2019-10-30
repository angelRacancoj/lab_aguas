<?php
  require("controller/User/UserSession.php");
  $session=new UserSession();
<<<<<<< HEAD
  $name = new $session;
  //$name=$session->getUserName();
=======
  $name=$session->getUserName();
  $rolUser=$session->getUserRol();
>>>>>>> origin/master
  if(isset($name)){
      require("view/Principal/index.php");
  }else{
      require("view/User/login.php");
  }
 ?>
