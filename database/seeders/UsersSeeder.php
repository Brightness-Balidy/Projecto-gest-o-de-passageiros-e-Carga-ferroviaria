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
        'nome' => 'Ialda',
        'sobrenome' => 'Sixpênce',
        'email' => 'ialda@gmail.com',
        'password' => bcrypt('ialda19'),
      ]);
      //henry26 1st user
      //ialda19 2nd user
    }
}
