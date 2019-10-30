<?php
class UserSession{

    public function __construct(){
      session_start();
    }

    public function setUserDpi($user){//dpi
        $_SESSION['userDpi'] = $user;
    }

    public function getUserDpi(){
        return $_SESSION['userDpi'];
    }
    public function setUserName($user){//dpi
        $_SESSION['userName'] = $user;
    }

    public function getUserName(){
        return $_SESSION['userName'];
    }
    public function setUserRol($rol){//1->admin
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
