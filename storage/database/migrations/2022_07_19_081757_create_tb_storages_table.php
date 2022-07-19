<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_storages', function (Blueprint $table) {
            $table->id('id_storage');
            $table->unsignedBigInteger('fk_product');
            $table->integer('qtd_product');
            $table->timestamps();

            $table->foreign('fk_product')->references('id_product')->on('tb_products');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_storages');
    }
};
