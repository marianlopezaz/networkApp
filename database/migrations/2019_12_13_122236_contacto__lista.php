<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactoLista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contacto_Lista', function (Blueprint $table) {
            $table->increments('idCL');
            $table->integer('contacto_id')->unsigned();
            $table->foreign('contacto_id')->references('idContacto')->on('contacto');
            $table->integer('lista_id')->unsigned();
            $table->foreign('lista_id')->references('idLista')->on('lista');
           
            
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
        Schema::dropIfExists('ContactoLista');
    }
}
