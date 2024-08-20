<?php

namespace App\Controllers;

use Core\Routing\Controller;
use Core\View\View;

class TiendaController extends Controller{

    public function listarUsuario(){
        //$usuarios = ["Andres", "Jacob", "Alex", "Juan", "Martin", "Jhoel"];
        //$parametros = ["listado"=>$usuarios, "usuario"=>"Juan Perez"];
        $view = new View();
        return $view -> render("listado_usuarios");
    }

    public function listarProducto(){
        $view = new View();
        return $view -> render("listado_productos");
    }

    public function reporte() {
        //retornar un archivo vista
        $view = new View();
        return $view -> render("usuarios");
    }

    public function crearUsuario(){
        return "Se esta creando el usuario...";
    }
}