<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_cliente',
        'contacto',
        'assento',
        'viagem'
    ];

    //entregou a chave estrangeira a bagagem
    public function bilhete()
    {
        return $this->hasMany(Bagagem::class, 'bagagem_id', 'id');
    }

    //nome da tabela
    protected $table = 'bilhetes';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    //deve receber chave estrangeira de viagem 
    public function viagem()
    {
        return $this->belongsTo(Viagen::class, 'viagem');
    }
}
