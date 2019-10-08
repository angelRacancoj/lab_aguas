<?php
  require('user.php');
  require('UserSession.php');
  $userDpi=$_POST['userDpi'];
  $userPass=$_POST['userPass'];
  $user=getEmployByDpiAndPass($userDpi,$userPass);
  if(isset($user)){
      //usuario encontrado
  }else{// usuario no encontrado

  }
?>
