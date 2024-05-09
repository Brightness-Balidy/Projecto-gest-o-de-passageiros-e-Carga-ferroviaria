<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagagen extends Model
{
    use HasFactory;


    protected $fillable = [
        'bilhete_id',
        'categoria_id',
        'peso'
    ];

    //nome da tabela
    protected $table='bagagens';

    //recebe chave estrangeira de bilhetes
    public function bilhete(){
        return $this->belongsTo(Bilhete::class, 'bilhete_id');
    }

    //recebe chave estrangeira de categoria
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
