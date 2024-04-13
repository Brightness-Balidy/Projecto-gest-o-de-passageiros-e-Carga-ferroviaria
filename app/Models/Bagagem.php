<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagagem extends Model
{
    use HasFactory;

    //adicionar o array fillable

    //nome da tabela 

    protected $table ='bagagens';

    public function bilhetes()
    {
        return $this->belongsTo(Bilhete::class, 'bilhete_id');
    }

    public function categorias(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
