<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encomenda extends Model
{
    use HasFactory;

    protected $table ='encomendas';

    public function user(){
        return $this-> belongsTo(User::class, 'usuario_id');
    }

    public function categoria(){
        return $this-> belongsTo(Categoria::class,'categoria_id');
    }

    public function cliente(){
        return $this-> belongsTo(Cliente::class, 'cliente_id');
    }
    public function viagem(){
        return $this-> belongsTo(Viagen::class,'viagem_id');
    }

}
