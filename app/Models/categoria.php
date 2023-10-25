<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function encomendas(){

        return $this->hasMany(Encomenda::class,'categoria_id', 'id');
    }


}
