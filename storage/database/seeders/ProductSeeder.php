<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductModel::create([
            'nm_product'=>'Camisa Poliester da Reno',
            'ds_product'=>'Camisa 100% feita de algodão e revestida com material de mais alta qualidade',
            'fk_user_create'=> 1,
            'qtd_product'=>17,
            'fk_category'=>1
        ]);
    }
}
