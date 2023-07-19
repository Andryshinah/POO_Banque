<?php
namespace App\Repository;

class Session {

    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
    }

    public function setSession($key, $value){
        $_SESSION[$key] = $value;
    }

    public function getSession($key){
        return $_SESSION[$key];
    }

    public function destroy(){
        session_destroy();
    }
}
?>