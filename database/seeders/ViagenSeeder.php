<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Viagen;
class ViagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Viagen::create([
            'data'=>'2023-11-01',
            'local_partida'=>'Beira',
            'destino_id'=> '2'
        ]);
    }
}
