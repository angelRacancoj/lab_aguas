<?php
  require("controller/User/UserSession.php");
  $session=new UserSession();
  $name = new $session;
  //$name=$session->getUserName();
  if(isset($name)){
      require("view/Principal/index.php");
  }else{
      require("view/User/login.php");
  }
 ?>
