<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viagen extends Model
{
    use HasFactory;

    public function encomenda(){

        return $this->hasMany(Encomenda::class,'viagem_id', 'id');
    }

    public function bilhete(){
        return $this->hasMany(Bilhete::class, 'viagem_id', 'id');
    }
    protected $fillable = [
        'data',
        'local_partida',
        'destino_id',
        'data_partida',
        'hora_partida',
        'preco'
    ];

    //nome da tabela
    protected $table ='viagens';

    public function destino(){
        return $this ->belongsTo(Destino::class, 'destino_id');
    }

    
}
