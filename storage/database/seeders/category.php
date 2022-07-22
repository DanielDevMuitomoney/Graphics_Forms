<?php

namespace Database\Seeders;

use App\Models\category as ModelsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsCategory::create(
            [
                'nm_category'=>'Vestimenta'
            ]);
            ModelsCategory::create(
            [
                'nm_category'=>'Eletrônicos'
            ]);
            
    }
}
