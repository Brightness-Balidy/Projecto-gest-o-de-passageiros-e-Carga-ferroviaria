<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destino;

class DestinosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destino::create([
            'nome' => 'Chaimite',
            'preco' => '1000',
            'distancia' => '3000', 
            'imagem' => 'https://via.placeholder.com/400x400.png/00ff22?text=qui'
        ]);
    }
}
