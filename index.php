<?php
  require("controller/User/UserSession.php");
  $session=new UserSession();
  $name=1;
  if(isset($name)){
      require("view/Principal/index.php");
  }else{
      require("view/User/login.php");
  }
 ?>
