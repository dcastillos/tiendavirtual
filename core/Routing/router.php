<?php

namespace Core\Routing;

use Core\Http\Request;

class Router{
    protected array $routes = [];

    public function get($url, $action){
        $this->routes["GET"][]=[
            "url" => $url,
            "action" => $action
        ];
    }

    public function post($url, $action){
        $this->routes["POST"][]=[
            "url" => $url,
            "action" => $action
        ];
    }

    public function compare(){
        // Capturando la peticion
        $request = Request::createFromGlobals();

        // Obtener el metodo HTTP
        $metodoHttp = $request -> getMethod();

        // Obtener la url
        $url = $request -> getPathInfo();

        // Comparar, filtrar rutas
        $rutas = $this -> routes[$metodoHttp];
        $action = false;
        $parametros = [];

        foreach($rutas as $ruta){
            if($ruta["url"] == $url){
                $action = $ruta["action"];
                break;
            }else{
                $ruta_en_partes = explode("/", $ruta["url"]);
                foreach($ruta_en_partes as $indice => $item){
                    if(substr($item, 0, 1) == "{"){
                        $ruta_en_partes[$indice] = "([A-Za-z0-9]+)";
                    }
                }
                $ruta_unida = implode("/", $ruta_en_partes);
                $ruta_patron = "#^" . $ruta_unida . "$#";

                if(preg_match($ruta_patron, $url, $coincidencia)){
                    array_shift($coincidencia);
                    $parametros = $coincidencia;
                    $action = $ruta["action"];
                    break;
                }
               
            }
        }

        if($action === false){
            return "Ruta no encontrada";
        }

        $claseController = $action[0];
        $metodoController = $action[1];

        $objetoControlador = new$claseController();
        //Todos los controladores reciben un parametro REQUEST
        $parametros[]=$request;

        return call_user_func_array([$objetoControlador, $metodoController], $parametros);

    }

}