<?php

namespace App\Controllers\Admin;

use Core\Routing\Controller;
use Core\View\View;

class AdminController extends Controller{
    public function index(){
        $view = new View();
        return $view -> render("admin/index");
    }
}