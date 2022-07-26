<?php

namespace Database\Seeders;

use App\Models\StatusModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusModel::create([
            'nm_status'=>'Pendente',
        ]);

        StatusModel::create([
            'nm_status'=>'Cancelado',
        ]);

        StatusModel::create([
            'nm_status'=>'Aceito',
        ]);
    }
}
