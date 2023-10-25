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
}
