<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
//entrega chave estrangeira a encomendas
    public function encomendas(){
        return $this->hasMany(Encomenda::class,'categoria_id', 'id');
    }
//entrega chave estrangeira a bagagen
    public function bagagen(){
        return $this->hasMany(Bagagen::class, 'categoria_id','id');
    }


}
