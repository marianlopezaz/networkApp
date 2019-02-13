<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evento', function (Blueprint $table) {
            $table->increments('idEvento');
            $table->string('nombreEvento');
            $table->date('fechaEvento');
            $table->time('horaEvento')->nullable();
            $table->string('detalleEvento')->nullable();
            $table->timestamps();
            //CLAVE FOREANEA A USERS Y CONTACTOS
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('idUsuario')->on('users');
            $table->unsignedInteger('contacto_id')->nullable();
            $table->foreign('contacto_id')->references('idContacto')->on('contacto');
            
           
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Evento');
    }
}
