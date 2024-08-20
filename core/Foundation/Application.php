<?php

namespace Core\Foundation;

use Core\Database\ORM;
use Core\Routing\Router;

/*La clase application se encarga de llamar a todos los componentes de mi proyecto
-Router
-BD
-Views
-Servidor de correo
*/
class Application{

    public Router $router;
    public static string $base_dir;
    
    public function __construct($base_dir)
    {
        $this -> router = new Router();
        self::$base_dir = $base_dir;
        //Iniciar la conexion
        ORM::init();
    }

    public function run(){
        echo $this -> router -> compare();
    }
}