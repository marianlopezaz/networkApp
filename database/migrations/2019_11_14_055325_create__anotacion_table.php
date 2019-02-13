<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnotacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Anotacion', function (Blueprint $table) {
            $table->increments('idAnotacion');
            $table->string('detalleAnotacion');
            //CLAVE FORANEA A CONTACTO
            $table->unsignedInteger('contacto_id')->nullable();
            $table->foreign('contacto_id')->references('idContacto')->on('Contacto');
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
        Schema::dropIfExists('Anotacion');
    }
}
