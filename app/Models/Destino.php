<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    public function viagem(){

        return $this->hasMany(Viagen::class, 'destino_id', 'id');
    }
    public function bilhete(){
        return $this->hasMany(Bilhete::class, 'destino_id','id');
    }
}
