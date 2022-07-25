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
            'nm_user' => 'Daniel Alvarez de Almeida',
            'nm_email' => 'ddd@ddd.com',
            'nm_password' => '$2y$10$lMUH95uKkGdEgVkLJ3INXeLm2G43mWi/Hb7tbYr.Jx6gm/uOTu8LS',
            'fk_typeuser' => 2
        ]);

        User::create([
            'nm_user' => 'Larissa Poliana',
            'nm_email' => 'lari@lari.com',
            'nm_password' => '$2y$10$lMUH95uKkGdEgVkLJ3INXeLm2G43mWi/Hb7tbYr.Jx6gm/uOTu8LS',
            'fk_typeuser' => 1
        ]);
    }
}
