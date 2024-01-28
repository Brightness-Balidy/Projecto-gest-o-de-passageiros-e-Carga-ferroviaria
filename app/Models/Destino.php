<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    public function destinos(){

        return $this->hasMany(Viagen::class, 'destino_id', 'id');
    }
}
