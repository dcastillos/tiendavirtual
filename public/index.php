<?php

date_default_timezone_set("America/Lima");

use \Core\Foundation\Application;

# directorio principal del proyecto
$base_dir = dirname(__DIR__);
 
# PSR-4: autoloading
require $base_dir . "/vendor/autoload.php";

# crear un objeto de la clase application
$app = new Application($base_dir);
$app -> router -> get("/admin", [\App\Controllers\Admin\AdminController::class, "index"]);
$app -> router -> get("/admin/categorias/update/{codigo}", [\App\Controllers\Admin\CategoriaController::class, "update"]);
$app -> router -> get("/admin/categorias/delete/{codigo}", [\App\Controllers\Admin\CategoriaController::class, "delete"]);
$app -> router -> get("/admin/categorias/search", [\App\Controllers\Admin\CategoriaController::class, "search"]);
$app -> router -> get("/admin/categorias/store", [\App\Controllers\Admin\CategoriaController::class, "store"]);
$app -> router -> get("/admin/categorias/listar", [\App\Controllers\Admin\CategoriaController::class, "index"]);
$app -> router -> get("/usuarios/listar", [\App\Controllers\TiendaController::class,"listarUsuario"]);
$app -> router -> get("/productos/listar", [\App\Controllers\TiendaController::class,"listarProducto"]);

$app -> run();


//echo 'Todo ok';