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
        Schema::create('tb_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user_create');
            $table->unsignedBigInteger('fk_product');
            $table->integer('qtd_product');
            $table->unsignedBigInteger('fk_status');
            $table->unsignedBigInteger('fk_user_update');
            $table->dateTime('dt_close');

            $table->timestamps();

            $table->foreign('fk_user_create')->references('id_user')->on('users');

            $table->foreign('fk_product')->references('id_product')->on('tb_products');

            $table->foreign('fk_status')->references('id_status')->on('tb_status');

            $table->foreign('fk_user_update')->references('id_user')->on('users');






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_requests');
    }
};
