<?php
require_once './libs/Database.php';

class UserController extends DB
{
    /*
        El usuario no exige id por que en la base de datos esta definido como AutoIncremental
    */

    public function userRegister($userName, $userPwd, $userEmail)
    {
        $query = $this->connect()->prepare("INSERT INTO usuarios (usuarioNombre, usuarioContraseña, usuarioCorreo) VALUES ( :userName, :userPwd, :userEmail )");
        try {
            if ($query->execute(['userName' => $userName, 'userPwd' => $userPwd, 'userEmail' => $userEmail])) {
                return true;
            }
        } catch (PDOException $err) {
            return false;
        }
    }

    public function login($userName, $userPwd){
        $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE usuarioNombre = :userName AND usuarioContraseña = :userPwd ");
        $query->execute(['userName' => $userName, 'userPwd' => $userPwd]);
        if($query->rowCount()){
            return true;
        } else {
            return false;
        }
    }

    public function getUser($userName){
        $query = $this->connect()->prepare("SELECT * FROM usuarios WHERE usuarioNombre = :userName ");
        $query->execute(['userName' => $userName]);
        if($query->rowCount()){
            return true;
        } else {
            return false;
        }
    }
}
