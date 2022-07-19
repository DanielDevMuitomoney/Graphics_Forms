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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nm_user');
            $table->string('nm_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('nm_password');
            $table->unsignedBigInteger('fk_typeuser');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('fk_typeuser')->references('id_typeuser')->on('tb_typeusers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
