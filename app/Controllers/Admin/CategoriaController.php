<?php

namespace app\Controllers\Admin;

use App\Models\Categoria;
use Core\Http\Request;
use Core\Routing\Controller;
use Core\View\View;

class CategoriaController extends Controller{
    public function index(){
        $view = new View();
        return $view -> render("admin/categorias/index");
    }

    public function store(){
        try{
            //Crear una nueva categoria
            //INSERT INTO categoria(nombre, created_at, update_at)
            //VALUES('Zapatillas', '2024-07-20 22:00:00', '2024-07-20 22:00:00')
            $categoria = new Categoria();
            $categoria->nombre = 'Acessorios';
            //$categoria->create_at = date('Y-m-d h:i:s');
            //$categoria->update_at = date('Y-m-d h:i:s');
            $categoria->save();

            return "Categoria Registrada...!!";
        }catch(\Throwable $error){
            return $error;
        }        
    }

    public function update($codigo){
        try {
            //Consultar su el registro existe
            //Select * from categoria where deleted_at IS NULL AND codigo = 20
            $categoria = Categoria::find($codigo);
            if(is_null($categoria)){
                return "No existe la categoria";
            }
            //Procedemos a actualizar
            $categoria -> nombre = 'Polos';
            $categoria -> save(); //tambien se utiliza para actualizar un registro
            return "Categoria actualizada correctamente";
        } catch (\Throwable $error) {
            return $error -> getMessage();
        }
    }

    public function delete($codigo){
        try {
            $categoria = Categoria::find($codigo);
            if(is_null($categoria)){
                return "Categoria no existe";
            }
            $categoria -> delete();//DELTE FROM, UPDATE set DELETED_AT =
            return "Eliminado correctamente";
        } catch (\Throwable $error) {
            return $error -> getMessage();
        }
    }

    public function search(Request $request){
        $busqueda = $request -> get("busqueda","-");
        //select id, nombre, careated_at, update_at from categoria WHERE deleted_at IS NULL
        //AND nombre LIKE '%polos%'
        //ORDER BY nombre DESC
        //$listado = Categoria::all();
        $listado = Categoria::select('codigo', 'nombre', 'created_at', 'updated_at')
        ->orderBy('nombre', 'ASC')
        ->where('nombre', 'LIKE', '%'.$busqueda.'%')
        ->get();
        $view = new View();
        return $view -> render("admin/categorias/search", ["listado" => $listado]);
    }
}