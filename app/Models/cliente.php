<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'contacto',
        'codigo'
    ]; 

    public function cliente(){

        return $this->hasMany(Encomenda::class, 'cliente_id','id');
    }
}
