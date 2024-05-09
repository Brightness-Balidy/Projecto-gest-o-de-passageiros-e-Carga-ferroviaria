<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cliente',
        'destino_id',
        'viagem',
    ];

    
    //nome da tabela
    protected $table= 'bilhetes';

    //recebe chave estrangeira dw cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    //deve receber chave estrangeira de viagem 
    public function viagem()
    {
        return $this->belongsTo(Viagen::class, 'viagem');
    }
    //deve receber chave estrangeira de destino
    public function destino(){
        return $this->belongsTo(Destino::class,'destino_id');
    }

    //entregou a chave estrangeira a bagagem
    public function bagagen(){
        return $this->hasMany(Bagagen::class, 'bilhete_id', 'id');
    }
 
}
