<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Persona', function (Blueprint $table) {
            $table->id();
            $table->string('primerNombre',255);
            $table->string('segundoNombre',255);
            $table->string('primerApellido',255);
            $table->string('segundoApellido',255);
            $table->string('tipoDocumento',1);
            $table->bigInteger('numeroDocumento')->unique();
            $table->date('fechaExpedicion');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_persona');
    }
}
