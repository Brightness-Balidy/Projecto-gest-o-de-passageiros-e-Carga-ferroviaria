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
            'nome' => 'Caia',
            'preco' => '550',
            'distancia' => '3000', 
        ]);
    }
}
