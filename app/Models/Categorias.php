<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';      // si no sigues la convención
    protected $fillable = ['nombre'];
    public function productos()
    {
        return $this->hasMany( \App\Models\Productos::class, 'categoria_id' );
    }
}
