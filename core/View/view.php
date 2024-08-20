<?php

namespace Core\View;

use Core\Foundation\Application;

class View{

    protected array $sections = [];
    protected string $layout = "";

    public function render($viewFile, $parameters = []) {
        $contentView = $this -> getContentView($viewFile, $parameters);
        if($this->layout != ""){
            $contentView =$this -> getContentView($this->layout, $parameters);
        }
        return $contentView;
    }

    protected function printSection($section){
        if($this -> sections[$section]){
            return $this -> sections[$section];
        }else{
            return "";
        }
    }

    protected function startSection($section){
        $this -> sections[$section] = "";
        ob_start();
    }

    protected function endSection($section){
        $contentSection = ob_get_clean();
        $this -> sections[$section] = $contentSection;
    }

    protected function setLayout($layout){
        $this -> layout = $layout;
    }

    protected function getContentView($viewFile, $parameters){
        # ["edad" => 20, "fechaNacimiento" => "19/06/1992", "nombre" => "Andres"]
        extract($parameters);
        /*
            $edad = 20;
            $fechaNacimiento = "19,06,1992";
            $nombre = "Andres";
        */
        $base_dir = Application::$base_dir;
        ob_start();
        require $base_dir . "/views/" . $viewFile . ".php";
        return ob_get_clean();
    } 

}