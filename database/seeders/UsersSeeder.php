<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'nome' => 'Henry',
        'sobrenome' => 'Balidy',
        'email' => 'Henry@gmail.com',
        'password' => bcrypt('henry26'),
      ]);
      //henry26 1st user
      //ialda19 2nd user
      //shirley18
      //henry26
    }
}
