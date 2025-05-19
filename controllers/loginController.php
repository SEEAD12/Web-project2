<?php

namespace Controllers;

require '../db_connection.php';

class loginController{
        

    public function login($email,$password){
        if($email === 'admin@system.com' && $password === '12345678'){
            setcookie('login', true, time() + (86400 * 30), "/");
            return true;
        }else{
            return false;
        }
    }

    public function logout(){
        setcookie('login','', time() - (86400 * 30), "/");
        header("location:index.php");
    }


}