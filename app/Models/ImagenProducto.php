<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImagenProducto extends Model{
    use SoftDeletes;

    protected $tables = 'imagenproducto';
}