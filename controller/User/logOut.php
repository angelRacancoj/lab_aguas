<?php
  require('UserSession.php');
  $session=new UserSession();
  $session->closeSession();
  header('Location: /lab_aguas');
?>
