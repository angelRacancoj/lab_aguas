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
    public function setUserRol($user){
        $_SESSION['userRol'] = $user;
    }
    public function getUserRol($rol){
        $_SESSION['userRol'] = $rol;
    }
    public function getUserRol(){
        return $_SESSION['userRol'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>
