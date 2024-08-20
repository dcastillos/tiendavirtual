<?php
namespace Core\Http;

class Session{
    //Para inicializar la session
    public function __construct()
    {
        session_start();
    }

    //Agregar un nuevo elemento a la sesion
    //Modificar un elemento existe
    public function set($key, $value){
        $_SESSION[$key] = $value;
    }

    //Recuperar una variable de la sesion
    public function get($key, $default = null){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return $default;
        }
    }

    //Remover un elemento de la sesion
    public function remove($key){
        unset($_SESSION[$key]);
    }
}