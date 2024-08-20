<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model{
    use SoftDeletes;
    protected $table = 'cliente';

    public function distrito(){
        //return $this -> belongsTo(distrito::class, 'distrito_id');
    }
}