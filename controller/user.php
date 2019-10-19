<?php

class User extends DB{
    private $username;
    private $img;
    private $tipo;
    private $tema;
    public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM PERSONA WHERE nombre = :user AND clave = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function userNameExists($user){
        $query = $this->connect()->prepare('SELECT * FROM PERSONA WHERE nombre = :user');
        $query->execute(['user' => $user]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM PERSONA WHERE nombre = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->username = $currentUser['nombre'];
            $this->img=$currentUser['foto'];
            $this->tipo=$currentUser['tipo'];
            $this->tema=$currentUser['css'];
        }
    }

    public function getNombre(){
        return $this->username;
    }
    public function getFoto(){
        return $this->img;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getTema(){
        return $this->tema;
    }
}

?>
