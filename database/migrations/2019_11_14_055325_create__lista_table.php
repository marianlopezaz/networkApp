<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lista', function (Blueprint $table) {
            $table->increments('idLista');
            $table->string('nombreLista');
            //Clave foranea a users
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('idUsuario')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lista');
    }
}
