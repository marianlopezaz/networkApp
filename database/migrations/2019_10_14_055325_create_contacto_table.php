<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contacto', function (Blueprint $table) {
            $table->increments('idContacto');
            $table->string('nameCont');
            $table->string('lastNameCont');
            $table->string('email');
            $table->unsignedInteger('telefono')->nullable();
           
            //CLAVES FORANEAS
            $table->unsignedInteger('provincia_id')->nullable();
            $table->foreign('provincia_id')->references('idProvincia')->on('Provincia');

            $table->unsignedInteger('prioridad_id')->nullable();
            $table->foreign('prioridad_id')->references('idPrioridad')->on('Prioridad');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('idUsuario')->on('Users');

            //TIME STAMP
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
        Schema::dropIfExists('contacto');
    }
}
