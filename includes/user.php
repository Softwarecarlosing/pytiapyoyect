<?php

include_once 'db.php';


class User extends DB{

    private $nombre;
    private $username;


    // validacion de suaurios
    public function userExists($user, $pass){

        $md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM administradores WHERE correoelectronicoadmin = :user AND password = :$md5pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }


    //Envio de los datos
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM administradores WHERE correoelectronicoadmin = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['correoelectronicoadmin'];
            $this->username = $currentUser['correoelectronicoadmin'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>
