<?php
class UserSession{

    public function __construct(){
      session_start();
    }

    public function setUserName($user){
        $_SESSION['userName'] = $user;
    }

    public function getUserName(){
        return $_SESSION['userName'];
    }
    public function setUserRol($rol){
        $_SESSION['userRol'] = $rol;
    }
    public function getUserRol($rol){
        return $_SESSION['userRol'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>
