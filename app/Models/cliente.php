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
        //former cliente, just testing
    public function encomenda(){

        return $this->hasMany(Encomenda::class, 'cliente_id','id');
    }
    public function bilhete(){
        
        return $this-> hasMany(Bilhete::class, 'id_cliente','id');
    }
}
