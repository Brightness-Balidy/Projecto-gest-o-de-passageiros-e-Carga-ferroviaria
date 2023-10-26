<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome'=> 'Alberto',
            'sobrenome'=> 'Leao',
            'contacto' => '838688975',
            'codigo'=> '1124523278'
        ]);
    }
}
