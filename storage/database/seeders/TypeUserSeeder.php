<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typeuser;
class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Typeuser::create([
            'nm_type' => 'User',
            'ds_type' => 'Usuário comum',
        ]);
        Typeuser::create([
            'nm_type' => 'Admin',
            'ds_type' => 'Usuário administrador',
        ]);
    }
}
